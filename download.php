<?php 

    $filename = "";

    if(isset($_GET['file']))
    {
        $filename =$_GET['file'];
    }

    if(file_exists($filename))
    {

        $mime_type = mime_content_type($filename);

        header("content-type:" .$mime_type);
        header("Content-Disposition: attachment; filename=$filename");
        
        readfile($filename);

    }else{
        echo "file not found";
    }
