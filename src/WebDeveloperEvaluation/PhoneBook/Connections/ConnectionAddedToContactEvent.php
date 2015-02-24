<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections;

use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\Book;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\Contact;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\ContactAddedToBookEvent;

class ConnectionAddedToContactEvent extends ContactAddedToBookEvent
{
    /** @var Connection */
    private $connection;

    public function __construct(Book $book, Contact $contact, Connection $connection)
    {
        parent::__construct($book, $contact);
        $this->connection = $connection;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
