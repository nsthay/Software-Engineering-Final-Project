<!DOCTYPE = html>
<html>
<body>
<?PHP
$servername = "students";
$username = "z1701289";
$password = "19950523";
$dbname = "z1701289";

// Create persistent connection connection
$SDBconn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($SDBconn->connect_error) {
    die ( "Connection failed: " . $conn->connect_error );
}

/* change character set to utf8 */
$SDBconn->set_charset ( "utf8" );
?>
</body>
</html>
