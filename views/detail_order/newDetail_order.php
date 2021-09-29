<from medthod="get" action="">
<label> รหัสรายละเอียด <input type="text" name="id_doc"/> </label><br>
<label> จำนวนสีสกรีน <input type="text" name="print_color"/> </label><br>
<label> จำนวนที่สั่ง <input type="text" name="print_color"/> </label><br>
<label> รหัสออเดอร์ <select name="id_order_cus">
    <?php foreach($order_List as $order){echo "<option value=$order->id_order"}
</select>

</from>