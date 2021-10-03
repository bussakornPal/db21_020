<table border=1>
new range_price <a href=?controller=range_price&action=newrange_price> click</a><br>
form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="range_price">
        <button type="submit" name="action" value="search">
search</button>
</form>






<tr><td>id_range</td><td>min_range</td><td>max_range</td><td>price</td><td>color_price</td>
<td>id_product</td><td>update</td><td>delete</td></tr>
<?php foreach($range_price_List as $range_price)
{
        echo "<tr><td>$range_price->id_range</td><td>$range_price->min_range</td><td>$range_price->max_range</td><td>$range_price->price</td>
        <td>$range_price->color_price</td><td>$range_price->id_product</td><td>
        
        <a href=?controller=range_price&action=updateForm&id_range=$range_price->id_range>update</a>
        </td><td>
        <a href=?controller=range_price&action=deleteConfirm&id_range=$range_price->id_range>delete</a>
        </td></tr>";
}
echo "</table>";
?>