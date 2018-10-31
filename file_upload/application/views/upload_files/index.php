


<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
<script type="text/javascript" src="<?php echo base_url("assets/jquery/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/ajax.js"); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle4.css"); ?>" />







<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
ul.gallery {
    clear: both;
    float: left;
    width: 100%;
    margin-bottom: -10px;
    padding-left: 3px;
}
ul.gallery li.item {
    width: 25%;
    height: 215px;
    display: block;
    float: left;
    margin: 0px 15px 15px 0px;
    font-size: 12px;
    font-weight: normal;
    background-color: d3d3d3;
    padding: 10px;
    box-shadow: 10px 10px 5px #888888;
}

.item img{width: 100%; height: 184px;}

.item p {
    color: #6c6c6c;
    letter-spacing: 1px;
    text-align: center;
    position: relative;
    margin: 5px 0px 0px 0px;
}
</style>


Usuario: <?= $usuario->username ?> | <a href=<?= base_url('Auth/edit_user/'.$usuario->id); ?> >Modificar Mis Datos</a> | <a href=<?= base_url('Auth/'); ?> >Administrar Usuarios</a> | <a href=<?= base_url('Auth/logout'); ?>>Cerrar Sesion</a>

<div class="container">
    <div class="row">
        <div align=center><h1> Trabajo Practico </h1></div>
        <div align="center">
<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Exito!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php }else if($this->session->flashdata('warning')){  ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Advertencia!</strong> <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>
</div>
<!-- FIN Alertas! -->
        <div class="col-lg-12">
            <div class="col-lg-12">
                <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
            </div>
            <hr>
            <form enctype="multipart/form-data" action="" method="post">
                <div align=center><h3> Elegir Archivos </h3></div>
            <div class="form-group">
             <div class="col-lg-6">  
                    <input type="file" class="form-control" name="userFiles[]" multiple/>
                    <small>Admite selección multiple</small>
            </div>
                <div class="col-lg-6">
                        <input class="form-control" type="submit" name="fileSubmit" value="Subir"/>
                </div>
                </div>
             
                    
                            </div>
            </form>
        </div><hr>
         <div align=center><h3> Archivos Subidos </h3></div>
    <hr>

<div class="container" >
<table class="table table-striped">
                 <thead>
                     <tr>
                        <td><strong>ID<strong/></td>
                        <td><strong>Nombre<strong/></td>
                        <td><strong>Fecha Subida<strong/></td>
                        <td><strong>Acciones<strong/></td>
                     </tr>
  <?php if(!empty($files)): foreach($files as $file): ?>                    
                     <tr>
                    <td><?= $file['id'] ?>  </td>
                    <td><?= $file['file_name'] ?> </td>
                    <td><?= $file['created'] ?>  </td>
                    <td><a href="<?php echo base_url("uploads/files/".$file['file_name']); ?>" download>Descargar</a> | <a href="<?php echo site_url("Upload_files/delete/".$file['id']); ?>" >Eliminar</a>  </td>
                     </tr>
    <?php endforeach; else: ?>                    
</thead>
</div>


                 
                    <p>Aún no hay archivos cargados</p>
                    <?php endif; ?>

