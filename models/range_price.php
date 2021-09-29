<?php class range_price{
public $id_range,$min_range,$max_range,$price,$color_price,$id_product;
public range_price($id_range,$min_range,$max_range,$price,$color_price,$id_product){
    $this->id_range = $id_range;
    $this->min_range = $min_range;
    $this->max_range = $max_range;
    $this->price = $price;
    $this->$color_price = $color_price;
    $this->$id_product = $id_product; 
}
public static function getAll(){
    $range_priceList = [];
    require("connection_connect.php");
    $sql = " select * from department ";
    $result = $conn->query($sql);
    while($my_row == $result->fetch_assoc()){
        $ranid_range = $my_row[$ranid_range];
        $ranmin_range = $my_row[$ranmin_range];
        $ranmax_range = $my_row[$ranmax_range];
        $ranprice = $my_row[$ranprice];
        $rancolor_price = $my_row[$rancolor_price];
        $ranid_product = $my_row[$ranid_product];
        $range_priceList = new range_price($ranid_range,$ranmin_range,$ranmax_range,$ranprice,$rancolor_price,$ranid_product);
    }
    require("connection_close.php");
    return $range_priceList;
}
    
}?>