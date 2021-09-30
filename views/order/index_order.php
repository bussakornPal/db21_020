<table border=1>
new order <a href=?controller=order&action=newOrder> click</a><br>

<tr><td>id_order_cus</td><td>date_order</td><td>fname_staff</td><td>name_customer</td><td>address_customer</td><td>phone</td><td>update</td><td>delete</td></tr>
<?php foreach($order_List as $order)
{
        echo "<tr><td>$order->id_order_cus</td>
        <td>$order->date_order</td>
        <td>$order->fname_staff</td>
        <td>$order->name_customer</td>
        <td>$order->address_customer</td>
        <td>$order->phone</td><td>
        <a href=?controller=order&action=updateForm&id_order_cus=$order->id_order_cus>update</a>
        </td><td>
        <a href=?controller=order&action=deleteConfirm&id_order_cus=$order->id_order_cus>delete</a>
        </td></tr>";
}
echo "</table>";
?>