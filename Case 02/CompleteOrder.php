<!DOCTYPE = html>
<html>
<body>
<?php
require("SystemDatabase.php");
$id = $_GET["id"];
$sql = "UPDATE orders SET status = 1 WHERE id = ".$id.";";
if($SDBconn->query($sql) == true) {
    echo 'Update successful. Email has been sent to customer.';
    echo '<br><a href="./ShowNextOrder.php">Go to next order</a>';
}
else {
    echo 'Update unsuccessful. Connection to database may be down. Please contact an administrator.';
    echo '<br><a href="./ShowNextOrder.php">Go back to order page</a>';
}
?>
</body>
</html>
