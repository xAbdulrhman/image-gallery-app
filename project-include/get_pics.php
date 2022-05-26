<?php
function get_all_pics()
{
    $sql_query = "SELECT id, img_name, date_added, likes FROM gallery;";
    $statement = $GLOBALS['conn']->prepare($sql_query);

    if ($statement && $statement->execute() && $statement->rowCount() > 0) {
        // while ($row = $statement->fetch()) {
        //     echo '<img src="uploads/' . $row["img_name"] . '" height="300" width="300"';
        // }
        for ($row = 0; $row < $statement->rowCount(); $row++) {
            // no matter what 'src' I put here it won't work
            // to be continue.. 
            echo '<img src="uploads/' . $row["img_name"] . '" height="300" width="300"';
            echo '<h6>.</h6> ';
        }
    } else {
        echo '<h5 style="color: white">you have not uploaded any images to the database, yet :x </h5>';
    }
}
