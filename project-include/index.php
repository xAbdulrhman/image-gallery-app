<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link type="text/css" rel="stylesheet" href="./style.css">
  <title>My ToDo List App</title>
</head>
  <body>
    </?php 
    // enable mysql error reporting for debugging only
    // $driver = new mysqli_driver();
    // $driver->report_mode = MYSQLI_REPORT_ALL;
    // require_once('./db_connection.php');
    // require('./insert_todo.php');
    // require('./get_todos.php');
    // require('./update_todo.php');
    // require('./delete_todo.php');
    
    // // if the form is submitted by this page
    // if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //     // check which button submitted the POST request? add, delete, or mark as done
    //     if(isset($_POST['add_btn'])) {
    //         // insert a new todo item
    //         insert_task($_POST["new_task"]);
    //     }
    //     else if (isset($_POST['mark_done_btn'])) {
    //         // When a checkbox is selected, update the db to mark it as done
    //         if(!empty($_POST['checkBoxList'])) {
    //             mark_as_done($_POST['checkBoxList']);
    //         }
    //     }
    //     else if (isset($_POST['delete_btn'])) {
    //         // When a checkbox is selected, delete it in the db
    //         if(!empty($_POST['checkBoxList'])) {
    //             delete_item($_POST['checkBoxList']);
    //         }
    //     }

    // }
?>

    <div id="content">
        <h1>My ToDo List App</h1>
        <form method="post" id="addForm" action="<//?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <input type="text" name="new_task" id="new-item" placeholder="A new item..." />
           <button name="add_btn" id="add-btn">Add</button>
           <div class="buttons">
              <button type="submit" class="btn" name="delete_btn">Delete</button>
              <button type="submit" class="btn" name="mark_done_btn">Mark as done</button>
           </div>
           <//?php get_all_todos();?>
        </form>
    </div>
  </body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="cookie.js"></script>
</head>

<body class="a0">

    <?php
    // enable mysql error reporting for debugging only
    // $driver = new mysqli_driver();
    // $driver->report_mode = MYSQLI_REPORT_ALL;
    require_once('./db_connection.php');
    require('./insert_pics.php');
    require('./get_pics.php');

    // if the form is submitted by this page
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //      check if button submitted the POST request
        if (isset($_POST['submit'])) {
            //  Start excute the php file
            startDoing();
        }
    }
    ?>

    <ul>
        <li><a href="Home-page.php">to Home page</a> </li>
        <li><a href="Search-page.php">to Search page</a> </li>

        <input type="radio" id="c1" name="select_BackImage" value="a0" onchange="setBackImage(this)">
        <label class="e" for="c1">background image 1</label><br>
        <input type="radio" id="c2" name="select_BackImage" value="a1" onchange="setBackImage(this)">
        <label class="e" for="c2">background image 2</label><br>
    </ul>

    <h1>Upload Page</h1>

    <form id="up" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <input type="text" required class="txt" placeholder="What is the Image name?" name="imgName"> <br>
        <input type="number" required class="txt" placeholder="How many likes it deserves?" name="imgLikes"><br>

        <input class="txt" required id="file" type="file" accept="image/png, image/jpeg, image/jpg" name="imgFile"><br>
        <button type="submit" name="submit">UPLOAD</button>
        <br><br>
        <hr>

        <table>
            <tr>
                <th colspan="3">Sort by</th>
            </tr>

            <tr>
                <th rowspan="2">Likes</th>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="L" id="Alike" onchange="f1()">
                    <label for="Alike">Ascending</label>
                </td>
                <td>
                    <input type="radio" name="L" id="Dlike" onchange="f2()">
                    <label for="Dlike">Descending</label>
                </td>
            </tr>
            <tr>
                <th rowspan="2">Name</th>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="L" id="Aname" onchange="f3()">
                    <label for="Aname">Ascending</label>
                </td>
                <td>
                    <input type="radio" name="L" id="Dname" onchange="f4()">
                    <label for="Dname">Descending</label>
                </td>
            </tr>
        </table>
        <br>
        <div id="FilterResult"></div>

        <!-- filtered imgs here   -->

    </form>

    <script src="script.js"></script>

</body>

</html>