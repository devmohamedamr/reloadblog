<?php

function ShowPost(){

}


function AddNewPost($title,$artical,$img,$user_id){

    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "INSERT INTO `post` ( `title`, `artical`, `img`,`user_id`) VALUES ('$title','$artical','$img','$user_id')";
    echo $query;
    $q = mysqli_query($con,$query);

    $affected = mysqli_affected_rows($con);

    if($affected>0){
        return true;
    }
}



function UpdatePost(){

}


function DeletePost(){

}