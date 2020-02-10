<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = 'data_base';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

function get($conn, $sql)
{
    $result = mysqli_query($conn, $sql);
    return $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$sql = "SELECT `id`, `user_name`, `email`, `password` FROM `user` WHERE 1";

$data = get($conn, $sql);
var_dump($data);

function table($data)
{
    print '<table class="m-auto text-center bg-light">';
    foreach (array_keys($data[0]) as $value){
        print '<th class="border border-dark p-3">' . $value . '</th>';
    }
    foreach ($data as $users){
        print '<tr class="border border-dark p-3">';
        foreach ($users as $user){
            print '<td class="border border-dark p-3">' . $user . '</td>';
        }
        print '</tr>';
    }
}