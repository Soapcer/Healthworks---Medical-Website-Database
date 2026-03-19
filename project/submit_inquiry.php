<?php
session_start();

require_once 'config.php';


    
if(isset($_POST['iqSubmit'])){
    $iqEmail = $_POST ['iqEmail'];
    $inquiry = $_POST ['inquiry'];

    if (empty($inquiry && $iqEmail)) {

        $_SESSION['inquiry_error'] = 'Please fill in the fields!';
        unset($_SESSION['inquiry_submitted']);
    }else{
        $conn->query("INSERT INTO inquiries (iqEmail, inquiry) VALUES ('$iqEmail', '$inquiry')");
        $_SESSION['inquiry_submitted'] = 'Inquiry sucessfully submitted!';
        unset($_SESSION['inquiry_error']);
    }

    header("Location: homepage.php#inquiry_link");
    exit();
}

?>