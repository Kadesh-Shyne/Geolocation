<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }
	
	   if (isset($_POST["submit_coordinates"]))
    {
        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
        <?php
    }
	
/*	$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit_mac"])) {
    $mac = $_POST["mac"];

    // Query the database to retrieve the location associated with the MAC address
    $sql = "SELECT latitude, longitude FROM mac_locations WHERE mac_address =     ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mac);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $latitude = $row["latitude"];
        $longitude = $row["longitude"];
        ?>
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
        <?php
    } else {
        echo "Location not found for MAC address: $mac";
    }
    $stmt->close();
    $conn->close();
}
	
*/
	?>
	
	
	<form method="POST">
    <p>
        <input type="text" name="address" placeholder="Enter address">
    </p>
 
    <input type="submit" name="submit_address">
    </form>

    <form method="POST">
    <p>
        <input type="text" name="latitude" placeholder="Enter latitude">
    </p>
 
    <p>
        <input type="text" name="longitude" placeholder="Enter longitude">
    </p>
 
    <input type="submit" name="submit_coordinates">
    </form>

    <form method="POST">
    <p>
        <input type="text" name="mac" placeholder="Enter MAC address">
    </p>
    <input type="submit" name="submit_mac" value="Locate">
    </form>   
