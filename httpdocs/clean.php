<?

$qs = $_SERVER['QUERY_STRING'];
$qs = str_replace('&amp;','&',$qs);
$qs = str_replace('?','&',$qs);

header('Location: index.php?'.$qs);
?>
