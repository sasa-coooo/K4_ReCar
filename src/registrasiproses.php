<?php
include "conn/koneksi.php"

$cek_user=mysql_num_rows(mysql_query("SELECT * FROM tb_user WHERE userid=$_"))