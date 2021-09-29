<?php
$controllers = array('pages'=>['home','error'],'order'=>['index']);

function call($controllers,$action){
    require_once("controllers/".$controller."_controller.php");
    require_once("models/order.php");
    switch($controller)
    {
        case"pages":    $controller = new PagesController();
        case"order":    $controller = new Oder();
                        break;
    }
    $controller->{$action}();

}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
        call($controller,$action);
     else
        call('pages','error');
    
}
else 
{
    call('pages','error');
}
?>