<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Connections;

interface ConnectionRepository
{
    /**
     * @param string $type
     * @param string $name
     * @param string $value
     *
     * @return Connection
     */
    public function create($type, $name, $value);
}
