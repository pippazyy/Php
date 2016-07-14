<?php

class Welcome_Controller extends Controller {
    public function __construct() {
        parent::__construct();

        $this->Load_View(WELCOME . DS . WELCOME);
        $this->Load_Model(WELCOME);
    }

    public function display() {
        $this->addHeader();
        $this->addLeftNav();
        $this->addContent();

        if (isset($_POST[SAVE_BUTTON])) {
            $this->save();
        } else if (isset($_POST[LOGIN_BUTTON])) {
            $this->login();
        }
    }

    public function addContent() {
        $welcome = EMPTY_STRING;
        $welcome_view = new View();

        $welcome .= $welcome_view->Render(WELCOME . DS . LOGIN, FALSE);
        $this->Assign(WELCOME, $welcome);
    }

    public function save() {
       $this->saveSignupInfo();
    }

    public function saveSignupInfo() {
        $this->saveUserFirstName();
        //$this->saveUserLastName();
        //$this->saveUserEmail();
        //$this->savePassword();
    }

    public function saveUserFirstName() {
        $this->model->saveUserFirstName($_POST[FIRST_NAME]);
    }

    public function login() {
        $email = $this->getUserEmail();

        // compare user inputs (better to sanitize first) to the entries saved in the database
        // if confirmed, login users in, then optionally redirect them to the view function page
        // otherwise, pop up some message to help users login
    }

    public function getUserEmail() {
        return $this->model->getUserEmail();
    }

}