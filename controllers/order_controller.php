<?php class OrderController{
    public function index()
    {
        $order_List=Order::getAll();
        require_once("./views/order/index_order.php");
    }
    public function newOrder(){
        $staff_List=staff::getAll();
        $customer_List=customer::getAll();
        require_once('./views/order/newOrder.php');
    }
    public function addOrder()
    {
        $id_customer=$_GET['id_customer'];
        $id_staff=$_GET['id_staff'];
        $fname_staff=$_GET['fname_staff'];
        $name_customer=$_GET['name_customer'];
        Order::Add($id_customer,$name_customer,$id_staff,$fname_staff);
        OrderController::index();
    }

}
?>