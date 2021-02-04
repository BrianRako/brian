<?php

class paginator
{
    /**
     * set the number of items per page.
     * 
     * @var numeric
     */
    private $_perPage;

    /**
     * set get parameters for fetching the page number.
     * 
     * @var string
     */
    private $_instance;

    /**
     * sets the page number.
     * 
     * @var numeric
     */
    private $_page;

    /**
     * set the limit dor the data source.
     * 
     * @var string
     */
    private $_limit;

    /**
     * set the total number of record/items.
     * 
     * @var numeric
     */
    private $_totalRows = 0;

    /**
     * set custom css classes for additional flexibility.
     * 
     * @var string
     */
    private $_customCSS;



    /**
     *  __construct
     *  
     *  pass values when class is istantiated 
     *  
     * @param numeric  $_perPage  sets the number of iteems per page
     * @param numeric  $_instance sets the instance for the GET parameter
     */
    public function __construct($perPage, $instance, $customCSS = '')
    {
        $this->_instance = $instance;
        $this->_perPage = $perPage;
        $this->set_instance();
        $this->_customCSS = $customCSS;
    }


    /**
     * get_start
     *
     * creates the starting point for limiting the dataset
     * @return numeric
     */
    public function get_start()
    {
        return ($this->_page * $this->_perPage) - $this->_perPage;
    }

    /**
     * set_instance
     * 
     * sets the instance parameter, if numeric value is 0 then set to 1
     *
     * @var numeric
     */
    private function set_instance()
    {
        $this->_page = (int) (!isset($_GET[$this->_instance]) ? 1 : $_GET[$this->_instance]);


        if ($this->_page == 0) {
            $this->_page = 1;
        } elseif ($this->_page < 0) {
            $this->_page = 1;
        } else {
            $this->_page = $this->_page;
        }
    }

    /**
     * set_total
     *
     * collect a numberic value and assigns it to the totalRows
     *
     * @var numeric
     */
    public function set_total($_totalRows)
    {
        $this->_totalRows = $_totalRows;
    }

    /**
     * get_limit
     *
     * returns the limit for the data source, calling the get_start method and passing in the number of items per page
     * 
     * @return string
     */
    public function get_limit()
    {
        return "LIMIT " . $this->get_start() . "," . $this->_perPage . "";
    }



    /**
     * page_links
     *
     * create the html links for navigating through the dataset
     * 
     * @var sting $path optionally set the path for the link
     * @return string returns the html menu
     */
    public function page_links($path = '?')
    {
        $prev = $this->_page - 1;
        $next = $this->_page + 1;
        $lastpage = ceil($this->_totalRows / $this->_perPage);


        $pagination = "";
        if ($lastpage > 1) {
            $pagination .= "<ul class='pagination " . $this->_customCSS . "'>";
            if ($this->_page > 1)
                $pagination .= "<li><a href='" . $path . "$this->_instance=$prev" . "'>Précédent</a></li>";
            else
                $pagination .= "<span class='disabled'>Précédent</span>";


            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $this->_page)
                    $pagination .= "<li><span class='current'>$counter</span></li>";
                else
                    $pagination .= "<li><a href='" . $path . "$this->_instance=$counter" . "'>$counter</a></li>";
            }


            if ($this->_page < $counter - 1)
                $pagination .= "<li><a href='" . $path . "$this->_instance=$next" . "'>Suivant</a></li>";
            else
                $pagination .= "<li><span class='disabled'>Next</span></li>";
            $pagination .= "</ul>\n";
        }


        return $pagination;
    }
}
