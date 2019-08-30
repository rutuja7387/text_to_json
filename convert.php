<?php

        header('Content-type: application/json');

        $blog_file = "blog_file.txt";

        $converted_arr   = file($blog_file,FILE_IGNORE_NEW_LINES);

        foreach($converted_arr as $key=>$value)
        {
            $converted_arr[$key]  = rtrim($value, "\r");
        }

        $json_contents = json_encode($converted_arr);

        echo $json_contents;
?>
