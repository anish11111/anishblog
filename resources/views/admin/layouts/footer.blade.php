<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2016-{{Carbon\carbon::now()->year}} <a href="#">Some Comany Names</a>.</strong> All rights
  reserved.
</footer>
<!-- jQuery 3 -->
<script src="{{ asset('admin/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/jquery-ui/jquery-ui.min.js')  }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('admin/raphael/raphael.min.js')  }}"></script>
<script src="{{ asset('admin/morris.js/morris.min.js')  }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/jquery-sparkline/dist/jquery.sparkline.min.js')  }}"></script>
<!-- jvectormap -->
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')  }}"></script>
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')  }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/jquery-knob/dist/jquery.knob.min.js')  }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/moment/min/moment.min.js')  }}"></script>
<script src="{{ asset('admin/bootstrap-daterangepicker/daterangepicker.js')  }}"></script>
<!-- datepicker -->
<script src="{{ asset('admin/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')  }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')  }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('admin/jquery-slimscroll/jquery.slimscroll.min.js')  }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/fastclick/lib/fastclick.js')  }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
@section('footerSection')
@show