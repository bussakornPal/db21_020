<table border = 1>
<tr> <td>id_doc</td> <td>print_color</td> <td>amount_order_cus</td> <td>id_order_cus</td> <td>id_cop</td> <td>update</td> <td>delete</td> </tr> 
<?php foreach($detail_order_List as $detail_order)
{
    echo "<tr> <td>$detail_order->id_doc</td> <td>$detail_order->print_color</td> <td>$detail_order->amount_order_cus</td> <td>$detail_order->id_order_cus</td> <td>$detail_order->id_cop</td> <td>update</td> <td>delete</td> </tr>";
}
echo "</table>";
?>