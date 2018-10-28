<?php
// open connection 
//    $link = mysqli_connect("sql2.freemysqlhosting.net","sql2262244","cL8!lG5!","sql2262244",3306);
    $link = mysqli_connect("db4free.net","school123456","school987654321","school3265",3306);
    if(!$link){
        die("cannot connect to server");
    }