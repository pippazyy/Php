<?php

class Album_Controller extends Controller {
    public function __construct() {
        parent::__construct();

        $this->Load_View(ALBUM . DS . ALBUM);
        $this->Load_Model(ALBUM);
    }

    public function display() {
        $this->addHeader();
        $this->addLeftNav();
        $this->addContent();
    }

    public function addContent() {
        $album = EMPTY_STRING;
        $album_view = new View();

        $album_view->Assign(ALL_ALBUMS_INFO, $this->getAllAlbumsInfo());

        $album .= $album_view->Render(ALBUM . DS . INFO, FALSE);
        $this->Assign(ALBUM, $album);
    }

    public function getAllAlbumsInfo() {
        // retrive all albums info
        // returm $this->model->getAllAlbumsInfo();

        // here we mimic the data as if it had come from the database
        return array (
            array(
                ALBUM_NAME =>'Hotle California',
                ARTIST_NAME => 'Eagles',
                SONG_TITLE => 'Hotle California'),
            array(
                ALBUM_NAME =>'Frontiers',
                ARTIST_NAME => 'Journey',
                SONG_TITLE => 'Faithfully'),
            array(
                ALBUM_NAME =>'News of the World',
                ARTIST_NAME => 'Queen',
                SONG_TITLE => 'We Will Rock You'),
            array(
                ALBUM_NAME =>'News of the World',
                ARTIST_NAME => 'Queen',
                SONG_TITLE => 'We Are the Champions'),
        );
    }

}