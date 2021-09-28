<?php
$controllers = array('pages'=>['home','error']);
function call($controllers,$action){
    echo "routes to".$controller."-".$action."<br>";
}
if(array_key_exits($controllers,$controllers))
{
    if(in_array($action,$controllers[$controller])){​​​​
        call($controller,$action);
    }​​​​ else{​​​​
        call('pages','error');}​​​​
}
else 
{
    call('pages','error');
}
?>