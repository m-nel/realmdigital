<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Contacts;

use Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections\Connection;

interface Contact
{
    /**
     * @param $firstName
     * @param $middleName
     * @param $lastName
     *
     * @return Contact
     */
    public static function create($firstName, $middleName, $lastName);

    /**
     * @param Connection $connection
     */
    public function addConnection(Connection $connection);

    /**
     * UUID (v4 preferably)
     * @return string
     */
    public function getUuid();

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @return string
     */
    public function getMiddleName();

    /**
     * @return string
     */
    public function getLastName();
}
