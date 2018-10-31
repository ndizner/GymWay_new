<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Custom Configs File
|--------------------------------------------------------------------------
| Hoja de configuraciones generales del sistema
| Autor: Lucas Fradusco
| Fecha: 06/2018
|
*/

/*
|--------------------------------------------------------------------------
| Custom Config: Articulos/Sectores Activos o dados de baja
|--------------------------------------------------------------------------
| Acá defino la constante que uso en la base de datos para marrcar los articulos o Sectores activos o inactivos.
|
*/
$config['Inactivo']					= 0;
$config['Activo']		    		= 1;

$config['Plan']					    = 1;
$config['Arancel']		    	= 2;

$config['Descuento']			  = 1;
$config['Recargo']		    	= 0;

$config['Masculino']			  = 1;
$config['Femenino']		    	= 2;
$config['Otros']			      = 3;


$config['date_format']			       = 'Y-m-d H:i:s';
$config['query_date']			         = 'Y-m-d';
?>
