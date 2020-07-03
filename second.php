

<?php
$con =  mysqli_connect('localhost', 'maram', 'maram777', 'remote_ control');

if (!$con) {
 echo " not connect";
}

if (!mysqli_select_db($con,'remote_ control'))
{
	
	 echo "database not connect";
	
	
}
 


if(array_key_exists('Left', $_POST)) { 

    $sql = "INSERT INTO `buttons4` (`Left`) VALUES
      ('Left')";
	  
	  
	  
	  	  if (!mysqli_query($con,$sql))
	{
  echo ' ';
} else {
  echo ' ';
}

}
	  
	
	  

  if(array_key_exists('Right', $_POST)) { 

    $sql = "INSERT INTO `buttons4` (`Right`) VALUES
      ('Right')";
	  
	  
	  	  if (!mysqli_query($con,$sql))
	{
  echo ' ';
} else {
  echo ' ';
}

	  }  
	  



       
	
  if(array_key_exists('Stop', $_POST)) { 

    $sql = "INSERT INTO `buttons4`(`Stop`) VALUES
      ('Stop')";
	  
	  
	  	  if (!mysqli_query($con,$sql))
	{
  echo ' ';
} else {
  echo ' ';
}

	  } 	
		

		
  	
  if(array_key_exists('Forward', $_POST)) { 

    $sql = "INSERT INTO `buttons4`(`Forward`) VALUES
      ('Forward')";
	  
	  
	  	  if (!mysqli_query($con,$sql))
	{
  echo ' ';
} else {
  echo ' ';
}

	  } 
	  
	  
	  
	    if(array_key_exists('Backward', $_POST)) { 

    $sql = "INSERT INTO `buttons4`(`Backward`) VALUES
      ('Backward')";
	  
	  
	  	  if (!mysqli_query($con,$sql))
	{
  echo ' ';
} else {
  echo ' ';
}

	  } 


mysqli_close($con);


?>





<?php
$con =  mysqli_connect('localhost', 'maram', 'maram777', 'remote_ control');

if (!$con) {
 echo " not connect";
}

if (!mysqli_select_db($con,'remote_ control'))
{
	
	 echo "database not connect";
	
	
}






$sql = "SELECT 'Left' FROM `buttons4` ORDER BY id DESC LIMIT 1";

$result = mysqli_query($con, $sql);

if(array_key_exists('Left', $_POST)) { 

if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['Left']. "<br>";
    }
} else {
    echo "0 results";
}

}



$sql = "SELECT 'Right' FROM `buttons4` ORDER BY id DESC LIMIT 1";

$result = mysqli_query($con, $sql);

if(array_key_exists('Right', $_POST)) { 

if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['Right']. "<br>";
    }
} else {
    echo "0 results";
}

}





$sql = "SELECT 'Stop' FROM `buttons4` ORDER BY id DESC LIMIT 1";

$result = mysqli_query($con, $sql);

if(array_key_exists('Stop', $_POST)) { 

if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['Stop']. "<br>";
    }
} else {
    echo "0 results";
}

}




$sql = "SELECT 'Forward' FROM `buttons4` ORDER BY id DESC LIMIT 1";

$result = mysqli_query($con, $sql);

if(array_key_exists('Forward', $_POST)) { 

if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['Forward']. "<br>";
    }
} else {
    echo "0 results";
}

}



$sql = "SELECT 'Backward' FROM `buttons4` ORDER BY id DESC LIMIT 1";

$result = mysqli_query($con, $sql);

if(array_key_exists('Backward', $_POST)) { 

if(mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['Backward']. "<br>";
    }
} else {
    echo "0 results";
}

}


mysqli_close($con);



?>







<html> 



<head>



<style>

body{
 
  background-color: black;
    background-image: radial-gradient(gray, white);

 
}

</style>




</head>

 
<body>






</body>
</html>

