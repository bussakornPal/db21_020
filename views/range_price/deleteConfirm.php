<?php echo "<br>Are you sure to delete this range_price<br>";
        echo "รหัสขอบเขตราคา : $id_range->id_range <br>";
        echo "ราคาต่ำสุด : $min_range->min_range<br>";
        echo "ราคาสูงสุด : $max_range->max_range<br>";
        echo "ราคา : $price->price<br>";
        echo "ราคาของสี : $color_price->color_price<br>";

?>
    <form method="get" action="">
    <input type="hidden" name="controller" value="range_price"/>
    <input type="hidden" name="id_range" value="<?php echo $range_price->id_range;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    </form>