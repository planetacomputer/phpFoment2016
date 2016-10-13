<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
  
		<div class="w3-container">
    	<table class="w3-table-all w3-hoverable">
    		<caption>Invitados</caption>
		    <thead>
		      <tr class="w3-light-grey">
		        <th>Id</th>
		        <th>Firstname</th>
		        <th>Lastname</th>
		        <th>Email</th>
		      </tr>
		    </thead>
    		<?php while($row = $result->fetch_assoc()) : ?>
    			<tr>
    			<td><?php echo $row["id"] ?></td>
    			<td><?= $row["firstname"] ?></td>
    			<td><?= $row["lastname"] ?></td>
    			<td><?= $row["email"] ?></td>
    			</tr>
    		<?php endwhile ?>
		</table>
		</div>
      
    

<?php
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>