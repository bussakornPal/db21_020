<?php
$controllers = array('pages'=>['home','error'],'order'=>['index'],'detail_order_customer'=>['index']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                        break;

        case "order":   require_once("./models/order.php");
                        $controller = new OrderController();
                        break;
        case "detail_order" : require_once("models/detail_order.php");
                            $controller = new Detail_OrderController();
                            break;
    }
    $controller->{$action}();

}
if(array_key_exists($controller,$controllers)){

    if(in_array($action,$controllers[$controller]))

        call($controller,$action);

    else

        call('pages','error');

}

else{

    call('pages','error');

}
