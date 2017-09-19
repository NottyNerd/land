<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

login();
}

function login()
{
    $username="trey";
    $password="trey";

    if (! empty($_POST['username'])){
        $name = $_POST['username'];
    }

    if (! empty($_POST['password'])){
        $pass = $_POST['password'];
    }


    if($name == $username && $pass == $password ){

      echo file_get_contents("http://www.facebook.com");
    }
    else
        {
        echo "Invalid username or password";
    }
}

?>