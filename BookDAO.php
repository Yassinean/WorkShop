<?php



require_once "./database.php";
require_once "./book.class.php";



class BookDAO 
{
    public $db ;

    public function __construct()
    {
    }


    public function getBooks()
    {
        $this->db = new database() ;
        $queryBook = "select * from BOOK ";
        $query = $this->db->connection()->query($queryBook);
        if ($query) {
            $booksDB = $query->fetchAll(PDO::FETCH_ASSOC);
            $books = array();
            foreach ($booksDB as $book) {
                $books[] = new book($book["ISBN"], $book["Title"], $book["Author"], $book['Price'], $book['NbrofPages'], $book['Genra']);
            }
            return $books;
        }
        return null;
    }
}
