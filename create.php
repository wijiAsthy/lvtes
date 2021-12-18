<?php
include('database.php');
if(isset($_POST['create'])){

    $msg=insert_data($connection);

}
// insert query
function insert_data($connection){

    $komentar= legal_input($_POST['komentar']);
    $name= legal_input($_POST['name']);

    $query="INSERT INTO komen (komentar, name ) VALUES ('$komentar','$name')";
    $exec= mysqli_query($connection,$query);
    if($exec){
        $msg="Nachrichten wurden erfolgreich erstellt";
        return $msg;

    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}
// convert illegal input to legal input
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
?>