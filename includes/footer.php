
    <!--  Checkbox, Select, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>
    <script src="plugins/select2/dist/js/select2.min.js"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
     <!--data tables-->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <!--<script src="assets/js/demo.js"></script>-->

</body>

</html>
<script>

    $(document).ready(function() {
        $('#content').DataTable();
        $('#content_backups').DataTable({
            "order": [[1, "desc"]]
        });
        $('#content_audit').DataTable({
            "order": [[4, "desc"]],

        });
        $('#content_ranking').DataTable({
            "order": [[2, "desc"]]
        });

        $('#content_archives').DataTable({

            "paging": true,
            "lengthChange": false,
            "pageLength": 20,
        });

        $('#searchable').select2();

        //low budget active side nave LOL
        <?php if(isset($activePage)&&strpos($activePage, "Manage")!==false): ?>
        $('#manage').addClass("in");
        <?php endif ?>

        <?php if(isset($activePage)&&strpos($activePage, "Settings")!==false||strpos($activePage, "Archives")!==false): ?>
        $('#settings').addClass("in");
        <?php endif ?>

    });

    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
    });
</script>

<?php
////////////////SESSION UNSET////////////////
$_SESSION['ALERT'] = null; $_SESSION['ALERT'] = [];
////////////////SESSION UNSET////////////////
?>
