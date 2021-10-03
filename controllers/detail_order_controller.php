<?php class Detail_OrderController
{
    public function index()
    {
        $detail_order_List= detail_order::getAll();
        require_once("./views/detail_order/index_detail_order.php");
    }
    public function newdetail_order()
    {
        //echo "hi";
        $order_List = Order::getAll();
        $color_of_product_List = color_of_product::getAll();
        require_once('./views/detail_order/newDetail_order.php');
    }
    public function search()
    {
        //echo "hi";
        $key=$_GET['key'];
        $detail_order_List=detail_order::search($key);
        require_once("./views/detail_order/index_detail_order.php");
    }
    public function adddetail_order()
    { echo "eieie";
        $id_doc = $_GET['id_doc'];
        $print_color = $_GET['print_color'];
        $amount_order_cus = $_GET['amount_order_cus'];
        $id_order_cus = $_GET['id_order_cus'];
        $id_cop = $_GET['id_cop'];
        detail_order::add($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop);
        Detail_OrderController::index();
    }
    public function updateForm()
    {
        $id_doc=$_GET['id_doc'];
        $detail_order=detail_order::get($id_doc);
        $order_List = Order::getAll();
        $color_of_product_List = color_of_product::getAll();
        require_once('./views/detail_order/updateForm.php');

    }
    public function update()
    {
        $id_doc=$_GET['id_doc'];
        $print_color=$_GET['print_color'];
        $amount_order_cus=$_GET['amount_order_cus'];
        $id_order_cus=$_GET['id_order_cus'];
        $id_cop = $_GET['id_cop'];
        $id=$_GET['id'];
        detail_order::update($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop,$id);
        Detail_OrderController::index();
    }
    public function deleteConfirm()
    {
        $id_doc=$_GET['id_doc'];
        $detail_order=detail_order::get($id);
        require_once('./views/detail_order/deleteConfirm.php');

    }
    public function delete()
    {
        $id=$_GET['id'];
        detail_order::delete($id);
        Detail_OrderController::index();
    }


}
?>