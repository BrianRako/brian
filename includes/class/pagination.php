<?php

class paginator
{
    public $_perPage; // limit display user
    public $_currentPage; // current page
    public $_first; // first page
    public $_user; // max user

    protected $_db; // PDO connect

    public function __construct(PDO $_db)
    {
        $this->_db = $_db;
    }

    public function getCurrentPage()
    {
        if (isset($_GET['page']) && !empty($_GET['page'])) {
        }
    }
}
