<h2>Search</h2>
<select id="selectOptions">
    <option value="album">Album Name</option>
    <option value="artists">Artists</option>
    <option value="songs">Songs</option>
</select>

<?php if ($data[RESULTS] != EMPTY_STRING) { ?>
    <?php if (count($data[RESULTS]) > 0) { ?>
    <table class="data-grid" style="margin-top: 10px;">
        <thead>
        <tr>
            <th style="width:50%">Results</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data[RESULTS] as $key => $result) { ?>
            <tr>
                <td style="text-align: center"><?php echo $result; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } else { ?>
        <p>No Results found!</p>
    <?php  } ?>
<?php } ?>


