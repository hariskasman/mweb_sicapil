<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d1k.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM post_kat WHERE codx = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>