<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books;

use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts\Contact;

interface Book
{
    /**
     * @param $uuid
     * @param $name
     * @param $description
     * @raises BookCreatedEvent
     *
     * @return Book
     */
    public static function create($uuid, $name, $description);

    /**
     * UUID (v4 preferably)
     * @return string
     */
    public function getUuid();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param Contact $contact
     * @return Contact
     */
    public function addContact(Contact $contact);

    /** @return array */
    public function releaseEvents();
}
