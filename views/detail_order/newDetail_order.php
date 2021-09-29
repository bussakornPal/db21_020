<from medthod="get" action="">
<label> รหัสรายละเอียด <input type="text" name="id_doc"/> </label><br>
<label> จำนวนสีสกรีน <input type="text" name="print_color"/> </label><br>
<label> จำนวนที่สั่ง <input type="text" name="print_color"/> </label><br>
<label> รหัสออเดอร์ <select name="id_order_cus">
    <?php foreach($order_List as $order){echo "<option value=$order->id_order";}?>
</select> </label><br>
<input type="hidden" name="controller" value="detail_order"/>
<button type="submit"name="action" value="index"> Back </button>
<button type="submit"name="action" value="newDetail_order"> Save </button>

</from>