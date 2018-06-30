<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test")
or die('Ошибка Соединения с MySQL сервером');

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$surname = mysqli_real_escape_string($link, $_REQUEST['Surname']);
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$secondname = mysqli_real_escape_string($link, $_REQUEST['SecondName']);
$birthdate = mysqli_real_escape_string($link, $_REQUEST['BirthDate']);
$sex = mysqli_real_escape_string($link, $_REQUEST['Sex']);
//$creationdate = mysqli_real_escape_string($link, $_REQUEST['CreationDate']);
//$updatedate = mysqli_real_escape_string($link, $_REQUEST['UpdateDate']);
$clientphones = mysqli_real_escape_string($link, $_REQUEST['ClientPhones']);


// attempt insert query execution
$sql = "INSERT INTO clients (Surname, Name, SecondName, BirthDate, Sex, ClientPhones) VALUES (
            '$surname', '$name', '$secondname', '$birthdate', '$sex', '$clientphones')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>