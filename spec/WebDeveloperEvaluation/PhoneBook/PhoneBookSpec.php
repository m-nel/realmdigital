<?php namespace spec\Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook;

use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\Book;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\BookBook;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\BookCreatedEvent;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\BookRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections\Connection;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections\ConnectionRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\Contact;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\ContactAddedToBookEvent;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\ContactsRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Events\EventDispatcher;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PhoneBookSpec extends ObjectBehavior
{
    function let(BookRepository $books, ContactsRepository $contacts, ConnectionRepository $connections, EventDispatcher $eventDispatcher)
    {
        $this->beConstructedWith($books, $contacts, $connections, $eventDispatcher);
    }

    function it_can_create_books($books, Book $book)
    {
        $uuid = 'uuid';
        $name = 'Professional';
        $description = "Colleagues 'n such";

        $books->create($name, $description)->willReturn($book);
        $books->create('Friends', null)->willReturn($book);

        $this->createBook($name, $description)->shouldReturnAnInstanceOf(Book::class);
        $this->createBook('Friends')->shouldReturnAnInstanceOf(Book::class);
    }

    function it_can_create_contacts($contacts, Contact $contact)
    {
        $title = 'Mr.';
        $firstName = 'Michael';
        $middleName = 'Adriaan';
        $lastName = 'Nel';

        $contacts->create($title, $firstName, $middleName, $lastName)->willReturn($contact);
        $contacts->create(null, 'Ross', null, 'Tuck')->willReturn($contact);

        $this->createContact($firstName, $lastName, $middleName, $title)->shouldReturnAnInstanceOf(Contact::class);
        $this->createContact('Ross', 'Tuck')->shouldReturnAnInstanceOf(Contact::class);
    }

    function it_can_save_a_book_and_dispatches_book_events($books, $eventDispatcher, Book $book, BookCreatedEvent $bookCreatedEvent, ContactAddedToBookEvent $contactAddedEvent)
    {
        $books->save($book)->shouldBeCalled();

        $bookEvents = [ $bookCreatedEvent, $contactAddedEvent ];
        $book->releaseEvents()->willReturn($bookEvents);

        $eventDispatcher->dispatchAll($bookEvents)->shouldBeCalled();

        $this->saveBook($book);
    }

    function it_can_create_a_connection($connections, Connection $connection)
    {
        $type = 'phone';
        $name = 'mobile';
        $value = '082 000 0000';

        $connections->create($type, $name, $value)->willReturn($connection);

        $this->createConnection($type, $name, $value)->shouldReturnAnInstanceOf(Connection::class);
    }
}
