<?php

// user functions

function ShowUserName($user_id){
    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "SELECT * FROM `user` WHERE `id` = $user_id";
    $q = mysqli_query($con,$query);

    $users = [];

    while($user = mysqli_fetch_assoc($q)){
        $users[] = $user;
    }


    return $users[0]['name'];

}

function ShowUser($extra = ''){

    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "SELECT * FROM `user` $extra";
    $q = mysqli_query($con,$query);

    $users = [];

    while($user = mysqli_fetch_assoc($q)){
        $users[] = $user;
    }


    return $users;


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


function UpdateUserInfo($id,$fullname,$password,$email,$imgname){
    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "UPDATE `user` SET `name`= '$fullname' , `password` = '$password' , `email` = '$email' , `img` = '$imgname' WHERE  `id` = $id";
    $q = mysqli_query($con,$query);

    $affected = mysqli_affected_rows($con);

    if($affected>0){
        return true;
    }

}

function DeleteUser($user_id){

    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "DELETE FROM `user` WHERE id = $user_id";
    $q = mysqli_query($con,$query);

    $affected = mysqli_affected_rows($con);

    if($affected>0){

        return true;
    }

}

function auth($email,$password){

    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

    $q = mysqli_query($con,$query);

    $userdata = mysqli_fetch_assoc($q);

    return $userdata;

}
