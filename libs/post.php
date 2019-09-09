<?php

function ShowPost($extra= ''){
    $con = mysqli_connect("localhost","root","","reloadblog");

    $query = "SELECT * FROM `post` $extra";
    $q = mysqli_query($con,$query);

    $posts = [];

    while($post = mysqli_fetch_assoc($q)){
        $posts[] = $post;
    }




    return $posts;

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