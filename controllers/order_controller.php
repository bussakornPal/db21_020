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
         $id_order_cus=$_GET['id_order_cus'];
        $date_order=$_GET['date_order'];
         $fname_staff=$_GET['fname_staff'];
        $name_customer=$_GET['name_customer'];
        Order::Add($id_order_cus,$date_order,$fname_staff,$name_customer);
        OrderController::index();
    }
    public function updateForm()
    {
       
        $id_order_cus=$_GET['id_order_cus'];
        $staff_List=staff::getAll();
        $customer_List=customer::getAll();
        $order=Order::get($id_order_cus);
        require_once('./views/order/updateForm.php');
       
    }
    public function update()
    {
        $id_order_cus=$_GET['id_order_cus'];
        $date_order=$_GET['date_order'];
        $id_staff=$_GET['fname_staff'];
        $id_customer=$_GET['name_customer'];
        $id=$_GET['id'];

        Order::update($id_order_cus,$date_order,$id_staff,$id_customer,$id);
        OrderController::index();
    }
    public function search()
    {
        $key=$_GET['key'];
        $order_List=Order::search($key);
        require_once('./views/order/index_order.php');
    }
    public function deleteConfirm()
    {
        $id=$_GET['id_order_cus'];
        $order=Order::get($id);
        require_once('./views/order/deleteConfirm.php');


    }
    public function delete()
    {
       
        $id=$_GET['id'];
        Order::delete($id);
        OrderController::index();

    }
    

}
?>