<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books;

class BookEvent
{
    /** @var Book */
    private $book;

    /**
     * @param Book $book
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * @return Book
     */
    public function getBook()
    {
        return $this->book;
    }
}
