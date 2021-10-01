<?php echo "eyee";
?>
<form method="get" action="">
<label> รหัสรายละเอียด <input type="text" name="id_doc"/> </label><br>
<label> จำนวนสีสกรีน <input type="number" name="print_color"/> </label><br>
<label> จำนวนที่สั่ง <input type="number" name="amount_order_cus"/> </label><br>
<label> รหัสออเดอร์ <select name="id_order_cus">
    <?php foreach($order_List as $order){echo "<option value = $order->id_order_cus> $order->date_order</option>";}?>
</select> </label><br>

<label>รหัสสินค้า <select name="id_cop">
    <?php foreach($color_of_productList as $cop) {echo "<option value = $cop->id_cop>
    $cop->id_product</option>";}
    ?>
</select></label><br>

<input type="hidden" name="controller" value = "detail_order"/>
<button type="submit"name="action" value = "index"> Back </button>
<button type="submit"name="action" value= "addDetail_order"> Save </button>

</form>