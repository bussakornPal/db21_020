<from method="get" action="">
<label>รหัส <input type="text" name="id_order_cus"/></label><br>
<label>วันที่ <input type="text" name="date_order"/></label><br>
<label>ชื่อลูกค้า <select name="id_customer">
    <?php foreach($customer_List as $dep) {echo "<option value = $dep->id_customer>
    $dep->name_customer</option>";}
    ?>
</select></label><br>
<label>ชื่อพนักงาน <select name="id_staff">
    <?php foreach($staff_List as $dep) {echo "<option value = $dep->id_staff>
    $dep->fname_staff</option>";}
    ?>
</select></label><br>
<input type="hidden"name="controller"value="order"/>
<botton type= "submit"name="action"value="index">back</botton>
<botton type= "submit"name="action"value="newOrder">Save</botton>
</from>