<fieldset>
<legend>Insert data</legend>
<form action="" method="post">
	<table align="center">
    	<tr>
        	<td>book_name:</td>
            <td><input type="text" name="book_name"/></td>
        </tr>
        <tr>
        	<td>publisher_name:</td>
            <td><input type="text" name="publisher_name"/></td>
        </tr>
        <tr>
        	<td>price:</td>
            <td><input type="text" name="price"/></td>
        </tr>
        <tr>
        	<td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Submit"/></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>
				<?php
        if (isset($_POST['submit'])){
            
            $con=new mysqli ('localhost','root','','rubel');
            $book_name=$_POST['book_name'];
            $publisher_name=$_POST['publisher_name'];
            $price=$_POST['price'];
         
           $sql ="INSERT INTO `book` VALUES 
		   ('','$book_name','$publisher_name','$price')";
            mysqli_query($con,$sql);
            print "Inserted Data Product Table";
            }
			?>
                </td>
            </tr>
    </table>
</form>
</fieldset>
