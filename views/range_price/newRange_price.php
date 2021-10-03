<form method="get" action="">
<label>รหัสขอบเขตราคา <input type="text" name="id_range"/></label><br>
<label>ราคาต่ำสุด <input type="number" name="min_range"/></label><br>
<label>ราคาสูงสุด <input type="number" name="max_range"/></label><br>
<label>ราคา <input type="number" name="price"/></label><br>
<label>ราคาของสี <input type="number" name="color_price"/></label><br>

<label>รหัสสินค้า <select name="id_product">
    <?php foreach($product_List as $dep) {echo "<option value = $dep->id_product>
    $dep->id_product</option>";}
    ?>
    </select></label><br>

<input type="hidden"name="controller"value="range_price"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addrange_price">Save</button>

</form>
