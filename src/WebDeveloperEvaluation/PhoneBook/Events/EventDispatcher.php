<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Events;

interface EventDispatcher
{
    /**
     * @param array $events
     */
    public function dispatchAll(array $events);
}
