<?php

        include "DB_functions.php";

        $user_id = $_POST['userid'];
        $postid = $_POST['postid'];
        $type = $_POST['type'];
        $message = "wrong answer";
        //echo "<script type='text/javascript'>alert('$postid');</script>";
        // Check entry within table
        $return_arr = like_dislike($postid, $user_id, $type);
        // initalizing array
        //$return_arr = array("likes"=>$totalLikes,"unlikes"=>$totalUnlikes);
        //echo $return_arr;
        //echo "ok";
        //echo var_dump($return_arr);
        echo json_encode($return_arr);
        flush();