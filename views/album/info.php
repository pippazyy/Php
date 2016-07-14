<h2>Individual album view with songs</h2>

<table class="data-grid" id="allAlbums">
    <thead>
    <tr>
        <th style="width:50%">Ablum Name</th>
        <th style="width:25%">Artist Name</th>
        <th style="width:25%">Song</th>
    </tr>
    </thead>
    <tbody>

    <tbody>
    <?php foreach ($data[ALL_ALBUMS_INFO] as $key => $albumInfo) { ?>
        <tr>
            <td style="text-align: center"><?php echo $albumInfo[ALBUM_NAME]; ?></td>
            <td style="text-align: center"><?php echo $albumInfo[ARTIST_NAME]; ?></td>
            <td style="text-align: center"><?php echo $albumInfo[SONG_TITLE]; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>