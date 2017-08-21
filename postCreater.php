<?php
$url='postTarget.php';
$body='param=123';   
$options=array('method'=>'post','content'=>$body,'header' => 'Content-type: application/x-www-form-urlencoded');
$context = stream_context_create(array('http' => $options));
// Pass the context to file_get_contents()
print file_get_contents($url, false, $context);