<?php class color_of_product{
    public $id_cop,$id_product,$id_color;
    public function __construct($id_cop,$id_product,$id_color)
    {
        $this->id_cop = $id_cop;
        $this->id_product = $id_product;
        $this->id_color = $id_color;
        
    }
    public static function getAll()
    {
        $color_of_productList =[];
        require("connect_database.php");
        $sql = "select * from color_of_product";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_cop = $my_row[id_cop];
            $id_product = $my_row[id_product];
            $id_color = $my_row[id_color];
            $color_of_productList[] = new color_of_product($id_cop,$id_product,$id_color);
        }
        require("connection_close.php");
        return $color_of_productList;
        ;
    }
}
?>