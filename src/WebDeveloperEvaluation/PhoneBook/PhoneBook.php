<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook;

use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\Book;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\BookBook;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\BookRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections\Connection;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections\ConnectionRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\Contact;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\Contacts;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\ContactsRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Events\EventDispatcher;

class PhoneBook
{
    /** @var BookRepository */
    private $books;
    /** @var ContactsRepository */
    private $contacts;
    /** @var EventDispatcher */
    private $eventDispatcher;
    /** @var ConnectionRepository */
    private $connections;

    /**
     * @param BookRepository       $books
     * @param ContactsRepository   $contacts
     * @param ConnectionRepository $connections
     * @param EventDispatcher      $eventDispatcher
     */
    public function __construct(
        BookRepository $books,
        ContactsRepository $contacts,
        ConnectionRepository $connections,
        EventDispatcher $eventDispatcher
    ) {
        $this->books = $books;
        $this->contacts = $contacts;
        $this->connections = $connections;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param string $name
     * @param string $description
     *
     * @return Book
     */
    public function createBook($name, $description = null)
    {
        return $this->books->create($name, $description);
    }

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $middleName
     * @param string $title
     * @return Contact
     */
    public function createContact($firstName, $lastName, $middleName = null, $title = null)
    {
        return $this->contacts->create($title, $firstName, $middleName, $lastName);
    }

    /**
     * @param string $type
     * @param string $name
     * @param string $value
     *
     * @return Connection
     */
    public function createConnection($type, $name, $value)
    {
        return $this->connections->create($type, $name, $value);
    }

    /**
     * @param Book $book
     *
     * @return bool
     */
    public function saveBook(Book $book)
    {
        $this->books->save($book);

        $events = $book->releaseEvents();
        $this->eventDispatcher->dispatchAll($events);
    }
}
