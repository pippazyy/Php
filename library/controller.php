<?php

class Controller {

    protected $view;
    protected $model;
    protected $view_name;
    protected $helper;

    public function __construct() {
        $this->view_name = EMPTY_STRING;
        $this->view = new View();
        $this->Load_Model(MODEL);
    }

    public function Assign($variable, $value) {
        $this->view->Assign($variable, $value);
    }

    public function Load_Model($name) {
        $modelName = ($name == MODEL) ? $name : $name . MODEL_CLASS;
        $this->model = new $modelName();
    }

    public function Load_View($name) {
        if (file_exists(ROOT . DS . VIEWS . DS . strtolower($name) . PHP_EXTENSION)) {
            $this->view_name = $name;
        }
    }

    public function addHeader() {
        $header = EMPTY_STRING;
        $header_view = new View();

        $header .= $header_view->Render(HEADER, FALSE);
        $this->Assign(HEADER, $header);
    }

    public function addLeftNav() {
        $leftNav = EMPTY_STRING;
        $leftNav_view = new View();

        $leftNav .= $leftNav_view->Render(LEFT_NAV, FALSE);

        $this->Assign(LEFT_NAV, $leftNav);
    }

    public function addHelpMessage($directory) {
        $helpMessage = EMPTY_STRING;
        $helpMessage_view = new View();

        $helpMessage .= $helpMessage_view->Render($directory . DS . HELP_MESSAGE, FALSE);
        $this->Assign(HELP_MESSAGE, $helpMessage);
    }

    public function addTitle() {
        $title = EMPTY_STRING;
        $title_view = new View();

        $title_view->Assign(MODEL, $this->getModel());
        $title .= $title_view->Render(TITLE, FALSE);

        $this->Assign(TITLE, $title);
    }

    public function commit() {
        $this->model->commit();
    }

    public function __destruct() {
        if (!empty($this->view_name)) {
            $this->view->Render($this->view_name);
        }
    }

}

