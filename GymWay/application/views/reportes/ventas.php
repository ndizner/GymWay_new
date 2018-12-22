<!-- google chart -->
  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

  <div class="row col-md-12 col-lg-12">
  <div class="col-md-8 col-lg-8">
      <div class="card">
          <div class="card-header">
              <h5>Ingresos por Plan</h5>
              <span>Detalle Ingresos y cantidad de suscripciones por plan</span>
              <div class="card-header-right">
                  <i class="icofont icofont-rounded-down"></i>
                  <i class="icofont icofont-refresh"></i>
                  <i class="icofont icofont-close-circled"></i>
              </div>
          </div>

          <div class=" col-md-11 col-lg-11 card-block">
            <div id="chart_div" style="width: 100%; height: 300px;"></div>

          </div>

      </div>
  </div>
  <!-- SITE VISIT CHART Ends -->
  <!-- Search Box card start -->

                         <div class=" col-md-4 col-lg-4 card">
                            <?php echo form_open('Reportes/Ventas'); ?>
                             <div class="card-header">
                                 <h5 class="card-header-text">Criterios de Busqueda</h5></div>
                             <div class="card-block p-t-10">
                                 <div class="task-right">
                                     <div class="taskboard-right-revision user-box">
                                         <div class="media">
                                             <div class="media-left">
                                                 <a class="btn btn-outline-primary btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-gears"></i>
                                             </a>
                                             </div>
                                             <div class="media-body">

                                               <label class="control-label">Filtrar por Productos</label>
                                               <select class="js-example-basic-multiple"  name="product_id[]" multiple="multiple">

                                                     <!-- <select  class="form-control " multiple="multiple"> -->
                                                       <?php
                                                       foreach($products_data as $prod)


                                                       {
                                                         //$selected = ($plans_datum['plan_id'] == $this->input->post('customer_id_plan')) ? ' selected="selected"' : "";
		                                                       $selected = (in_array($prod['product_id'], $product_id)) ? ' selected="selected"' : "";
                                                         echo '<option value="'.$prod['product_id'].'" '.$selected.'>'.$prod['product_name'].'</option>';
                                                       }
                                                       ?>
                                                     </select>
                                               <span class="text-danger"><?php echo form_error('customer_id_plan[]');?></span>

                                             </div>
                                             <!-- end of media body -->
                                        </div>
                                         <hr>

                                         <div class="media">
                                             <div class="media-left">
                                                 <a class="btn btn-outline-primary btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-gears"></i>
                                             </a>
                                             </div>
                                             <div class="media-body">

                                               <label class="control-label">Filtrar por Fecha</label>

                                               <input type="text" name="products_sales_date" class="form-control" value="<?php echo $this->input->post('products_sales_date'); ?>" />
                                               <span class="text-danger"><?php echo form_error('products_sales_date');?></span>


                                             </div>
                                             <!-- end of media body -->
                                         </div>
                                         <hr>
                                         <div class="media">
                                             <div class="media-left">

                                             </div>
                                             <div class="media-body">

                                               <button type="submit" class="btn btn-success">
                                                 <i class="fa fa-check"></i> Buscar
                                               </button>

                                             </div>
                                             <!-- end of media body -->
                                         </div>



                                     </div>

                                     <!-- end of task-right-revision -->
                                 </div>
  <?php echo form_close(); ?>

                                 <!-- end of sidebar-right -->
                             </div>

                             <!-- end of card-block -->
                         </div>
                         <!-- Search Box card end -->


  </div>
  <div class="col-md-8 col-lg-8">
      <div class="card">
          <div class="card-header">
              <h5>Detalles</h5>
              <span>Detalle de ingresos para el periodo seleccionado </span>
              <div class="card-header-right">
                  <i class="icofont icofont-rounded-down"></i>
                  <i class="icofont icofont-refresh"></i>
                  <i class="icofont icofont-close-circled"></i>
              </div>
          </div>

          <div class="card-block">
              <div class="row">
                <table id="ingresos" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                          <th>Nombre del Plan</th>
                          <th>Costo Unitario</th>
                          <th>Cantidad de Pagos Recibidos</th>
                          <th>Subtotal</th>

                        </tr>
                  </thead>
                  <tbody>
                      <?php
                      $total = 0;
                      foreach($tabla as $dato){
                        $total += $dato['products_sales_amount'];
                        ?>
                          <tr>
                              <td><?php echo $dato['product_name'] ?></td>
                              <td><?php echo $dato['CostoUnitario']; ?></td>
                              <td><?php echo $dato['Cantidad']; ?></td>
                             <td><?php echo $dato['products_sales_amount']; ?></td>
                          </tr>
                    <?php } ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Total:</td>
                        <td><?php echo $total; ?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
          </div>


      </div>
  </div>




<script>
$('input[name="products_sales_date"]').daterangepicker();

var datos = <?php echo $datos ?>;
var tabla = [];
tabla.push(['Productos', 'Ingresos por Producto','Cantidad de Productos vendidos']);

for (var i = 0; i < datos.length; i++) {
  tabla.push([datos[i].product_name, parseInt(datos[i].CostoUnitarioVenta), parseInt(datos[i].Cantidad)])
}

google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable(tabla);

        var options = {
          width: '75%',
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              distance: {label: 'Cantidad de Productos Vendidos'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'Ingresos por Producto'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('chart_div'));
      chart.draw(data, options);
    };


google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

  var datos = <?php echo $datos ?>;
  var tabla = [];
  tabla.push(['Planes', 'Ingresos por Plan','Cantidad de Pagos recibidos']);

  for (var i = 0; i < datos.length; i++) {
    tabla.push([datos[i].plan_name, parseInt(datos[i].payment_amount), parseInt(datos[i].Cantidad)])
  }


      var data = google.visualization.arrayToDataTable(tabla);

      var options = {
        title: 'Ingresos Por Plan',
        chartArea: {width: '75%'},
        hAxis: {
          title: 'Ingreso Total:' + '15222',
          minValue: 0
        },
        vAxis: {
          title: 'Planes'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById(''));

      chart.draw(data, options);
    }
</script>
