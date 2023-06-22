<html>
<body>
<?php
$mysqli = new mysqli("localhost","root","",'test'); // CONNECT DATABASE 

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM `connections`"; 

$result=mysqli_query($mysqli,$sql); // EXECUTE QUERY

while($row=mysqli_fetch_object($result) ){  // FETCH RESULTS 

    printf ("Unique ID: %d , First Name: %s, Last Name: %s, Company Name: %s, Location: %s, Email: %s, Notes: %s <br/>\n",
    $row->ConnectionID, $row->FirstName, $row->LastName, $row->CompanyName, $row->Location, $row->Email, $row->Notes);
}

mysqli_close($mysqli); // CLOSE CONNECTION
?>
</body>
</html>