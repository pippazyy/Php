<?php

class Album_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    public function getAllAlbumsInfo() {
        // retrive values from the proper table
        // $query = SELECT ALBUM_NAME, ARTIST_NAME, SONG_TITLE FROM AllAlbum
        // return $conn->query($query);

    }
}