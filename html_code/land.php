<!DOCTYPE html>
<html>
    <head>
        <?php // sqltest.php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
  ?>
        <link rel="stylesheet" type="text/css" href="../css/website.css">
        <style>
        figcaption {
        background-color: black;
        color: white;
        font-style: italic;
        padding: 2px;
        text-align: center;
        width: 180px;
        margin-right: 2px;
        }
        figure {
        display: inline-block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 10px;
        margin-inline-end: 10px;
        }
    </style>
    </head>
    <body style="
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;">
        <header>
        <div class="hero-image">
            <img class="hero" src="../pics/windsor_banner.png">
        </div>
        </header>
    <div class="contentHead">
        <center><p><b>Parks/Land/Boundaries</b></p></center>
    </div>
    <div class="content">
        

    <?php
    $sql = "SELECT page_name, link FROM deslippc_groupProject.page_details WHERE `tag1` = 'land' OR `tag2` = 'land' OR `tag3` = 'land'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["page_name"]. " - link: " . $row["link"]."<br><br>";
    }
    } else {
        echo "0 results";
    }
    
    ?>
    
    </div>
    
    </body>
    </html>