<?php class OrderController{
    public function index()
    {
        $order_List=Order::getAll();
        require_once('views/orders/index_order.php');
    }

}
?>