<!DOCTYPE = html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?PHP
require('LDBInterface.php');
$itemnum = $_GET["num"];
$sql = "SELECT * FROM parts WHERE number = ".$itemnum.";";
$result = $LDBconn->query($sql);
$part = $result->fetch_assoc();
?>
<table>
    <tr>
        <th>Number</th>
        <th>Description</th>
        <th>Price</th>
        <th>Weight</th>
        <th>Picture</th>
    </tr>
    <tr>
        <td><?PHP echo $part['number']?></td>
        <td><?PHP echo $part['description']?></td>
        <td><?PHP echo $part['price']?></td>
        <td><?PHP echo $part['weight']?></td>
        <td><img src="<?PHP echo $part['pictureURL']?>" alt="<?PHP echo $part['pictureURL']?>"></td>
    </tr>
</table>
<br>
<form action="./UpdateQuantity.php?num=<?PHP echo $itemnum?>" method="post">
    <fieldset>
        Enter quantity of new parts: <input type="number" name="quant" id="quant">
        <input type="submit" value="Update">
    </fieldset>
</form>
</body>
</html>