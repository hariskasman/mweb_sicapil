<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d4.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM slide WHERE codx = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>