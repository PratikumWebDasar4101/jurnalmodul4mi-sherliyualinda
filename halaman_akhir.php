<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><table>
		<tr>
			<th>HOBBY USER</th>
			<th>KETERANGAN</th>
		</tr>
		<tr></tr>
		<?php 
		$file =$_SESSION['hobby'];
		foreach ($file as $value) {
		?>
		<tr>
			<td>
				<?php echo $value; ?>
			</td>
			<td>
				<form action="" method="POST">
					<input type="hidden" name="index" value="<?php echo $value; ?>">
					<input type="submit" name="delete" value="delete">
				</form>
			</td>
		</tr>
		<?php } ?>
		<tr colspan="2">
			<td>
				<img src="terkirim/<?php echo $_SESSION['foto']; ?>" width="300">
			</td>
		</tr>
	</table>
</body>
</html>
<?php
if (isset($_POST['delete()']) && isset($_POST['index'])) {
	$index_value= $_POST['index'];
	$file=$_SESSION['hobby'];
	$date_baru = remove_element ($file,$index);
}
?>