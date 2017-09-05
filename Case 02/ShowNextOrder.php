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
Next order:
<br>
<?php
require('SystemDatabase.php');
$sql = "SELECT id, partslist FROM orders WHERE status = 0 ORDER BY date ASC LIMIT 1;";
$result = $SDBconn->query($sql);
if($result->num_rows == 0) {
    echo 'No orders to complete. Take a break or something.';
}
else {
    $order = $result->fetch_assoc();
    $parts = explode(";", $order['partslist']);
    echo '<table>
            <tr>
                <th>Item #</th>
                <th>Quant</th>
            </tr>';
    for ($i = 0; $i < count($parts) - 1; $i++) {
        $partinfo = explode(",", $parts[$i]);
        echo '<tr>
                <td>'.$partinfo[0].'</td>
                <td>'.$partinfo[1].'</td>
               </tr>';
    }
    echo '</table><br>';
    echo '<form method = "post" action = "./PrintOrder.php?id='.$order['id'].'">
            <button type="submit">Print</button>
           </form>';
}
?>
</body>
</html>
