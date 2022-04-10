

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