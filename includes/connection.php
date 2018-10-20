<?php
// open connection 
    $link = mysqli_connect("localhost","root","","school");
    if(!$link){
        die("cannot connect to server");
    }