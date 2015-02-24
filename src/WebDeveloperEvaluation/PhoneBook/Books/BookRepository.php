<?php namespace Mnel\Realmdigital\WebDeveloperEvaluation\PhoneBook\Books;

interface BookRepository
{
    /**
     * @param string $name
     * @param string $description
     *
     * @return Book
     */
    public function create($name, $description);

    /**
     * @param Book $book
     *
     * @return boolean
     */
    public function save(Book $book);

    /**
     * @param string $name
     *
     * @return array|Book
     */
    public function getAllBooksByNameAsc($name);
}
