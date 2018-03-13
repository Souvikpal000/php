<!DOCTYPE html>
<?php 
if (isset($_POST['color'])) {$color = $_POST['color'];} 
else {$color = 'white';} 

?> 

<html>
<head>
   <title></title>
   </head>
   <body bgcolor="<?php echo $color; ?>">
   <form method='POST'>
   <h2>Please input your name:</h2>
	color: <input type="text" name="color"> 

 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
$name = $_POST['name'];
echo "<h3> Hello ".$name. "</h3>";
?>
</body>
</html>
