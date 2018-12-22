
 <?php echo form_open_multipart('Clientes/add'); ?>



 <div class="main-body">
     <div class="page-wrapper">
         <div class="page-body">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="card">
                         <div class="card-header">
                           <h5><?php echo lang('cli_new_user_tittle');?></h5>

                             <div class="card-header-right">
                                 <i class="icofont icofont-rounded-down"></i>
                                 <i onclick="myFunction()" class="icofont icofont-refresh"></i>
                                 <i class="icofont icofont-close-circled"></i>
                             </div>
                         </div>
                         <div class="card-block">
                           <h3 class="sub-title"><?php echo lang('cli_personal_data'); ?></h3>
                           <div class="row form-group">
                    					<div class="col-md-4">
                    						<label for="customer_dni" class="control-label"><span class="text-danger">*</span><?php echo lang('cli_dni'); ?></label>
                    							<input type="text" name="customer_dni" value="<?php echo $this->input->post('customer_dni'); ?>" class="form-control" id="dni" />
                    							<span class="text-danger"><?php echo form_error('customer_dni');?></span>
                    					</div>
                    					<div class="col-md-4">
                    						<label for="customer_first_name" class="control-label"><span class="text-danger">*</span><?php echo lang('cli_name'); ?></label>
                    							<input type="text" name="customer_first_name" value="<?php echo $this->input->post('customer_first_name'); ?>" class="form-control" id="customer_first_name" />
                    							<span class="text-danger"><?php echo form_error('customer_first_name');?></span>
                    					</div>
                              <div class="col-md-4">
                    						<label for="customer_last_name" class="control-label"><span class="text-danger">*</span><?php echo lang('cli_last_name'); ?></label>
                    							<input type="text" name="customer_last_name" value="<?php echo $this->input->post('customer_last_name'); ?>" class="form-control" id="customer_last_name" />
                    							<span class="text-danger"><?php echo form_error('customer_last_name');?></span>
                    					</div>
                          </div>
                          <div class="row form-group">
                              <div class="col-md-4">
                                <label for="customer_email" class="control-label"><?php echo lang('cli_email'); ?></label>
                                  <input type="text" name="customer_email" value="<?php echo $this->input->post('customer_email'); ?>" class="form-control" id="customer_email" />
                                  	<span class="text-danger"><?php echo form_error('customer_email');?></span>
                              </div>
                              <div class="col-md-4">
                                <label for="customer_phone" class="control-label"><?php echo lang('cli_tel'); ?></label>
                                  <input type="text" name="customer_phone" value="<?php echo $this->input->post('customer_phone'); ?>" class="form-control" id="customer_phone" />
                                  	<span class="text-danger"><?php echo form_error('customer_phone');?></span>
                              </div>
                              <div class="col-md-4">
                                <label for="customer_dob" class="control-label"><?php echo lang('cli_dob'); ?></label>
                                  <input type="text" name="customer_dob" value="<?php echo $this->input->post('customer_dob'); ?>" class="form-control dropper-default"/>
                                  <span class="text-danger"><?php echo form_error('customer_dob');?></span>
                              </div>
                          </div>
                          <div class="row form-group">
                            <div class="col-md-4">
                                  <label for="customer_dos" class="control-label"><?php echo lang('cli_sex'); ?></label>
                                    <div class="form-radio">
                                          <div class="radio radio-inline">
                                              <label>
                                                  <input type="radio" name="customer_sex" checked <?php $this->input->post('customer_sex')==1 ? 'checked' : '' ?> value="1">
                                                  <i class="helper"></i>Masculino
                                              </label>
                                          </div>
                                          <div class="radio radio-inline">
                                              <label>
                                                  <input type="radio" name="customer_sex" <?php $this->input->post('customer_sex')==2 ? 'checked' : '' ?>  value="2">
                                                  <i class="helper"></i>Femenino
                                              </label>
                                          </div>
                                          <div class="radio radio-inline">
                                              <label>
                                                  <input type="radio" name="customer_sex" <?php $this->input->post('customer_sex')==3 ? 'checked' : '' ?>  value="3">
                                                  <i class="helper"></i>Otros
                                              </label>
                                          </div>
                                  </div>
                              </div>
                          </div>

  <h3 class="sub-title"><?php echo lang('cli_emergency_title'); ?></h3>
    <div class="row form-group">

      <div class="col-md-4">
        <label for="customer_emer_name" class="control-label"><?php echo lang('cli_emergency_name'); ?></label>
          <input type="text" name="customer_emer_name" value="<?php echo $this->input->post('customer_emer_name'); ?>" class="form-control" id="customer_emer_name" />
      </div>
      <div class="col-md-4">
        <label for="customer_emer_tel" class="control-label"><?php echo lang('cli_emergency_tel'); ?></label>
          <input type="text" name="customer_emer_tel" value="<?php echo $this->input->post('customer_emer_tel'); ?>" class="form-control" id="customer_emer_tel" />
      </div>
      <div class="col-md-4">
        <label for="customer_emer_rel" class="control-label"><?php echo lang('cli_emergency_rel'); ?></label>
          <input type="text" name="customer_emer_rel" value="<?php echo $this->input->post('customer_emer_rel'); ?>" class="form-control" id="customer_emer_rel" />
      </div>
      <div class="col-md-8">
        <label for="customer_emer_comments" class="control-label"><?php echo lang('cli_emergency_comments'); ?></label>
        <textarea class="form-control" name="customer_emer_comments" value="<?php echo $this->input->post('customer_emer_comments'); ?>"  rows="2" id="customer_emer_comments" value="<?php echo $this->input->post('customer_emer_comments'); ?>">

        </textarea>

      </div>

    </div>
      <h3 class="sub-title"><?php echo lang('cli_admin_tittle'); ?></h3>
        <div class="row form-group">
          <div class="col-md-4">
            <label for="customer_due_date" class="control-label"><?php echo lang('cli_admin_due_pay_date'); ?></label>
            <div class="form-group">
              <input type="date" name="customer_due_date" value="<?php echo date('Y-m-d'); ?>" class="form-control" id="customer_due_date" />
            </div>
          </div>

          <div class="col-md-4">
            <label for="customer_id_plan" class="control-label"><span class="text-danger">*</span><?php echo lang('cli_admin_plan'); ?></label>
            <div class="form-group">
              <select name="customer_id_plan" class="form-control">
                <?php
                foreach($all_plans_data as $plans_datum)
                {
                  $selected = ($plans_datum['plan_id'] == $this->input->post('customer_id_plan')) ? ' selected="selected"' : "";
                  echo '<option value="'.$plans_datum['plan_id'].'" '.$selected.'>'.$plans_datum['plan_description'].'</option>';
                }
                ?>
              </select>
              <span class="text-danger"><?php echo form_error('customer_id_plan');?></span>
            </div>
          </div>
          </div>
          <div class="form-group">

                <label for="product_image">Imagen</label>
                <div class="kv-avatar">
                    <div class="file-loading">
                        <input id="product_image" name="product_image" type="file">
                    </div>
                </div>
              </div>


      <div class="j-footer">
          <button type="submit" class="btn btn-primary">	<i class="fa fa-check"></i> Guardar</button>
      </div>
</div>
</div>
</div>
</div>

    <?php echo form_close(); ?>

    <script>

    $(document).ready(function() {




      var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="glyphicon glyphicon-tag"></i>' +
            '</button>';
        $("#product_image").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="icofont icofont-folder-open"></i>',
            removeIcon: '<i class="icofont icofont-ui-delete"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
             defaultPreviewContent: '<img src="<?php echo base_url('assets/images/user.png');?>" alt="Your Avatar">',
            layoutTemplates: {main2: '{preview}  {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });

});

$('.dropper-default').dateDropper();
</script>
