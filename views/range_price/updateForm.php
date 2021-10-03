
<form method="get" action="">
<label>รหัสขอบเขตราคา <input type="text" name="id_range" 
        value="<?php echo $range_price->id_range;?>"/></label><br>
<label>ราคาต่ำสุด <input type="number" name="min_range" 
        value="<?php echo $range_price->min_range;?>"/></label><br>
<label>ราคาสูงสุด <input type="number" name="max_range" 
        value="<?php echo $range_price->max_range;?>"/></label><br>
<label>ราคา <input type="number" name="price" 
        value="<?php echo $range_price->price;?>"/></label><br>
<label>ราคาของสี <input type="number" name="color_price" 
        value="<?php echo $range_price->color_price;?>"/></label><br>

<label>รหัสสินค้า <select name="id_product">
    <?php foreach($product_List as $dep) {
        echo "<option value = $dep->id_product";
        if($dep->id_product==$range_price->id_product){echo " selected='selected'";}
         echo ">$dep->id_product</option>";}
    ?>
    </select></label><br>


<input type="hidden"name="controller"value="range_price"/>
<input type="hidden" name="id" value="<?php echo $range_price->id_range; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
