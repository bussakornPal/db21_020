<?php class Order{
    public $id_order_cus;
    public $date_order;


    public function __construct($id_order_cus,$date_order)
    {
        $this->id_order_cus = $id_order_cus;
        $this->date_order = $date_order;
       
    }
    public static function getAll()
    {
        $orderList=[];
        require("connect_database.php");
        $sql="select * from order_cutomer";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_order_cus = $my_row[id_order_cus];
            $date_order = $my_row[date_order];
            
            $orderList[] = new Order($id_order_cus,$date_order);
        }
        require("connection_close.php");
        return $orderList;

    }



}

?>