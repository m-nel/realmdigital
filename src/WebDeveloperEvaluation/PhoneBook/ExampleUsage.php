<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook;

use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\BookRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\SaveBookException;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections\Connection;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections\ConnectionRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\ContactsRepository;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Events\EventDispatcher;

/**
 * The PhoneBook service does not support UPDATING at this time,
 * yet adding setters to Book, Contact & Connection would
 * be all that is required to achieve this.
 *
 * The PhoneBook service does not support DELETING at this time,
 * yet adding <code>$repo->destroy($book)</code> would enable this.
 *
 * The PhoneBook service does not support QUERYING at this time,
 * yet adding <code>$repo->getByUuid($book->getUuid())</code>
 * would probably be one of the first implemented.
 *
 * A relational DB could look like this:
 *      books {
 *           PK uuid string
 *              name string
 *              description text
 *      }
 *      contacts {
 *           PK uuid string
 *              first_name string
 *              middle_name text
 *              last_name text
 *      }
 *      connections {
 *           PK uuid string
 *              type string
 *              name text
 *              value text
 *      }
 *      book_contacts {
 *        PK|FK book_uuid string
 *        PK|FK contact_uuid string
 *      }
 *      contact_connections {
 *        PK|FK contact_uuid string
 *        PK|FK connection_uuid string
 *      }
 */
class ExampleUsage
{
    public static function run(BookRepository $bookRepository, ContactsRepository $contactsRepository, ConnectionRepository $connectionRepository, EventDispatcher $eventDispatcher)
    {
        $phoneBook = new PhoneBook($bookRepository, $contactsRepository, $connectionRepository, $eventDispatcher);

        // Create a book
        $book = $phoneBook->createBook('Example');
        $book->getUuid(); // generated uuid (v4 preferably)
        $book->getName(); // 'Example'
        $book->getDescription(); // null

        // Create a contact
        $contact = $phoneBook->createContact('Realm', 'Digital');
        $contact->getUuid();
        $contact->getFirstName(); // Realm
        $contact->getLastName(); // Digital
        $contact->getMiddleName(); // null

        // Add a contact to a book
        $book->addContact($contact);

        // Create a connection
        $connection1 = $phoneBook->createConnection('phone', 'office', '021 000 000');
        $connection2 = $phoneBook->createConnection('phone', 'mobile', '089 000 000');
        $connection3 = $phoneBook->createConnection('www', 'homepage', 'http://www.realmdigital.co.za/');
        $connection1->getUuid();
        $connection1->getType(); // phone
        $connection1->getName(); // office
        $connection1->getValue(); // 021 000 000

        // Add a connection to a contact
        $contact->addConnection($connection1);
        $contact->addConnection($connection2);
        $contact->addConnection($connection3);

        // Save the book
        try {
            $phoneBook->saveBook($book);
        }
        catch (SaveBookException $e) {
            // log fail
        }

        /* After save, events get fired:
         * BookCreatedEvent
         * ContactAddedToBookEvent
         * ConnectionAddedToContactEvent (in this example x2)
         * could add more as needed
         * */
    }
}
