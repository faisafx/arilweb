<?php

include("pemanggilan_database.php");


if(isset($_POST['Kirim'])){

    
    $EMAIL = $_POST['EMAILMANTAP'];
    $PESAN = $_POST['PESANMANTAP'];

    
    $sql = "INSERT INTO form_pesan (email, pesan) VALUE ('$EMAIL', '$PESAN')";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
        
        header('Location: contact.html?status=sukses');
    } else {
        
        header('Location: contact.html?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>