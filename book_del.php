<?php
	if (isset($_POST['submit'])){
	$mysqli = new mysqli('localhost','root','','rubel');
	$book_id=$_POST['num'];
	
	$sql = "DELETE FROM book WHERE id =$book_id";
	
	mysqli_query($mysqli,$sql);
	
	print "Data deleted";

	}

?>

<form action="" method="post">
book ID <input type="number" name="num"/>
<input type="submit" name="submit" value="submit"/>

</form>