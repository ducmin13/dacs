<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username']!=NULL){
    unset($_SESSION['username']);
	session_destroy();
    echo "
			<script language='javascript'>
			alert('Đăng xuất thành công');
			window.open('../index.php','_self', 1);
			</script>";
}
?>
