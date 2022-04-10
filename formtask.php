
<?php


session_start();

function clean($input) {
$input = stripslashes(strip_tags(trim($input)));
return  $input;
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {

// Array ( [image] => Array ( [name] => 272805827_117368574168395_7345770231169866208_n.jpg [full_path] => 272805827_117368574168395_7345770231169866208_n.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpE3F4.tmp [error] => 0 [size] => 89786 ) ) * title : title length must be over 20 char


$title = clean($_POST['title']);

$content = clean($_POST['content']); 

if(!empty($_FILES['image'] ['name'])) {

// print_r($_FILES);

$name = $_FILES['image'] ['name'];
$type = $_FILES['image'] ['type'];
$tmp_path = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];


$allowed_extension = ['jpg', 'jpeg', 'png '];
$type_info = explode('/' , $type);
$extension = strtolower(end($type_info));

$img_final_name = time().rand().'.' . $extension;


if (in_array($extension, $allowed_extension)) {

  $dis_path = 'uploads/'.$img_final_name;

  


  if (move_uploaded_file($tmp_path, $dis_path)) {

   echo "image uploaded"; 

  } else { echo "try again";}

}




}
else {echo "image required";}


$errors = [];

if(empty($title))
 {
   $errors['title'] = "required";
 } 

elseif ( !is_string($title)  ) {


  
  
    $errors['title'] = "title length must be over 20 char";
 
}




if(empty($content))
 {
   $errors['content'] = "required";
 } 

elseif ( strlen($content) <  50 ) {
    $errors['content'] = "content length must be over 50 char";

}


if (count($errors) > 0) {

    foreach ($errors as $key => $value) {
        echo '* ' . $key . ' : ' . $value . '<br>'; } 
        
    

} else { 
  
  setcookie('title' ,$title, time() + 8400, "/");


  setcookie('content' ,$content, time() + 8400, "/");


  setcookie('image' ,$img_final_name, time() + 8400, "/");


}






}

?> /*


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "POST" enctype="multipart/form-data" >

<label for="title"> title </label>
<input type="text" id="title" name="title" >


<label for="content"> content </label>
<input type="text" id="content"  name= "content">
<br>

<label for="image"> upload your Image </label>
<input type="file" id="image"  name= "image" >



<br>

<button type="submit"> submit </button>

</form>
    
</body>

</html>
