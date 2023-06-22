<html>
<body>
        
<?php
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $companyName = $_POST['CompanyName'];
    $location = $_POST['Location'];
    $email = $_POST['Email'];
    $notes = $_POST['Notes'];

    

    $mysqli = new mysqli("localhost","root","",'test'); // CONNECT DATABASE 

    // Check connection
    if ($mysqli -> connect_errno) 
    {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    $query = "INSERT INTO connections (FirstName, LastName, CompanyName, Location, Email, Notes) VALUES ('$firstName', '$lastName', '$companyName', '$location', '$email', '$notes')";
    // echo $query;
    // die();

    $result=mysqli_query($mysqli,$query); // EXECUTE QUERY
    
    if($result){
         echo "New connection created successfully!";
    }
    else
    {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }

    mysqli_close($mysqli); // CLOSE CONNECTION

?>
</body>
</html>