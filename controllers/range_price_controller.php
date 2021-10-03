<?php class Range_PriceController{
    public function index()
    {
        $range_price_List=range_price::getAll();
        require_once("./views/range_price/index_range_price.php");
    }

    public function newrange_price(){
        $product_List = product::getAll();
        require_once("./views/range_price/newRange_price.php");
    }

    public function addrange_price(){
        $id_range = $_GET['id_range'];
        $min_range = $_GET['min_range'];
        $max_range = $_GET['max_range'];
        $price = $_GET['price'];
        $color_price = $_GET['color_price'];
        $id_product = $_GET['id_product'];
        range_price::Add($id_range,$min_range,$max_range,$price,$color_price,$id_product);
        Range_PriceController::index();
    }

}
?>