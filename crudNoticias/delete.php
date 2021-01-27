<?php

include "conn.php";

$consultadelete = $_POST['consultadelete'];

mysqli_query($link, "DELETE FROM noticias WHERE id = '$consultadelete'");
header('location:index.php');