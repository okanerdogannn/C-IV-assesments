<?php

// ---------- DEFINITIONS ---------
// flag to turn on or off same file uploads
$prevent_overwrite = true;

// Path for the storage place
$my_dir = 'images';
$max_filesize = '1000000';
$file_extantions = array('PNG', 'GIF', 'JPG', 'JPEG');
// implode() make list from all element of an array 
$file_extantions_list = implode(', ', $file_extantions);

// error can be output with $error_code
$server_error_msgs = array(
    "file has been uploaded",
    "file is too large for this server",
    "file is too large for this form",
    "there was a err partially uploaded",
    "file was not uploaded",
    "undefined error",
    "missing temporary file",
    "can not write file to disk",
    "a PHP extantion stopped the file upload"
);
//------------------------------------------

// ------ PROCESS ----------
if(isset($_POST['submit'])){
    
    $filesize = $_FILES['userfile']['size'];

    // basename() checks is the name a real file name or not
    $filename = basename($_FILES['userfile']['name']);  
    $tmp_name = $_FILES['userfile']['tmp_name'];
    
    // DIRECTORY_SEPARATOR is constant and it means slash or back slash
    $my_url = $my_dir.DIRECTORY_SEPARATOR.$filename;
    
    // setting initial error msg value
    $error_msg = NULL;

    //---------- ERROR CHECKING -----------
    // setting error msg if size is too much
    if($filesize > $max_filesize){
        $error_msg = "File size must be ".round($max_filesize/1024)."KB or less. <br>";
    }
    // getting the file extantion
    // explode seperate the file extantion from its name
    $f_extantion = explode('.',$filename);
    $f_extantion = end($f_extantion);
    $f_extantion = strtoupper(trim($f_extantion));
    
    // setting error msg if file format not match
    if(!in_array($f_extantion, $file_extantions)){
        $error_msg .= 'this file format not allowed!';
    }
    // setting up msg if file not exist
    if(!file_exists($tmp_name)){
        $error_msg .= 'file does not exist ';
    }
    // turn on or off dublicate file checking
    if($prevent_overwrite == true){
        // setting up error msg if file exist on the server
        if(file_exists($my_url)){
            $error_msg .= "file already has been uploaded ";
        }
    }
    // checking error appear?
    if(!isset($error_msg)){
        // ----UPLOADING FILE---
        // 1st property for from where, 2nd where moving to
        //tmp_name the path of the file 
        if(move_uploaded_file($tmp_name, $my_url)){
            $message = "upload successful!<br>";
            echo "upload successful!<br>";
            echo 'Preview the image: <a href="'.$my_url.'" target="_blank">'. $my_url. '</a>';
        }
        //---------------
        else{
            trigger_error($server_error_msgs[$msg_no = $_FILES['userfile']['error']]);
        }
    }
    else{
        $message = $error_msg;
        echo $error_msg;
    }
    //------------------------------------
}




/*
$_FILES['userfile']['type']
$_FILES['userfile']['tmp_name']
$_FILES['userfile']['error']
$_FILES['userfile']['size']
*/

//-------- HTML ------------

// making all html file a huge string
$form = <<<EOF

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
   <h1>IMAGE UPLOADER</h1>
   <br>
   
    Select image to upload($file_extantions_list ):
    <h2>
      
        
    </h2>
    <input type="hidden" name="MAX_FILE_SIZE" value="6000000">
    <input type="file" name="userfile"><br>
    <input type="submit" value="Upload Image" name="submit">

</form>
<br>
<a href="view_images.php">Contents of '$my_dir' folder</a>

</body>
</html>
EOF;
//-----------------
echo $form;

?>
