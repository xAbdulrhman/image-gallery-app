<?php

function startDoing()
{

    // attach the image name
    $notValidGivenName = $_POST['imgName'];

    // validate the submitted/posted image name
    $givenName = validate_input($notValidGivenName);

    if (empty($givenName)) {
        return;
    }
    $givenLikes = $_POST['imgLikes'];
    $givenImg = $_FILES['imgFile'];

    $fileName = $givenImg["name"];
    $fileType = $givenImg["type"];
    $fileTempName = $givenImg["tmp_name"];
    $fileError = $givenImg["error"];
    $fileSize = $givenImg["size"];

    if ($fileError === 0) {
        if ($fileSize > 3000000) {
            $msg = "Soory_file_is_too_large!";
            header("Location: index.php?error=$msg");
        } else {
            $uploadto = "uploads/";
            $img_extension = pathinfo($fileName, PATHINFO_EXTENSION);
            $img_ex = strtolower($img_extension);
            $new_img_name = $givenName . '.' . $img_ex;
            $img_upload_path = $uploadto.$new_img_name;
            move_uploaded_file($fileTempName, $img_upload_path);
            echo '<script>alert("image uploaded successfully, visit HOME PAGE!")</script>';
        }
    } else {
        $msg = "unknown_error_occurred!";
        header("Location: index.php?error=$msg");
    }


    // create a prepared statement to protect against SQL injections
    $sql_query = "INSERT INTO gallery (img_name, date_added, likes) VALUES(:img_name, :date_value, :likes)";
    $date = new DateTime("now", new DateTimeZone('Asia/Riyadh'));
    $date = $date->format('Y-m-d H:i:s');
    $insert_statement = $GLOBALS['conn']->prepare($sql_query);
    if ($insert_statement) {
        // Bind our variable to the prepared statement as a parameter
        $insert_statement->bindParam('img_name', $new_img_name);
        $insert_statement->bindParam('date_value', $date, PDO::PARAM_STR);
        $insert_statement->bindParam('likes', $givenLikes);
        /* execute the prepared statement, and check if it was successful
        * If it was inserted successfully, then the affected rows should be 1
        */
        if (!$insert_statement->execute() || $insert_statement->rowCount() != 1) {
            print_r('Error executing SQL insert statement: ' . $insert_statement->err);
            return;
        }
    } else {
        printf(
            "Failed to insert into the database:Erro number: %d,  %s\n",
            $insert_statement->errorCode(),
            $insert_statement->errorInfo()
        );
    }
}

// trim any extra white spaces and escape special HTML characters
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = strtolower(str_replace(' ','-' ,$data));
    return $data;
}
