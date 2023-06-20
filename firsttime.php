<?php

//Setting up connection
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}else{
    echo "Conection was esatablished succesfully. <br>";
}

//Creating database bank
$sql= "CREATE OR REPLACE DATABASE AyushBank";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE OR REPLACE TABLE `AyushBank`.`customers` ( `Cust_ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`Cust_ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `AyushBank`.`customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES ('1', 'Ayush', 'ayush@gmail.com', '9000.00'), ('2', 'Aryan', 'aryan@gmail.com', '5000.00'), ('3', 'Sandeep', 'sandeep@gmail.com', '3000.00'), ('4', 'sanjeev', 'sanjeev@gmail.com', '11000.00'), ('5', 'Aniket', 'aniket@gmail.com', '2000.00'), ('6', 'Anupam', 'anupam@gmail.com', '5500.00'), ('7', 'Shriyansh', 'shriyansh@gmail.com', '17000.00'), ('8', 'Kartik', 'kartik@gmail.com', '27000.00'), ('9', 'Avinash', 'avinash@gmail.com', '19000.00'), ('10', 'Varun', 'varun@gmail.com', '55000.00')";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to add entries to table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE OR REPLACE TABLE `AyushBank`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
   echo "Sorry we failed to create table.<br>";
}else{
   echo "Transaction Table Created Successfully.<br>";
}

?>