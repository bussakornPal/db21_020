<?php echo "<br>Are you sure to delete this range_price<br>";
        echo "รหัสขอบเขตราคา : $range_price->id_range <br>";
        echo "ราคาต่ำสุด : $range_price->min_range<br>";
        echo "ราคาสูงสุด : $range_price->max_range<br>";
        echo "ราคา : $range_price->price<br>";
        echo "ราคาของสี : $range_price->color_price<br>";

?>
    <form method="get" action="">
    <input type="hidden" name="controller" value="range_price"/>
    <input type="hidden" name="id_range" value="<?php echo $range_price->id_range;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    </form>