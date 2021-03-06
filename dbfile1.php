<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Query Generation</title>
</head>
<body>
<?php
//DEBUG HEADER
print('<p>ERRORS (if any):</p>');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
print('<hr>');
//-----------------------
/**
 * Created by PhpStorm.
 * User: 1406519
 * Date: 10/10/2016
 * Time: 14:02
 */
print('<strong>Server Conn. Stat.</strong>');
include("dbconnect.php"); // INCLUDE THE CONNECTION FILE
?>
<hr>
<div>
    <?php
    // GENERATE SQL QUERIES
    print('<p><strong>Query 1</strong></p>');
    // Create the SQL query
    $sql_query = "SELECT * FROM marvelmovies";
    // Run the sql on the DB
    $res = mysqli_query($db_conn, $sql_query);
    while($row = $res->fetch_array()){
        $movie_title = $row['title'];
        echo '<p>'.$movie_title.'</p>';
    }
    print('<hr>');
    // Query 2
    print('<p><strong>Query 2</strong></p>');
    $sql_query = "SELECT * FROM marvelmovies WHERE productionStudio = 'Marvel Studios'";
    // Run the sql on the DB
    $res = mysqli_query($db_conn, $sql_query);
    while($row = $res->fetch_array()){
        $movie_title = $row['title'];
        echo '<p>'.$movie_title.'</p>';
    }
    print('<hr>');
    // Query 3
    print('<p><strong>Query 3</strong></p>');
    $sql_query = "SELECT * FROM marvelmovies WHERE yearReleased >= 2010";
    // Run the sql on the DB
    $res = mysqli_query($db_conn, $sql_query);
    while($row = $res->fetch_array()){
        $movie_title = $row['title'];
        echo '<p>'.$movie_title.'</p>';
    }
    print('<hr>');
    // Query 4
    print('<p><strong>Query 4</strong></p>');
    $sql_query = "SELECT * FROM marvelmovies WHERE title LIKE 'X-Men%'";
    // Run the sql on the DB
    $res = mysqli_query($db_conn, $sql_query);
    while($row = $res->fetch_array()){
        $movie_title = $row['title'];
        echo '<p>'.$movie_title.'</p>';
    }
    ?>
</div>
</body>
</html>