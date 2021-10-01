<?php class Order{
     public $id_order_cus;
     public $date_order;
     public $id_staff;
     public $id_customer;
    public $fname_staff;
    public $name_customer;
    public $address_customer;
    public $phone;

    public function __construct($id_order_cus,$date_order,$fname_staff,$name_customer,$address_customer,$phone)
    {
        $this->id_order_cus = $id_order_cus;
        $this->date_order = $date_order;
        $this->fname_staff = $fname_staff;
        $this->name_customer = $name_customer;
        $this->address_customer=$address_customer;
        $this->phone=$phone;
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
            $fname_staff= $my_row[fname_staff];
            $name_customer = $my_row[name_customer];
            $address_customer=$my_row[address_customer];
            $phone=$my_row[phone];
            $orderList[] = new Order($id_order_cus,$date_order,$fname_staff,$name_customer,$address_customer,$phone);
        }
        require("connection_close.php");
        return $orderList;


    }
    public static function get($id_order_cus)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM order_cutomer NATURAL JOIN staff NATURAL JOIN customer";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_order_cus = $my_row[id_order_cus];
        $date_order = $my_row[date_order];
        $fname_staff= $my_row[fname_staff];
        $name_customer = $my_row[name_customer];
        $address_customer=$my_row[address_customer];
        $phone=$my_row[phone];
        require("connection_close.php");
        return new Order($id_order_cus,$date_order,$fname_staff,$name_customer,$address_customer,$phone);

    }
    public static function search()
    {
        require("connection_connect.php");
        $sql="SELECT * FROM order_cutomer NATURAL JOIN staff NATURAL JOIN customer WHERE (date_order like '%key%' or fname_staff like '%key%' or name_customer like '%key%')and id_order_cus=id_staff";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_order_cus = $my_row[id_order_cus];
            $date_order = $my_row[date_order];
            $fname_staff= $my_row[fname_staff];
            $name_customer = $my_row[name_customer];
            
            $orderList[] = new Order($id_order_cus,$date_order,$fname_staff,$name_customer,$address_customer,$phone);
        }
        require("connection_close.php");
        return $orderList;

    }
     public static function Add($id_order_cus,$date_order,$id_staff,$id_customer)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `order_cutomer`(`id_order_cus`,`date_order`,`id_staff`,`id_customer`)
        values('$id_order_cus','$date_order','$id_staff','$id_customer');";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
    
     public static function update($id_order_cus,$date_order,$fname_staff,$name_customer)
     {
        require("connect_database.php");
        $sql="UPDATE `order_cutomer` SET `id_order_cus`='$id_order_cus',`date_order`='$date_order',`id_staff`='$id_staff',`id_customer`='$id_customer' WHERE id_order_cus = '$id_order_cus'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }



}

?>