<?php class Order{
     public $id_order_cus;
     public $date_order;
     public $id_staff;
     public $id_customer;
    public $fname_staff;
    public $name_customer;

    public function __construct($id_order_cus,$date_order,$id_staff,$id_customer,$fname_staff,$name_customer)
    {
        $this->id_order_cus = $id_order_cus;
        $this->date_order = $date_order;
        $this->id_staff = $id_staff;
        $this->fname_staff = $fname_staff;
        $this->id_customer = $id_customer;
        $this->name_customer = $name_customer;
    }
    public static function getAll()
    {
        $orderList=[];
        require("connect_database.php");
        $sql="SELECT * FROM order_cutomer NATURAL JOIN staff NATURAL JOIN customer";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_order_cus = $my_row[id_order_cus];
            $date_order = $my_row[date_order];
            $id_staff = $my_row[id_staff];
            $fname_staff= $my_row[fname_staff];
            $id_customer = $my_row[id_customer];
            $name_customer = $my_row[name_customer];
            
            $orderList[] = new Order($id_order_cus,$date_order,$id_staff,$id_customer,$fname_staff,$name_customer);
        }
        require("connection_close.php");
        return $orderList;

    }
     public static function Add($id_order_cus,$date_order,$name_customer,$fname_staff)
     { 
        require("connect_database.php");
        $sql = "SELECT * FROM order_cutomer NATURAL JOIN staff NATURAL JOIN customer";
        $result = $conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_order_cus = $my_row[id_order_cus];
        $date_order = $my_row[date_order];
        $id_staff = $my_row[id_staff];
        $fname_staff= $my_row[fname_staff];
        $id_customer = $my_row[id_customer];
        $name_customer = $my_row[name_customer];
        require("connection_close.php");
        return new Order($id_order_cus,$date_order,$id_staff,$id_customer,$fname_staff,$name_customer);
     }



}

?>