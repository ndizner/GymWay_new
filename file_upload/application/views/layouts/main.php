<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
<script type="text/javascript" src="<?php echo base_url("assets/jquery/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/ajax.js"); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle4.css"); ?>" />

<!-- Icono explorador -->
<link rel=icon href="<?php echo base_url("img/pesa.png"); ?>" type="image/png">
<!-- Librerias para los select -->
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-select.min.css"); ?>"/>
<script src="<?php echo base_url("assets/js/bootstrap-select.min.js"); ?>"></script>
	</head>

	<body>
	
	<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>
	</body>
</html>
