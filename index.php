<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<script type="text/javascript">
	function validForm() {
		var value = document.forms["generatePass"]["length"].value;
		if (value == null || value == "") {
			alert("Lütfen bir uzunluk giriniz");return false;
		}
	}
</script>

<?php
function generate_password( $length,$difficulty ) {
	if($difficulty==1){
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	}else if($difficulty==2){
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456799";
	}else if($difficulty==3){
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
	}
	$password = substr( str_shuffle( $chars ), 0, $length );
	return $password;
}
?>

<div class="alert alert-info" role="alert" align="center"><h2>Sahn-ı Seman Tim Şifre Oluşturucu</h2></div>

<table class="table table-bordered">
	<tr>
		<td>
			<div class="progress">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
				Kolay
				</div>
			</div>
		</td>
		<td>
			<div class="progress">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
				Orta
				</div>
			</div>
		</td>
		<td>
			<div class="progress">
				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
				Zor
				</div>
			</div>
		</td>
	</tr>
	<tr align="center">
		<td><?php echo generate_password(@$_POST["length"],1) ?></td>
		<td><?php echo generate_password(@$_POST["length"],2) ?></td>
		<td><?php echo generate_password(@$_POST["length"],3) ?></td>
	</tr>
	<tr align="center">
		<td><?php echo generate_password(@$_POST["length"],1) ?></td>
		<td><?php echo generate_password(@$_POST["length"],2) ?></td>
		<td><?php echo generate_password(@$_POST["length"],3) ?></td>
	</tr>
	<tr align="center">
		<td><?php echo generate_password(@$_POST["length"],1) ?></td>
		<td><?php echo generate_password(@$_POST["length"],2) ?></td>
		<td><?php echo generate_password(@$_POST["length"],3) ?></td>
	</tr>
</table>
<form id="generatePass" name="generatePass" action="index.php" method="POST" onsubmit="return validForm()">
<div align="center">
	<label>Uzunluk :</label>
	<input type="text" name="length" id="length" onkeypress="if(isNaN(this.value)) alert('Sadece sayı girebilirsiniz!');">
	<button type="submit" class="btn btn-danger">Şifre Oluştur</button>
</div>
</form>
