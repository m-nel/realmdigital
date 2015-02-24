<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts;

interface ContactsRepository
{
    /**
     * @param string $title
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     *
     * @return Contact
     */
    public function create($title, $firstName, $middleName, $lastName);
}
