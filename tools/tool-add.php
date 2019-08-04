<!DOCTYPE html>
<html>

<head>
    <?php
    include('../main/header.php');
    ?>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/css/fileinput.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style-edit-1.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include('sidebartool.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #ffdbfb6b;">

                <!-- Topbar -->
                <?php
                include('../main/topbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <!--
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header card-bg font-main">
                                        EDIT TOOLS
                                    </div>
                                </div>
                            </div>
                        </div>
-->

                <!-- DataTales Example -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header card-header-table py-3">
                            <h6 class="m-0 font-weight-bold">เพิ่มอุปกรณ์</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">

                                <form action="tool-add-upload.php">
                                    <div class="form-group-m">
                                        <label>หมายเลขอุปกรณ์ : </label>
                                        <input class="form-control" id="email">

                                    </div>
                                    <div class="form-group-m">
                                        <label>ชื่ออุปกรณ์ :</label>
                                        <input class="form-control" id="pwd">
                                    </div>
                                    <div class="form-group-m">
                                        <label>ชื่อย่ออุปกรณ์ :</label>
                                        <input class="form-control" id="pwd" placeholder="ssss">
                                    </div>
                                    <div class="form-group-m">
                                        <label>ห้องที่อยู่ของอุปกรณ์: </label>
                                        <div>
                                            <label> ชนิดของอุปกรณ์ </label>
                                            <button type="button" class="btn btn-primary btntype" data-toggle="modal"
                                                data-target="#exampleModalScrollable">
                                                เลือกห้องที่อยู่
                                            </button>
                                        </div>

                                    </div>
                                    <div class="grid-button-page2">
                                        <!-- <button type="submit" class="btn btn-primary  btn-submit">next</button> -->

                                        <a class="btn-submit" href="tool.php"><button type="submit"
                                                class="btn btn-primary  ">ต่อไป</button></a>
                                        <a href="tool.php" button type="" class="btn btn-danger "> ยกเลิก</button></a>
                                    </div>


                                </form>


                            </div>
                        </div>
                    </div>

                </div>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="pin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="list-group">
                                    <?php 
                                for($i = 20 ; $i >0 ;$i--)
                                {
                                ?>
                                    <a href="#" class="list-group-item list-group-item-action">First item</a>
                                    <a href="#" class="list-group-item list-group-item-action">Second item</a>
                                    <a href="#" class="list-group-item list-group-item-action">Third item</a>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">

                                    <div class="main-section">


                                        <div class="form-group">

                                            <div class="file-loading">

                                                <input id="file-1" type="file" name="file" multiple class="file"
                                                    data-overwrite-initial="false" data-min-file-count="1">

                                            </div>

                                        </div>

                                    </div>

                                </div>
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
    <!-- End of Page Wrapper -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/js/fileinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
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
</body>

</html>





<script>
<?php
        include('../src/js/datatable.js');
        ?>
// $( document ).ready(function() {

//     $('#addUser').click(function(){
//         console.log('fffff')
//     });
// });
/*
$(document).ready(function () {
    console.log("ready!");
    $("#btn_delete").click(function () {
        swal({
            title: "ยืนยันการลบ 02204223 Electronics Fundamentals",
            icon: "warning",
            buttons: ["ยกเลิก", "ยืนยัน"],
        });
    });
    $("#addtool").click(function () {
        $("#modaladdtool").modal();
    });

});
*/
function confirm_click() {
    return confirm("Are you sure ?");
}
</script>
<?php include('../main/footer.php') ?>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>
</body>


</html>