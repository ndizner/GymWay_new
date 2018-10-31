<!DOCTYPE html>
	<html lang="en">
			<head>
				<meta charset="utf-8">

			</head>

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
<script type="text/javascript" src="<?php echo base_url("assets/jquery/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/ajax.js"); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle4.css"); ?>" />


<style>
.dropdown-menu>li
{   position:relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    cursor:pointer;
}
.dropdown-menu .sub-menu
{
    left: 100%;
    position: absolute;
    top: 0;
    display:none;
    margin-top: -1px;
    border-top-left-radius:0;
    border-bottom-left-radius:0;
    border-left-color:#fff;
    box-shadow:none;
}
.right-caret:after,.left-caret:after
 {  content:"";
    border-bottom: 5px solid transparent;
    border-top: 5px solid transparent;
    display: inline-block;
    height: 0;
    vertical-align: middle;
    width: 0;
    margin-left:5px;
}
.right-caret:after
{   border-left: 5px solid #ffaf46;
}
.left-caret:after
{   border-right: 5px solid #ffaf46;
}




.headerContainer,
.bodyContainer,
.footerContainer {
    max-width: 960px;
    margin: 0 auto;
    background: #FFF;
}
.padding {
    padding: 20px;
}
.bodyContainer {
    min-height: 500px;
}
a.back-to-top {
    display: none;
    width: 60px;
    height: 60px;
    text-indent: -9999px;
    position: fixed;
    z-index: 999;
    right: 20px;
    bottom: 20px;
    background: #27AE61 url("img/up-arrow.png") no-repeat center 43%;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
}
a:hover.back-to-top {
    background-color: #000;
}
</style>
