<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbname = getenv("MYSQL_DATABASE");
$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
 
$connection = mysqli_connect($dbhost.":".$dbport, root, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));
$query = "SELECT * from user" or die("Error in the consult.." . mysqli_error($connection));
echo "Hello All.. Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "User Id: ".$row['user_id'] . " User Name: " . $row['username'] . "<br>";
}
echo "End of the list <br>";
mysqli_close($connection);
?>
