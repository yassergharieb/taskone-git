<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cookies</title>
</head>
<body>
    <?php 
session_start();

if (isset($_COOKIE['title']) ) {
echo "<h1> name : " .$_COOKIE['title']."  </h1>";
echo "<h2> content :".$_COOKIE['CONTENT']." </h2>";
// echo "<div> image :".$_COOKIE['image']."</div>";


}

// $file = fopen('content_info.txt','a') or die ("can't open the file") ; 


// fwrite($file, $_COOKIE['title']) ;


// fwrite($file , $_COOKIE['content']);

// // fclose($file);




    ?> 
</body>
</html>