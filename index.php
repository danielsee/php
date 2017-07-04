<!DOCTYPE html>
<html>

<head>
<title >homepage</title>
<h1>test </h1>
</head>

<body>
<a href="directory/second.html">click to here</a>
<p>fuck</p>
<?php
echo "Hello World!";
$name="daniel see";
echo $name;
?>

<form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
<!--comment ctrl +k+c-->

     <p>Name:</p>
    <p><input type="text" name="name" value="Your name"></p>

    <p>Species:</p>
    <p><input name="species"></p>
    <!-- remember: 'type="text"' isn't actually necessary -->

    <p>Comments: </p>
    <p><textarea id="textarea" onclick="func()" name="comments" rows="5" cols="20">Your comments</textarea></p>

    <p>Are you:</p>
    <p><input type="radio" name="areyou" value="male"> Male<input type="radio" name="areyou" value="female"> shemale</p>
    <p><input type="radio" name="areyou" value="female"> Female</p>
    <p><input type="radio" name="areyou" value="hermaphrodite"> An hermaphrodite</p>
    <p><input type="radio" name="areyou" value="asexual"> Asexual</p>
    <p><input type="checkbox" value="diu"  >fuck</p>
    <p><input type="submit"></p>
   
</form>
<script>
 function func(){ 
     //function to onclick clear value
     var a;
     a=document.getElementById("textarea");
     a.value="";
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
}


</script>
</body>