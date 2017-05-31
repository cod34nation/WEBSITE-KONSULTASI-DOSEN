
      </div>
      <!-- /page content -->
    </div>


  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="<?=base_url('assets/gentelella/js/bootstrap.min.js')?>"></script>

  <!-- bootstrap progress js -->
  <script src="<?=base_url('assets/gentelella/js/progressbar/bootstrap-progressbar.min.js')?>"></script>
  <script src="<?=base_url('assets/gentelella/js/nicescroll/jquery.nicescroll.min.js')?>"></script>
  <!-- icheck -->
  <script src="<?=base_url('assets/gentelella/js/icheck/icheck.min.js')?>"></script>
  <!-- gauge js -->
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/gauge/gauge.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/gauge/gauge_demo.js')?>"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/moment/moment.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/datepicker/daterangepicker.js')?>"></script>
  <!-- chart js -->
  <script src="<?=base_url('assets/gentelella/js/chartjs/chart.min.js')?>"></script>
  <!-- sparkline -->
  <script src="<?=base_url('assets/gentelella/js/sparkline/jquery.sparkline.min.js')?>"></script>

  <script src="<?=base_url('assets/gentelella/js/custom.js')?>"></script>
  <!-- skycons -->
  <script src="<?=base_url('assets/gentelella/js/skycons/skycons.min.js')?>"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="<?=base_url('assets/gentelella/js/excanvas.min.js')?>"></script><![endif]-->
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/jquery.flot.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/jquery.flot.pie.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/jquery.flot.orderBars.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/jquery.flot.time.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/date.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/jquery.flot.spline.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/jquery.flot.stack.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/curvedLines.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/gentelella/js/flot/jquery.flot.resize.js')?>"></script>
  <!-- pace -->
  <script src="<?=base_url('assets/gentelella/js/pace/pace.min.js')?>"></script>
  <!-- flot -->

<!-- =================== -->
  <!-- input mask -->
  <script src="<?=base_url('assets/gentelella/js/input_mask/jquery.inputmask.js')?>"></script>
  <!-- knob -->
  <script src="<?=base_url('assets/gentelella/js/knob/jquery.knob.min.js')?>"></script>
  <!-- range slider -->
  <script src="<?=base_url('assets/gentelella/js/ion_range/ion.rangeSlider.min.js')?>"></script>
  <!-- color picker -->
  <script src="<?=base_url('assets/gentelella/js/colorpicker/bootstrap-colorpicker.min.js')?>"></script>
  <script src="<?=base_url('assets/gentelella/js/colorpicker/docs.js')?>"></script>

  <!-- image cropping -->
  <script src="<?=base_url('assets/gentelella/js/cropping/cropper.min.js')?>"></script>
  <script src="<?=base_url('assets/gentelella/js/cropping/main2.js')?>"></script>
  <!-- pace -->
  <script src="<?=base_url('assets/gentelella/js/pace/pace.min.js')?>"></script>

  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#single_cal2').daterangepicker({
        "singleDatePicker": true,
        "timePicker": true,
        "timePicker24Hour": true,
        "autoApply": true,
        "linkedCalendars": false,
        "showCustomRangeLabel": false,
        "opens": "left",
        "drops": "up",
        "format": "YYYY-MM-DD HH:MM:SS A"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <!-- /datepicker -->
</body>


</html>