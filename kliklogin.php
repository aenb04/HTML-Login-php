<?php
//mengindentifikasi jika terjadinya error
error_reporting(0);
$nama			= $_POST ['namauser'] ;
$pswd			= $_POST ['passworduser'];

//User admin
//pass admin1234
if ($nama=="admin" && $pswd=="admin1234") {
	echo "Selamat Datang Admin";
	} else {
	echo "";
}
?>

<html>
    <head>
        <title>Beranda</title>
    </head>
    <body>
		<table align="center">
		    <tr>
		        <td>Copyright &copy; <?php echo date('Y'); ?> Akmal Najib </td>
		    </tr>
		</table>
    </body>
</html>