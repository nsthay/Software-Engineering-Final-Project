<!DOCTYPE = html>
<html>
<body>
<?PHP
require('LDBInterface.php');
$itemnum = $_POST["itemnum"];
$itemdesc = $_POST["itemdesc"];
if($itemnum != "" && $itemdesc != "") {
	echo 'Error: search terms entered in both fields';
	echo '<br>';
	echo '<a href="./DisplaySearch.php">Go back to search page</a>';
}
else if($itemnum != "") {
	$sql = "SELECT number, description FROM parts WHERE number = ".$itemnum.";";
	$result = $LDBconn->query($sql);
    if($result->num_rows == 0) {
        echo 'Error: no parts with that number found';
        echo '<br>';
        echo '<a href="./DisplaySearch.php">Go back to search page</a>';
    }
    else {
        while ($row = $result->fetch_assoc()) {
            echo '<a href="./SelectItem.php?num='.$row['number'].'">#'.$row['number'].' - '.$row['description'].'</a>';
        }
    }
}
else if($itemdesc != "") {
	$sql = "SELECT number, description FROM parts WHERE description LIKE '%".$itemdesc."%';";
    $result = $LDBconn->query($sql);
    if($result->num_rows == 0) {
        echo 'Error: no parts with that description found';
        echo '<br>';
        echo '<a href="./DisplaySearch.php">Go back to search page</a>';
    }
    else {
        while ($row = $result->fetch_assoc()) {
            echo '<a href="./SelectItem.php?num='.$row['number'].'">#'.$row['number'].' - '.$row['description'].'</a>';
            echo '<br>';
        }
    }
}
else {
	echo 'Error: no search terms entered';
	echo '<br>';
	echo '<a href="./DisplaySearch.php">Go back to search page</a>';
}
?>		
</body>
</html>