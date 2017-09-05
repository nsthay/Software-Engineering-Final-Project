<!DOCTYPE = html>
<html>
<body>
<?php
require('SystemDatabase.php');
$itemnum = $_GET["num"];
$quantity = $_POST["quant"];
if($quantity == "") {
    echo 'Error: no quantity entered';
    echo '<br>';
    echo '<a href="./SelectItem.php?num='.$itemnum.'">Go back to item detail page</a>';
}
else {
    $sql = "UPDATE parts SET quantity = quantity + ".$quantity." WHERE number = ".$itemnum.";";
    if($SDBconn->query($sql) == true) {
        $sql = "SELECT quantity FROM parts WHERE number = ".$itemnum.";";
        $result = $SDBconn->query($sql);
        $quantity = $result->fetch_assoc();
        echo 'Update successful. Current quantity is: '.$quantity['quantity'];
        echo '<br>';
        echo '<a href="./DisplaySearch.php">Go back to search page</a>';
    }
    else {
        echo 'Update unsuccessful. Connection to server may be down.';
        echo '<br>';
        echo '<a href="./DisplaySearch.php">Go back to search page</a>';
    }
}
?>
</body>
</html>
