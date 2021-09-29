<?php class range_price{
public $id_range,$min_range,$max_range,$price,$color_price,$id_product;
public function __construct($id_range,$min_range,$max_range,$price,$color_price,$id_product){
    $this->id_range = $id_range;
    $this->min_range = $min_range;
    $this->max_range = $max_range;
    $this->price = $price;
    $this->color_price = $color_price;
    $this->id_product = $id_product; 
}
public static function getAll(){
    $range_priceList = [];
    require("connection_database.php");
    $sql = " select * from range_price ";
    $result = $conn->query($sql);
    while($my_row = $result->fetch_assoc()){
        $id_range = $my_row[id_range];
        $min_range = $my_row[min_range];
        $max_range = $my_row[max_range];
        $price = $my_row[price];
        $color_price = $my_row[color_price];
        $id_product = $my_row[id_product];
        $range_priceList = new range_price($id_range,$min_range,$max_range,$price,$color_price,$id_product);
    }
    require("connection_close.php");
    return $range_priceList;
}
    
}?>