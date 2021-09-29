<?php
if(isset($_GET['controller'])&&isset($GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
    <head></head>
    <body>
        <?php echo "controller= ".$controller.",action=".$action;?>
        <br>[<a href="">home</a>]
        [<a href="?controller=order&action=index">order</a>]
        <!-- [<a href="?controller=detail_order_customer&action=index">detail_order_customer</a>]
        [<a href="?controller=range_price&action=index">range_price</a>]<br>
         -->
        <?php require_once("./routes.php");?>
    </body>
</html>