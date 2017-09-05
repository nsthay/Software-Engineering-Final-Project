<!DOCTYPE = html>
<html>
<body>
<?PHP
$servername = "blitz.cs.niu.edu";
$username = "student";
$password = "student";
$dbname = "csci467";

// Create persistent connection connection
$LDBconn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($LDBconn->connect_error) {
    die ( "Connection failed: " . $conn->connect_error );
}

/* change character set to utf8 */
$LDBconn->set_charset ( "utf8" );
?>
</body>
</html>
