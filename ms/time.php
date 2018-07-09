<!DOCTYPE html>
<?php
include("dbconfig.php");
require_once('att2000/config/database.php');


function convertType($value)
{
    if ($value == 'I') {
        return 'เข้า';
    } else if ($value == 'O') {
        return 'ออก';
    } else {
        return 'error';
    }
}

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>ประวัติการทำงาน</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

<?php
include("header_lv2.php");
?>
       
    <!-- container section start -->
  <section id="container" class="">
</head>

<body>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>


<!-- container section start -->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div id="" class="tab-pane">
            <h1>ตารางเวลาการทำงาน</h1><br><br>
            <div class="col-lg-offset-2 col-lg-3 pull-right">
                <a href="http://project.test/ms/att2000" class="btn btn-success">
                    อัพเดต
                </a>

            </div>
            <table class="table table-bordered" id="example11">
                <thead>
                <tr>
                    <th>วันที่/เวลา</th>
                    <th>ชื่อ</th>
                    <th>เข้า</th>
                    <th>ออก</th>

                </tr>
                </thead>
                <tbody>
                <?php
                $records = $mysql_conn->table('times2')->join('staff', 'staff_ID', 'staff_ID')->findAll();
                foreach ($records as $record) { ?>
                    <tr>
                        <td><?= $record['date'] ?></td>
                        <td><?= $record['staff_name'] ?></td>
                        <td><?= $record['time_in'] ?></td>
                        <td><?= $record['time_out'] ?></td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>

        </div>
    </section>
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!-- jquery ui -->
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom checkbox & radio-->
<script type="text/javascript" src="js/ga.js"></script>
<!--custom switch-->
<script src="js/bootstrap-switch.js"></script>
<!--custom tagsinput-->
<script src="js/jquery.tagsinput.js"></script>

<!-- modal sweetalert-->
<script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>


<!-- datatableeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->

<!-- นำเข้า  CSS จาก dataTables -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<!-- นำเข้า  Javascript  จาก   dataTables -->

<script type="text/javascript" language="javascript"
        src="js\jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"
        src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript"
        src="js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript"
        src="js/jszip.min.js"></script>
<script type="text/javascript" language="javascript"
        src="js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript"
        src="js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="js/vfs_fonts.js"></script>
<!-- datatableeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
<!-- ck editor -->
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<!-- custom form component script for this page-->
<script src="js/form-component.js"></script>
<!-- custome script for all page -->
<script src="js/scripts.js"></script>


<script>
    $(document).ready(function () {
        $('#example11').DataTable({
            "order": [[0, "asc"]],
            dom: 'lBfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ],
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "ทั้งหมด"]],
            "oLanguage": {
                "sSearch": "คำค้นหา: ",
                "sZeroRecords": "ไม่มีข้อมูลที่คุณต้องการ",
                "sLengthMenu": 'Display <select>' +
                '<option value="5">5</option>' +
                '<option value="10">10</option>' +
                '<option value="25">25</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">ทั้งหมด</option>' +
                '</select> records',
                "sLengthMenu": "แสดง _MENU_ แถวในหน้า&nbsp;&nbsp;&nbsp;ออกรายงานเป็น:&nbsp;&nbsp;&nbsp;",
                "oPaginate": {
                    "sNext": "หน้าถัดไป",
                    "sPrevious": "ก่อนหน้านี้"
                },
                "sInfo": "มีข้อมูลทั้งหมด _TOTAL_ ข้อมูล แสดงข้อมูลตั้งแต่ (_START_ จนถึง _END_)"
            },
            buttons: [
                {extend: 'copy', text: 'คัดลอกเป็นข้อความ'},
                {extend: 'excel', text: 'Excel File'},
                {extend: 'pdf', text: 'PDF File'},
                {extend: 'print', text: 'สั่งพิมพ์ข้อมูลในตาราง'},
            ]
        });
    });
</script>
<?php if (@$_GET['removed'] == 1) {
    echo "<script>
  swal({
    title: 'ลบเสร็จสิ้น',
    text: 'You clicked the button!',
    icon: 'success',
    button: 'ตกลง',
  });
  </script>";

} else {
    if (@$_GET['removed'] == 2) {
        echo "<script>
    swal({
      title: 'เพิ่มเสร็จสิ้น',
      text: 'You clicked the button!',
      icon: 'success',
      button: 'ตกลง',
    });
    </script>";

    }
} ?>
</body>

</html>
