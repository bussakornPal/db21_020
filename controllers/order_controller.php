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
         echo $_GET['id_order_cus'];
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
        echo "kk";
        
        $id_order_cus=$_GET['id_order_cus'];
        $date_order=$_GET['date_order'];
        $fname_staff=$_GET['id_staff'];
        $name_customer=$_GET['id_customer'];
        Order::update($id_order_cus,$date_order,$fname_staff,$name_customer);
        OrderController::index();
    }
    public function search()
    {
        $key=$_GET['key'];
        $order_List=Order::search($key);
        require_once('./views/order/index_order.php');
    }
    

}
?>