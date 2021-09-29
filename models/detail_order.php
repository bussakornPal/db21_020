<?php class order_detail{
    public $id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop;
    public order_detail($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop)
    {
        $this->id_doc = $id_doc;
        $this->print_color = $print_color;
        $this->amount_order_cus = $amount_order_cus;
        $this->id_order_cus = $id_order_cus;
        $this->id_cop = $id_cop;
    }
    public static function getAll()
    {
        $detail_order_list =[];
        require("connect_database.php");
        $sql = "select * from detail_order_customer";
        $result = conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_doc = $my_row[id_doc];
            $print_color = $my_row[print_color];
            $amount_order_cus = $my_row[amount_order_cus];
            $id_order_cus = $my_row[id_order_cus];
            $id_cop = $my_row[id_cop];
            $detail_order_list = new order_detail($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop);
        }
        require("connection_close.php");
        return $detail_order_list;
    }
}
