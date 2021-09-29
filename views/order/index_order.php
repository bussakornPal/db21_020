<table border=1>
new order <a href=?controller=order&action=newOrder> click</a><br>
<tr><td>id_order_cus</td><td>date_order</td><td>id_staff</td><td>fname_staff</td><td>id_customer</td><td>name_customer</td><td>update</td><td>delete</td></tr>
<?php foreach($order_List as $order)
{
        echo "<tr><td>$order->id_order_cus</td><td>$order->date_order</td>
        <td>$order->id_staff</td><td>$order->fname_staff</td>
        <td>$order->id_customer</td><td>$order->name_customer</td><td>update</td><td>delete</td></tr>";
}
echo "</table>";
?>