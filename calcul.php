<?php
include "tp1.php";
start_page("calcul");
$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$action = $_GET['action'];
echo $action;
if('*'== $action)
{
    $res = $op1 * $op2;
}
elseif('+'== $action)
{
    $res = $op1 + $op2;
}
elseif('/'== $action)
{
    $res = $op1 / $op2;
}
elseif('-'== $action)
{
    $res = $op1 - $op2;
}
else
{
    echo'<br/><strong>opérateur'.$action.'nongéré</strong>';
}
if (isset($res)) echo $op1. $action . $op2 . '=' . $res;
end_page();
?>