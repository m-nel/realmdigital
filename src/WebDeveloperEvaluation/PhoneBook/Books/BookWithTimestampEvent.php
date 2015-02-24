<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books;

class BookWithTimestampEvent extends BookEvent
{
    /** @var int */
    protected $timestamp;

    public function __construct(Book $book)
    {
        parent::__construct($book);
        $this->timestamp = time();
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
