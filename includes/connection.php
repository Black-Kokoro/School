<?php
// open connection 
    $link = mysqli_connect("sql2.freemysqlhosting.net","sql2262244","cL8!lG5!","sql2262244",3306);
    if(!$link){
        die("cannot connect to server");
    }