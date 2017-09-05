<?php
$id = $_GET["id"];
$printWorks = true;
if(printWorks) {
    echo 'Packing list, invoice and shipping label sent to printer.';
    echo '<br>Print successful.<br>';
    echo '<form method = "post" action = "./CompleteOrder.php?id=' . $id . '">
            <button type="submit">Complete Order</button>
           </form>';
}
else {
    echo 'Printer not connected or not working. Please contact an administrator.';
    echo '<br><a href="./ShowNextOrder.php">Go back to order page</a>';
}
?>