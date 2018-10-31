
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!-- SITE VISIT CHART start -->
 <div class="col-md-12 col-lg-6">
     <div class="card">
         <div class="card-header">
             <h5>SITE VISIT CHART</h5>
             <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
             <div class="card-header-right">
                 <i class="icofont icofont-rounded-down"></i>
                 <i class="icofont icofont-refresh"></i>
                 <i class="icofont icofont-close-circled"></i>
             </div>
         </div>
         <div class="card-block">
             <div id="myfirstchart"></div>
         </div>
     </div>
 </div>
 <!-- SITE VISIT CHART Ends -->


<script>
new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>
