<?php
include_once('Model/Book.php');

class Model
{
    public function getBookList()
    {
        return array(
            'PHP Basic' => new Book(1, 'PHP Basic', 650.00, 'Nahid', 'To Learn PHP Language'),
            'JS Basic' => new Book(2, 'Javascript Basic', 300.00, 'Nahidul Islam', 'To Learn JS Language'),
        );
    }

    public function getBook($title)
    {
        $book_list = $this->getBookList();
        return $book_list[$title];
    }
}
