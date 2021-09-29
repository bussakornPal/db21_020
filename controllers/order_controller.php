<?php class OrderController{
    public function index()
    {
        $order_List=Order::getAll();
        require_once('./controllers/order_controller.php');
    }

}
?>