<form method="get" action="">

<label> รหัสรายละเอียด <input type="text" name="id_doc"
    value="<?php echo $detail_order->id_doc;?>"/> </label><br>
<label> จำนวนสีสกรีน <input type="number" name="print_color" 
    value="<?php echo $detail_order->print_color;?>"/> </label><br>
<label> จำนวนที่สั่ง <input type="number" name="amount_order_cus"
    value="<?php echo $detail_order->amount_order_cus;?>"/> </label><br>

<label> รหัสออเดอร์ <select name="id_order_cus">
    <?php foreach($order_List as $ord)
        {echo "<option value = $ord->id_order_cus";
        if($ord->id_order_cus==$order->id_order_cus){echo " selected='selected'";}
        echo "> $ord->id_order_cus</option>";}
    ?>
    </select> </label><br>

<label>สินค้า <select name="id_cop">
    <?php foreach($color_of_product_List as $cop) 
        {echo "<option value = $cop->id_cop";
        if($cop->id_cop==$color_of_product->id_cop){echo " selected='selected'";}
        echo "> $color_of_product->name_product $color_of_product->name_color</option>";}
        ?>
    </select></label><br>
<input type="hidden"name="controller"value="detail_order"/>
<input type="hidden" name="id" value="<?php echo $detail_order->id_doc; ?>"/>
<button type="submit"name="action"value="index">back</button>
<button type="submit"name="action"value="update">update</button>
</form>