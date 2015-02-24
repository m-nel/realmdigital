<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections;

interface Connection
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
    public function getValue();

    /**
     * @return string
     */
    public function getType();
}
