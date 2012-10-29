<?php

$conn = @mysql_connect('a.db.shared.orchestra.io','user_483461cc','0Ol%V$XlsV.zNm');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('db_483461cc', $conn);

?>