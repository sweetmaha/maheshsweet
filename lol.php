<?php
$pop=array('status'=>'success',
'message'=>'data retrived successfully',
'data'=>array('name'=>$_POST['username'],
'age'=>$_POST['age']));

echo json_encode($pop);
exit;
?>
