<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts;

use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\Book;
use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books\BookWithTimestampEvent;

class ContactAddedToBookEvent extends BookWithTimestampEvent
{
    /** @var Contact */
    private $contact;

    public function __construct(Book $book, Contact $contact)
    {
        parent::__construct($book);
        $this->contact = $contact;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }
}
