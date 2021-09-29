<table border=1>
<tr><td>id_order_cus</td><td>date_order</td><td>condition_payment</td><td>status_deli</td><td>status_produce</td>
<td>date_payment_1</td><td>date_payment_2</td><td>date_produce</td><td>id_staff</td><td>id_customer</td><td>update</td><td>delete</td></tr>
<?php foreach($order_List as $order)
{
        echo "<tr><td>$order->id_order_cus</td><td>$order->date_order</td><td>$order->condition_payment</td><td>$order->status_deli</td>
        <td>$order->status_produce</td><td>$order->date_payment_1</td><td>$order->date_payment_2</td><td>$order->date_produce</td><td>$order->id_staff</td>
        <td>$order->id_customer</td><td>update</td><td>delete</td></tr>";
}
echo "</table>";
?>