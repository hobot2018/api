<?php
require 'flight/Flight.php';

Flight::route('/api/companies/@id', function($id){
    $servername = "localhost";
    $database = "api";
    $username = "based";
    $password = "1234";
    // Создаем соединение
    $error = "0";

    $res = 12;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `info` WHERE `id`=".$id;
    $q = mysqli_query($conn, $sql);
    $id = 1;
    while ($row = mysqli_fetch_assoc($q)) {
                                            
                                                
        $out[$id][] = $row;
        $id = $id +1;
                                                
                                                
    }   
    echo json_encode($out);
});

Flight::route('/api/companies/', function(){
    $servername = "localhost";
    $database = "api";
    $username = "based";
    $password = "1234";
    // Создаем соединение
    $error = "0";

    $res = 12;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `info`";
    $q = mysqli_query($conn, $sql);
    $id = 1;
    while ($row = mysqli_fetch_assoc($q)) {
                                            
                                                
        $out[$id][] = $row;
        $id = $id +1;
                                                
                                                
    }   
    echo json_encode($out);
});

Flight::route('/api/categories/@id', function($id){
    $servername = "localhost";
    $database = "api";
    $username = "based";
    $password = "1234";
    // Создаем соединение
    $error = "0";

    $res = 12;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `categories` WHERE `id`=".$id;
    $q = mysqli_query($conn, $sql);
    $id = 1;
    while ($row = mysqli_fetch_assoc($q)) {
                                            
                                                
        $out[$id][] = $row;
        $id = $id +1;
                                                
                                                
    }   
    echo json_encode($out);
});

Flight::route('/api/categories/', function(){
    $servername = "localhost";
    $database = "api";
    $username = "based";
    $password = "1234";
    // Создаем соединение
    $error = "0";

    $res = 12;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `categories`";
    $q = mysqli_query($conn, $sql);
    $id = 1;
    while ($row = mysqli_fetch_assoc($q)) {
                                            
                                                
        $out[$id][] = $row;
        $id = $id +1;
                                                
                                                
    }   
    echo json_encode($out);
});
Flight::route('/api/dishes/@id', function($id){
    $servername = "localhost";
    $database = "api";
    $username = "based";
    $password = "1234";
    // Создаем соединение
    $error = "0";

    $res = 12;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `eat` WHERE `id`=".$id;
    $q = mysqli_query($conn, $sql);
    $id = 1;
    while ($row = mysqli_fetch_assoc($q)) {
                                            
                                                
        $out[$id][] = $row;
        $id = $id +1;
                                                
                                                
    }   
    echo json_encode($out);
});

Flight::route('/api/dishes/cat/@cat', function($cat){
    $servername = "localhost";
    $database = "api";
    $username = "based";
    $password = "1234";
    // Создаем соединение
    $error = "0";

    $res = 12;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `eat` WHERE `cat`=".$cat;
    $q = mysqli_query($conn, $sql);
    $id = 1;
    while ($row = mysqli_fetch_assoc($q)) {
                                            
                                                
        $out[$id][] = $row;
        $id = $id +1;
                                                
                                                
    }   
    echo json_encode($out);
});
Flight::route('/api/order/@id', function($id){
    $servername = "localhost";
    $database = "api";
    $username = "based";
    $password = "1234";
    // Создаем соединение
    $error = "0";

    $res = 12;
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `orders` WHERE `id`=".$id;
    $q = mysqli_query($conn, $sql);
    $id = 1;
    while ($row = mysqli_fetch_assoc($q)) {
                                            
                                                
        $out[$id][] = $row;
        $id = $id +1;
                                                
                                                
    }   
    echo json_encode($out);
});

Flight::start();
