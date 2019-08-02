<?php
include('../header.php');
?>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/css/fileinput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Begin Page Content -->

        <div class="container-fluid" id="app">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-12 mb-4">
                        <div class="card">
                            <div class="card-header card-bg text-primary">
                                อุปกรณ์
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-12 mb-4">
                        <div class="card border-left-primary card-color-three shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold  text-uppercase mb-1">อุปกรณ์</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">25 ชิ้น</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="material-icons icon-big">library_books</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-12 mb-4">
                        <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addtool" style="cursor:pointer;">

                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold  text-uppercase mb-1">เพิ่มอุปกรณ์ใหม่
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">+1 ชิ้น</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="material-icons icon-big">add_circle</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header card-header-table py-3 text-primary">
                        <h6 class="m-0 font-weight-bold">รายชื่อห้องในระบบ</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="row">
                            </div>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <thead>
                                    <tr>
                                        <th>ชื่อ</th>
                                        <th>ชื่อย่อ</th>
                                        <th>หมายเลข</th>
                                        <th>ชนิด</th>
                                        <th>ที่อยู่</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a = array("Volvo", "BMW", "Toyota , Volvo", "BMW", "Toyota");
                                    for ($i = 25; $i >= 0; $i--) {
                                        ?>
                                        <tr>
                                            <td><?php echo $a[0]; ?></td>
                                            <td>Pongwisanu Hootip</td>
                                            <td>6120502734</td>
                                            <td>Pongwisanu Hootip</td>
                                            <td>Pongwisanu Hootip</td>
                                            <td style="text-align:center;">
                                                <button type="button" id="btn_info" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>

                                                <button type="button" id="btn_delete" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                                <button type="button" id="btn_log" class="btn btn btn-info btn-sm"><i class="fas fa-file-alt"></i></button>

                                                </a>

                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <!-- start Model -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">เพิ่มอุปกรณ์</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">

                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-4"><label class="mr-sm-2">ชื่อย่ออุปกรณ์:</label></div>
                                                <div class="col-sm-8"> <input class="form-control mb-2 mr-sm-2" placeholder=""></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"><label class="mr-sm-2">หมายเลขอุปกรณ์:</label></div>
                                                <div class="col-sm-8"><input class="form-control mb-2 mr-sm-2" placeholder=""></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"> <label class="mr-sm-2">ชื่ออุปกรณ์:</label></div>
                                                <div class="col-sm-8"><input class="form-control mb-2 mr-sm-2" placeholder=""></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"><label class="mr-sm-2">ชนิด : </label>
                                                </div>
                                                <div class="col-sm-8"><button type="button" class="btn btn-primary form-control mb-2 mr-sm-2" data-toggle="modal" data-target="#ex">
                                                        เลือกชนิดอุปกรณ์
                                                    </button></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4"><label class="mr-sm-2">อัพโหลดภาพ :
                                                    </label></div>
                                                <div class="col-sm-8"> <button type="button" class="btn btn-primary form-control mb-2 mr-sm-2" data-toggle="modal" data-target="#uploadmodal">
                                                        เลือกภาพที่จะอัพโหลด
                                                    </button></div>
                                                <div class="form-group"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Model -->

                <!-- <div class="card-body">
                                        
                        <div class="accordion basic-accordion" id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                        <i class="card-icon mdi mdi-checkbox-marked-circle-outline"></i>
                                        <i class="material-icons">perm_contact_calendar</i>
                                        How can I pay for an order I placed?
                                    </a>
                                    </h6>
                                </div>
                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid rounded" src="https://placehold.it/200x150" alt="image"> </div>
                                            <div class="col-md-9">
                                            <p>You can pay for the product you bit cards, or via online banking. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            
                    </div> -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <div class="modal" id="ex">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">ชนิดอุปกรณ์</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol class="list-group">
                        <?php
                        for ($i = 20; $i > 0; $i--) {
                            ?>
                            <li class="list-group-item list-group-item-action" value="First">First item</li>
                            <li class="list-group-item list-group-item-action" value="First">Second item</li>
                            <li class="list-group-item list-group-item-action" value="First">Third item</li>
                        <?php } ?>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button id="bn" type="button" class="btn btn-secondary" Close</button> <h5 class="modal-title">อัพโหลดภาพอุปกรณ์</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">

                        <div class="main-section">


                            <div class="form-group">

                                <div class="file-loading">

                                    <input id="file-1" type="file" name="file" onchange="handleFiles(this.files)" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- End of Page Wrapper -->
    <?php include("../footer.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/js/fileinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        $('#file-1').fileinput({
            theme: 'fa',
            uploadUrl: "upload.php",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val()
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize: 2000,
            maxFileNum: 8,
            slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>
    <script>
        $('#dataTable').dataTable({
            "oLanguage": {
                sLengthMenu: "แสดง _MENU_ แถว",
                sSearch: "<span>ค้นหา </span> _INPUT_",
                sInfo: "กำลังแสดง _START_ ถึง _END_ จาก _TOTAL_ แถว", //search
                oPaginate: {
                    sFirst: "First",
                    sLast: "Last",
                    sNext: "ต่อไป",
                    sPrevious: "ก่อนหน้า"
                },
            }
        });
    </script>
    <?php $a = '1'; //ตัวแปร php
    ?>

    <script type="text/javascript">
        x = <?php json_encode($a); ?>;
        x = x * 20;
        $.post('tools.php', {
            data: x
        });
    </script>
    <script>

    </script>
    <script>
        // $( document ).ready(function() {

        //     $('#addUser').click(function(){
        //         console.log('fffff')
        //     });
        // });
        $(document).ready(function() {
            $(".table").DataTable();
            $("#file-1").change(function() {
                console.log("ssss" + $(this).val())
                //alert( "Handler for .change() called." );
            });
            let type = "";
            $("#bn").click(function() {
                console.log($("#file-1").val());

            });
            $(".kv-preview-thumb").click(function() {
                console.log("dddddd" + $(this).val());

            });
            $('#file-1').fileinput(function() {
                console.log("saadas");
            });
            $("#btn_delete").click(function() {
                swal({
                    title: "ยืนยันการลบ 02204223 Electronics Fundamentals",
                    icon: "warning",
                    buttons: ["ยืนยัน", "ยกเลิก"],
                });
            });
            $("#addtool").click(function() {
                $("#exampleModalScrollableTitle").text("เพิ่มอุปกรณ์");
                $("#exampleModalScrollable").modal();
            });
            $("#btn_info").click(function() {
                $("#exampleModalScrollableTitle").text("แก้ไขอุปกรณ์");

                $("#exampleModalScrollable").modal();
            });
            $("li").click(function() {
                type = "ssss" + $(this).attr("value");
                console.log(type);
            });
        });
    </script>