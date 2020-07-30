<?php 

require_once("connection.php");

if(isset($_POST['username'])){

    $username = $_POST['username'];
    

    $checkUser = $db->prepare("SELECT username FROM users WHERE username=:u");
    $checkUser->execute([':u'=>$username]);

    if($checkUser->rowCount()){
        echo "This username is already taken.";
    }
    elseif ($username == "") {
        echo "";
    }
    else{
        echo "You can take this username";
    }
}
else{
    echo "hata";
}

?>