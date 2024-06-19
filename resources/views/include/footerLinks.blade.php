<script src="https://codingbrackets.com/assets/static/plugins/jquery/jquery.min.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/simplebar/simplebar.min.js"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/apexcharts/apexcharts.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/daterangepicker/moment.min.js"></script>
<script src="https://codingbrackets.com/assets/static/plugins/daterangepicker/daterangepicker.js"></script>
<script>
   jQuery(document).ready(function() {
     jQuery('input[name="dateRange"]').daterangepicker({
     autoUpdateInput: false,
     singleDatePicker: true,
     locale: {
       cancelLabel: 'Clear'
     }
   });
     jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
       jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
     });
     jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
       jQuery(this).val('');
     });
   });
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://codingbrackets.com/assets/static/js/mono.js"></script>
<script src="https://codingbrackets.com/assets/static/js/chart.js"></script>
<script src="https://codingbrackets.com/assets/static/js/map.js"></script>
<script src="https://codingbrackets.com/assets/static/js/custom.js"></script>