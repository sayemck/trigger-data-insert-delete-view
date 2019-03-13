<h2 align="center">Book publisher Information Table</h2>
<?php
	$mysqli =new mysqli('localhost','root','','rubel');
	$query= 'select * from vbook';
	$result=$mysqli->query($query);
	print "<table width='70%' border='1' align='center'";
	print '<tr>';
	$fields=$result->fetch_fields();
	foreach ($fields as $field)
	printf("<th>%s</th>",$field->name);
	print '</tr>';
	foreach ($fields as $field)
	while ($row=$result->fetch_row()){
		$id=$row[0];
		$book_id=$row[1];
		$quantity=$row[2];
		$published_date=$row[3];
		
		
		
		print '<tr>';
			print '<td>'.$id.'</td>';
			print '<td>'.$book_id.'</td>';
			print '<td>'.$quantity.'</td>';
			print '<td>'.$published_date.'</td>';
		print '</tr>';
		
	}
	print "</table>";
  ?>
  
 
  
  <h2 align="center">Book date Information Table</h2>
<?php
	$mysqli =new mysqli('localhost','root','','rubel');
	$query= 'select * from vbook_info';
	$result=$mysqli->query($query);
	print "<table width='70%' border='1' align='center'";
	print '<tr>';
	$fields=$result->fetch_fields();
	foreach ($fields as $field)
	printf("<th>%s</th>",$field->name);
	print '</tr>';
	foreach ($fields as $field)
	while ($row=$result->fetch_row()){
		$id=$row[0];
		$book_id=$row[1];
		$quantity=$row[2];
		$published_date=$row[3];
		
		
		print '<tr>';
			print '<td>'.$id.'</td>';
			print '<td>'.$book_id.'</td>';
			print '<td>'.$quantity.'</td>';
			print '<td>'.$published_date.'</td>';
		print '</tr>';
		
	}
	print "</table>";
  ?>
  

<h2 align="center">Book price Information Table</h2>
<?php
	$mysqli =new mysqli('localhost','root','','rubel');
	$query= 'select * from vbook_price';
	$result=$mysqli->query($query);
	print "<table width='70%' border='1' align='center'";
	print '<tr>';
	$fields=$result->fetch_fields();
	foreach ($fields as $field)
	printf("<th>%s</th>",$field->name);
	print '</tr>';
	foreach ($fields as $field)
	while ($row=$result->fetch_row()){
		$id=$row[0];
		$book_name=$row[1];
		$publisher_name=$row[2];
		$price=$row[3];
		
		
		
		print '<tr>';
			print '<td>'.$id.'</td>';
			print '<td>'.$book_name.'</td>';
			print '<td>'.$publisher_name.'</td>';
			print '<td>'.$price.'</td>';
		print '</tr>';
		
	}
	print "</table>";
  ?>
  
  
  

  