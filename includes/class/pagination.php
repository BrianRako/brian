<?php

class paginator
{
    public    $_perPage;  // display user per page
    public    $_currentPage; // current page
    public    $_first; // first page
    public    $_page; // number Page
    protected $_user; // number user

    protected $_db; // PDO DB connect

    public function __construct(PDO $_db, $_perPage)
    {
        $this->_db      = $_db;
        $this->_perPage = $_perPage;
    }

    public function getCurrentPage()
    {
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $this->_currentPage = (int) strip_tags($_GET['page']);
        } else {
            $this->_currentPage = 1;
        }
    }

    public function FirstPage()
    {
        $this->_first = ($this->_currentPage * $this->_perPage) - $this->_perPage;
        return $this->_first;
    }

    public function NumPage()
    {
        $this->_page = ceil($this->_user / $this->_perPage);
        return $this->_page;
    }

    protected function numUser()
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) AS user FROM utilisateurs');
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        $this->_user = $result->user;
    }

    public function getNumUser()
    {
        return $this->_user;
    }
}
