<table border=1>
<tr><td>id_order_cus</td><td>date_order</td><<td>update</td><td>delete</td></tr>
<?php foreach($order_List as $order)
{
        echo "<tr><td>$order->id</td><td>$order->do</td><td>update</td><td>delete</td></tr>";
}
echo "</table>";
?>