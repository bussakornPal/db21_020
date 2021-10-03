<?php class Range_PriceController{
    public function index()
    {
        $range_price_List=range_price::getAll();
        require_once("./views/range_price/index_range_price.php");
    }

    public function newrange_price(){
        $product_List = product::getAll();
        require_once("./views/range_price/newrange_price.php");
    }

}
?>