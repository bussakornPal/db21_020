<?php class Detail_OrderController
{
    public function index()
    {
        $detail_order_List= detail_order::getAll();
        require_once("./views/detail_order/index_detail_order.php");
    }
}
?>