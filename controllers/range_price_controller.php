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

    public function search(){
        $key=$_GET['key'];
        $range_price_List=range_price::search($key);
        require_once('./views/range_price/index_range_price.php');

    }
    
    public function updateForm()
    {
       
        $id_range=$_GET['id_range'];
        $product_List=staff::getAll();
        $range_price=range_price::get($id_range);
        require_once('./views/range_price/updateForm.php');
       
    }

    public function update()
    {
        $id_range = $_GET['id_range'];
        $min_range = $_GET['min_range'];
        $max_range = $_GET['max_range'];
        $price = $_GET['price'];
        $color_price = $_GET['color_price'];
        $id_product = $_GET['id_product'];

        range_price::update($id_range,$min_range,$max_range,$price,$color_price,$id_product);
        Range_PriceController::index();
    }

    public function deleteConfirm()
    {
        $id_range=$_GET['id_range'];
        $range_price=range_price::get($id_range);
        require_once('./views/range_price/deleteConfirm.php');


    }



}
?>