
	<?php echo form_open('Clientes/edit/'.$customers_data['customer_id']); ?>

 <div class="main-body">
     <div class="page-wrapper">
         <div class="page-body">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="card">
                         <div class="card-header">
                           <h5><?php echo lang('title_edit');?></h5>

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
                    							<input type="text" name="customer_dni" value="<?php echo ($this->input->post('customer_dni') ? $this->input->post('customer_dni') : $customers_data['customer_dni']); ?>" class="form-control" id="dni" />
                    							<span class="text-danger"><?php echo form_error('customer_dni');?></span>
                    					</div>
                    					<div class="col-md-4">
                    						<label for="customer_first_name" class="control-label"><span class="text-danger">*</span><?php echo lang('cli_name'); ?></label>
                    							<input type="text" name="customer_first_name" value="<?php echo ($this->input->post('customer_first_name') ? $this->input->post('customer_first_name') : $customers_data['customer_first_name']); ?>" class="form-control" id="customer_first_name" />
                    							<span class="text-danger"><?php echo form_error('customer_first_name');?></span>
                    					</div>
                              <div class="col-md-4">
                    						<label for="customer_last_name" class="control-label"><span class="text-danger">*</span><?php echo lang('cli_last_name'); ?></label>
                    							<input type="text" name="customer_last_name" value="<?php echo ($this->input->post('customer_last_name') ? $this->input->post('customer_last_name') : $customers_data['customer_last_name']); ?>" class="form-control" id="customer_last_name" />
                    							<span class="text-danger"><?php echo form_error('customer_last_name');?></span>
                    					</div>
                          </div>
                          <div class="row form-group">
                              <div class="col-md-4">
                                <label for="customer_email" class="control-label"><?php echo lang('cli_email'); ?></label>
                                  <input type="text" name="customer_email" value="<?php echo ($this->input->post('customer_email') ? $this->input->post('customer_email') : $customers_data['customer_email']); ?>" class="form-control" id="customer_email" />
                                  	<span class="text-danger"><?php echo form_error('customer_email');?></span>
                              </div>
                              <div class="col-md-4">
                                <label for="customer_phone" class="control-label"><?php echo lang('cli_tel'); ?></label>
                                  <input type="text" name="customer_phone" value="<?php echo ($this->input->post('customer_phone') ? $this->input->post('customer_phone') : $customers_data['customer_phone']); ?>" class="form-control" id="customer_phone" />
                                  	<span class="text-danger"><?php echo form_error('customer_phone');?></span>
                              </div>
                              <div class="col-md-4">
                                <label for="customer_dob" class="control-label"><?php echo lang('cli_dob'); ?></label>
                                  <input type="date" name="customer_dob" value="<?php echo $this->input->post('customer_dob') ? $this->input->post('customer_dob') : $customers_data['customer_dob']; ?>" class="form-control" id="#dropper-default"/>
                                  <span class="text-danger"><?php echo form_error('customer_dob');?></span>
                              </div>
                          </div>
                          <div class="row form-group">
                            <div class="col-md-4">
                                  <label for="customer_dos" class="control-label"><?php echo lang('cli_sex'); ?></label>
                                    <div class="form-radio">
                                          <div class="radio radio-inline">
                                              <label>
                                                  <input type="radio" name="customer_sex"  <?php echo $customers_data['customer_sex']==1 ? 'checked' : ''; ?> value="<?php $this->config->item('Masculino') ?>">
                                                  <i class="helper"></i>Masculino
                                              </label>
                                          </div>
                                          <div class="radio radio-inline">
                                              <label>
                                                  <input type="radio" name="customer_sex" <?php echo $customers_data['customer_sex']==2 ? 'checked' : ''; ?> value="<?php $this->config->item('Femenino') ?>">
                                                  <i class="helper"></i>Femenino
                                              </label>
                                          </div>
                                          <div class="radio radio-inline">
                                              <label>
                                                  <input type="radio" name="customer_sex" <?php echo $customers_data['customer_sex']==3 ? 'checked' : ''; ?> value="<?php $this->config->item('Otros') ?>">
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
          <input type="text" name="customer_emer_name" value="<?php echo ($this->input->post('customer_emer_name') ? $this->input->post('customer_emer_name') : $customers_data['customer_emer_name']); ?>" class="form-control" id="customer_emer_name" />
      </div>
      <div class="col-md-4">
        <label for="customer_emer_tel" class="control-label"><?php echo lang('cli_emergency_tel'); ?></label>
          <input type="text" name="customer_emer_tel" value="<?php echo ($this->input->post('customer_emer_tel') ? $this->input->post('customer_emer_tel') : $customers_data['customer_emer_tel']); ?>" class="form-control" id="customer_emer_tel" />
      </div>
      <div class="col-md-4">
        <label for="customer_emer_rel" class="control-label"><?php echo lang('cli_emergency_rel'); ?></label>
          <input type="text" name="customer_emer_rel" value="<?php echo  ($this->input->post('customer_emer_rel') ? $this->input->post('customer_emer_rel') : $customers_data['customer_emer_rel']); ?>" class="form-control" id="customer_emer_rel" />
      </div>
      <div class="col-md-8">
        <label for="customer_emer_comments" class="control-label"><?php echo lang('cli_emergency_comments'); ?></label>
        <textarea class="form-control" name="customer_emer_comments"  rows="2" id="customer_emer_comments">
					<?php echo ($this->input->post('customer_emer_comments') ? $this->input->post('customer_emer_comments') : $customers_data['customer_emer_comments']);?>

        </textarea>

      </div>

    </div>
      <h3 class="sub-title"><?php echo lang('cli_admin_tittle'); ?></h3>
        <div class="row form-group">
          <div class="col-md-4">
            <label for="customer_due_date" class="control-label"><?php echo lang('cli_admin_due_pay_date'); ?></label>
            <div class="form-group">
              <input type="date" name="customer_due_date" value="<?php echo $this->input->post('customer_due_date') ? $this->input->post('customer_due_date') : date('Y-m-d',$customers_data['customer_due_date']);?>" class="form-control" id="customer_due_date" />
            </div>
          </div>

          <div class="col-md-4">
            <label for="customer_id_plan" class="control-label"><span class="text-danger">*</span><?php echo lang('cli_admin_plan'); ?></label>
            <div class="form-group">
              <select name="customer_id_plan" class="form-control">
                <?php
                foreach($all_plans_data as $plans_datum)
								{
									$selected = ($plans_datum['plan_id'] == $customers_data['customer_id_plan']) ? ' selected="selected"' : "";

									echo '<option value="'.$plans_datum['plan_id'].'" '.$selected.'>'.$plans_datum['plan_description'].'</option>';
								}
                ?>
              </select>
              <span class="text-danger"><?php echo form_error('customer_id_plan');?></span>
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
