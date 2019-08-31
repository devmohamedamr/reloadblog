<?php

// user functions


function ShowUser(){

}

function AddNewUser($fullname,$password,$email,$imgname){

    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "INSERT INTO `user` ( `name`, `password`, `email`, `img`) VALUES ('$fullname','$password','$email','$imgname')";
    $q = mysqli_query($con,$query);

    $affected = mysqli_affected_rows($con);

    if($affected>0){
        return true;
    }

}


function UpdateUserInfo(){

}



function DeleteUser(){

}

function auth(){

}
