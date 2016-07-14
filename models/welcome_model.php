<?php

class Welcome_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function saveUserFirstName($userName) {
        // depends on the database schema, insert new row to one or multiple tables
    }

    public function getUserEmail() {
        // using select query to retrive value
    }
}