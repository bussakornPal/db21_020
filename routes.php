<?php
$controllers = array('pages'=>['home','error'],'order'=>['index','newOrder','addOrder'],'detail_order'=>['index','newDetail_order'],'range_price'=>['index','newrange_price']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                        break;

        case "order":   require_once("./models/order.php");
                        require_once("./models/staff.php");
                        require_once("./models/customer.php");
                        $controller = new OrderController();
                        break;
        case "detail_order" :   require_once("./models/detail_order.php");
                                require_once("./models/order.php");
                                require_once("./models/color_of_product.php");
                                $controller = new Detail_OrderController();
                                break;
        case "range_price" : require_once("./models/range_price.php");
                            $controller = new Range_PriceController();
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
