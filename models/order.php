<?php class Order{
    public $id;
    public $do;


    public function __construct($id,$do)
    {
        $this->id = $id;
        $this->do = $do;
       
    }
    public static function getAll()
    {
        $orderList=[];
        require("connect_database.php");
        $sql="select * from order_cutomer";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id = $my_row[id_order_cus];
            $do = $my_row[date_order];
            
            $orderList[] = new Order($id,$do);
        }
        require("connection_close.php");
        return $orderList;

    }



}

?>