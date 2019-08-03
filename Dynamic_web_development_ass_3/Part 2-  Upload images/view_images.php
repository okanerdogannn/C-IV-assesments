<?php

// scandir() scan and write all the file in the directory
$dir = 'images';
// scandir() list files and dirextorie in a path
$filelist = scandir($dir);
//print_r($filelist);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contents of '<?php echo $dir ?>' folder</h1>
    <p>
    <?php
    // checking dir is exist or not
    if(is_dir($dir)){
        // opening directory into a new var
        if($dh = opendir($dir)){
            // readdir() read and returns the entry name or false on failure
            while(($file = readdir($dh)) !== false){
                if($file != "." && $file != ".."){
                    echo "<img src= '".$dir. DIRECTORY_SEPARATOR . $file . "' style= ' max-width:280px; margin:30px' />";
                }
            }           
            closedir($dh);
        }
    }
    ?>
        LIST OF FILES HERE
    </p>
    <p><a href="upload.php">image uploader</a></p>

</body>
</html>