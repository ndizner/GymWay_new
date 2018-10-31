

<div align=center><h1><?php echo lang('edit_user_heading');?></h1></div>
<hr>
<p><?php echo lang('edit_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

<fieldset>
<div class="col-xs-3"><p>
    <label for="ex1">Id:</label>
      <?php echo form_input($id);?>
       <small class="text-muted">Los ID los Genera Automaticamente el Sistema y no se pueden modificar.</small>
</p> </div>

<div class="col-xs-3"><p>
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
</p> </div>

<div class="col-xs-3"><p>
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
</p> </div>

<div class="col-xs-3"><p>
            <?php echo lang('edit_user_username_label', 'username');?> <br />
            <?php echo form_input($identity);?>
</p> </div>
</fieldset>
<fieldset>
<div class="col-xs-3"><p>
            <?php echo lang('edit_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
</p> </div>
<div class="col-xs-3"><p>
            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
</p> </div>
</fieldset>
<br>
<fieldset>
<div class="col-xs-3"><p>
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
</p> </div>

<div class="col-xs-3"><p>
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
</p> </div>
</fieldset>
      <?php if ($this->ion_auth->is_admin()): ?>

        <div align="left">


          <h3><?php echo lang('edit_user_groups_heading');?></h3>
          <?php foreach ($groups as $group):?>
                <div class="checkbox"> <label>
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['description'],ENT_QUOTES,'UTF-8');?>
            </label> </div>
          <?php endforeach?>

      <?php endif ?>
      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
<div class="col-xs-3"><p>
      <?php echo form_submit('submit', 'Guardar',"class='btn btn-success'");?>
</p> </div>
<?php echo form_close();?>
