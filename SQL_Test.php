<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test")
    or die('Ошибка соединения с MySQL сервером');
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt create table query execution
$sql = "CREATE TABLE Clients(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Surname VARCHAR(30) NOT NULL,
    Name VARCHAR(30) NOT NULL,
    SecondName VARCHAR(30) NOT NULL,
    BirthDate VARCHAR(30) NOT NULL,
    Sex varchar(30) not null,
    date TIMESTAMP DEFAULT current_timestamp,
    UpdateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    ClientPhones varchar(30) not null UNIQUE

)";
if (mysqli_query($link, $sql)) {
    echo "Table created successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
?>