</body>

<script src="{{asset('assets')}}/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{asset('assets')}}/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{asset('assets')}}/js/core/bootstrap.min.js" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/plugins/bootstrap-switch.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<script src="{{asset('assets')}}/js/plugins/chartist.min.js"></script>

<script src="{{asset('assets')}}/js/plugins/bootstrap-notify.js"></script>

<script src="{{asset('assets')}}/js/plugins/jquery.sharrre.js"></script>

<script src="{{asset('assets')}}/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/plugins/moment.min.js"></script>

<script src="{{asset('assets')}}/js/plugins/bootstrap-datetimepicker.js"></script>

<script src="{{asset('assets')}}/js/plugins/sweetalert2.min.js" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/plugins/nouislider.js" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/plugins/jquery.validate.min.js" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/plugins/jquery.bootstrap-wizard.js"></script>

<script src="{{asset('assets')}}/js/plugins/bootstrap-table.js"></script>

<script src="{{asset('assets')}}/js/plugins/jquery.dataTables.min.js"></script>

<script src="{{asset('assets')}}/js/plugins/fullcalendar.min.js"></script>

<script src="{{asset('assets')}}/js/light-bootstrap-dashboard790f.js?v=2.0.1" type="text/javascript"></script>

<script src="{{asset('assets')}}/js/demo.js"></script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

        demo.initVectorMap();

    });
</script> --}}

<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 15:19:11 GMT -->
</html>
