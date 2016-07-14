<?php

class Search_Controller extends Controller {
    public function __construct() {
        parent::__construct();

        $this->Load_View(SEARCH . DS . SEARCH);
        $this->Load_Model(SEARCH);
    }

    public function display($results) {
        $this->addHeader();
        $this->addLeftNav();
        $this->addContent($results);
    }

    public function addContent($results) {
        $search = EMPTY_STRING;
        $search_view = new View();

        $search_view->Assign(RESULTS, unserialize($results));
        $search .= $search_view->Render(SEARCH . DS . INFO, FALSE);
        $this->Assign(SEARCH, $search);
    }

    public function option($value) {
        //$query = $this->getSearchResult($value);

        // to display proper values would need to retrieve from the database
        // here we mimic users choosing "Artists" and returned the 3 matching results
        $query = array('Queens', 'Eagles', 'Journey');
        header(LOCATION . DS. SEARCH_PAGE.DS.serialize($query));
    }

    public function getSearchResult($value) {
        return $this->model->getSearchResult($value);
    }
}