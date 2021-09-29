<?php class Order{
    public $id_order_cus;
    public $date_order;
    public $condition_payment;
    public $status_deli;
    public $status_produce;
    public $date_payment_1;
    public $date_payment_2;
    public $date_produce;
    public $id_staff;
    public $id_customer;

    public Order($id_order_cus,$date_order,$condition_payment,$status_deli,$status_produce,$date_payment_1,$date_payment_2,$date_produce,$id_staff,$id_customer)
    {
        $this->id_order_cus = $id_order_cus;
        $this->date_order = $date_order;
        $this->condition_payment = $condition_payment;
        $this->status_deli = $status_deli;
        $this->status_produce =$status_produce;
        $this->date_payment_1 = $date_payment_1;
        $this->date_payment_2 = $date_payment_2;
        $this->date_produce = $date_produce;
        $this->id_staff = $id_staff;
        $this->id_customer = $id_customer;
    }
    public static function getAll()
    {
        $orderList=[];
        require("connect_database.php");
        $sql="select * from order_customer";
        $result=conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_order_cus = $my_row[id_order_cus];
            $date_order = $my_row[date_order];
            $condition_payment = $my_row[condition_payment];
            $status_deli = $my_row[status_deli];
            $status_produce =$my_row[status_produce];
            $date_payment_1 = $my_row[date_payment_1];
            $date_payment_2 = $my_row[date_payment_2];
            $date_produce = $my_row[date_produce];
            $id_staff = $my_row[id_staff];
            $id_customer = $my_row[id_customer];
            $orderList[] = new Order($id_order_cus,$date_order,$condition_payment,$status_deli,$status_produce,$date_payment_1,$date_payment_2,$date_produce,$id_staff,$id_customer);
        }
        require("connection_close.php")
        return $orderList;

    }



}

?>