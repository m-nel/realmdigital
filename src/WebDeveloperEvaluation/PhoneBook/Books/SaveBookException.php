<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books;

use Exception;

class SaveBookException extends Exception
{
    /** @var Book */
    private $book;

    public function __construct(Book $book, $message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
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
