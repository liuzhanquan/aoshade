<?php
/**
 * 数组格式化输出
 */
function prt($attr,$status=0)
{
    echo '<pre>' . print_r($attr, true) . '</pre>';
	if($status == 1) exit;
}


?>
