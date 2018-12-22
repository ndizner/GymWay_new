<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5>Totale de Ingresos</h5>
                          <span><p>Detalle completo de Ingresos para el periodo seleccionado</p></span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">

                          <?php echo form_open('Reportes/Totales'); ?>
                          <!-- Navigation start -->
                            <nav class="navbar navbar-light bg-faded m-b-30 p-10">
                              <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                <div class="form-group row">


                                      <label class="col-sm-1 col-form-label">Filtrar por Fecha: </label>
                                      <div class=" col-sm-3 input-group input-group-button">
                                        <input type="text" name="products_sales_date" class="form-control" value="<?php echo $this->input->post('products_sales_date'); ?>" />
                                          <span class="input-group-addon" id="basic-addon10">
                                              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Aplicar</button>
                                          </span>
                                           <span class="text-danger">
                                      </div>

                                    </div>
                                </li>
                                <?php echo validation_errors(); ?>
                                <?php echo form_close(); ?>


                              <!-- end of by priority dropdown -->
                              </ul>
                            </nav>
                            <div class="dt-responsive table-responsive">





                                <table  class="table table-striped table-bordered nowrap">
                                  <thead>
                                    <tr>
                                        <th>Concepto</th>
                                        <th>Costo Unitario</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>

                                        <td><b>Venta de Productos</b></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php $subtotal = 0; ?>
                                	<?php foreach($tabla as $p){
                                    $subtotal += $p['products_sales_amount'];
                                    ?>
                                    <tr>
                                      <td><?php echo $p['product_name'] ?></td>
                                      <td><?php echo $p['CostoUnitario']; ?></td>
                                      <td><?php echo $p['Cantidad']; ?></td>
                                      <td><?php echo $p['products_sales_amount']; ?></td>
                                  </tr>
                              	<?php } ?>
                              <tr>
                                  <td></td>
                                  <td></td>
                                  <td><b>Total en Productos Vendidos</td>
                                  <td> <?php echo $subtotal?></b></td>
                              </tr>
                              <tr>

                                  <td><b>Cobro de Planes y Aranceles</b></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>

                              </tr>
                                <?php $subtotal2 = 0; ?>
                              <?php foreach($tabla2 as $d){
                                $subtotal2 += $d['payment_amount'];
                                ?>
                                <tr>
                                  <td><?php echo $d['plan_name'] ?></td>
                                  <td><?php echo $d['CostoUnitario']; ?></td>
                                  <td><?php echo $d['Cantidad']; ?></td>
                                 <td><?php echo $d['payment_amount']; ?></td>
                              </tr>
                            <?php } ?>
                          <tr>
                              <td></td>
                              <td></td>
                              <td><b>Total en Coboro de Planes y Aranceles</td>
                              <td><?php echo $subtotal2?></b></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td></td>
                              <td><b>Total</td>
                              <td> <?php echo $subtotal2 + $subtotal?></b></td>
                          </tr>
                              </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
          $('input[name="products_sales_date"]').daterangepicker();
          </script>
