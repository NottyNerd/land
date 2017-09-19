<?php

/**
 * Created by PhpStorm.
 * User: NottyNerd
 * Date: 30/08/2017
 * Time: 12:50
 */




$error = "Hey";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insert();

}

function insert() {
    $defaultpassword="pass";
    $defaultusername="beloved";

    if (! empty($_POST['b'])){
        $name = $_POST['b'];
    }

    if (! empty($_POST['p'])){
        $pass = $_POST['p'];
    }

    print_r('###' . $defaultusername==name . '###');

    if($name == $defaultusername && $pass == $defaultpassword)
    {
        // Print the body of the result by indexing into the result object.
    //    echo $GLOBALS['error'];

        echo file_get_contents("http://34.207.118.121/index.html");

    }
    else
    {

       echo '<div class="alert alert-info alert-dismissable"><strong>Error!</strong> <br> Please ensure that the user name and password are correct.</div>';

    }
}
?>