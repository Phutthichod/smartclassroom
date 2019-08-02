<!DOCTYPE html>
<html>

<head>
  <!-- ########### header ########### -->
  <?php include("../main/header.php"); ?>
</head>

<body>
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!--start Sidebar -->
    <?php include("sidebaruserposition.php"); ?>
    <!--end Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content" style="background-color: #dbe0ff6b;">
        <!-- start Topbar -->
        <?php include("../main/topbar.php"); ?>
        <!-- end Topbar -->
        <!-- #################### start Content #################### -->
        <div class="container-fluid">
          <div class="container">
            <!-- Page Heading -->
            <div class="row">
              <div class="col-xl-12 col-12 mb-4">
                <div class="card">
                  <div class="card-header card-bg text-primary">
                    <h5>ตำแหน่งของผู้ใช้งาน</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">

              <!-- Pending Requests Card Example -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 card-color-four">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class=" font-weight-bold  text-uppercase mb-1">
                          <h5>ตำแหน่งผู้ใช้งานทั้งหมด</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <h5>1 ตำแหน่ง</h5>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="material-icons icon-big">people</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2 card-color-two" id="adduserpro" style="cursor:pointer">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1 ">
                          <h5>เพิ่มตำแหน่งผู้ใช้งาน</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <h5>+1 ตำแหน่ง</h5>
                        </div>
                      </div>

                      <div class="col-auto">
                        <i class="material-icons icon-big">add_box</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <br>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">รายชื่อผู้ใช้งานในระบบ</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ตำแหน่ง</th>
                        <th>สถานภาพ</th>
                        <th>คำสั่ง</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>อาจารย์</td>
                        <td>บุคคลากรภายใน</td>
                        <td style="text-align:center;">
                          <a href="#" class="btn btn-warning btn-square btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-square btn-sm" data-toggle="modal">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>อาจารย์</td>
                        <td>บุคคลากรภายนอก</td>
                        <td style="text-align:center;">
                          <a href="#" class="btn btn-warning btn-square btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-square btn-sm" data-toggle="modal">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>นิสิต</td>
                        <td>บุคคลากรภายใน</td>
                        <td style="text-align:center;">
                          <a href="#" id="btn_edituserpro" class="btn btn-warning btn-square btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-square btn-sm" data-toggle="modal" id="btn_deluserpro">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- #################################################################################################################  -->

        <!-- The Modal -->
        <div id="modaladduserpro" class="modal fade">

          <form class="modal-dialog modal-lg " action="/action_page.php">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#3E49BB">
                <h4 class="modal-title" style="color:white">เพิ่มตำแหน่งของผู้ใช้งาน</h4>
              </div>
              <div class="modal-body" id="addModalBody">
                <div class="container">

                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อตำแหน่ง : </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อตำแหน่งผู้ใช้" maxlength="8">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>สถานภาพ : </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกสถานภาพ">
                    </div>

                  </div>

                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="return confirm('Are you sure?')" data-dismiss="modal">ยืนยัน</button>
                <button type="button" class="btn btn-danger" onclick="closeForm()" data-dismiss="modal">ยกเลิก</button>
              </div>
            </div>
          </form>

        </div>
        <!-- #################################################################################################################  -->

        <div id="modaledituserpro" class="modal fade">

          <form class="modal-dialog modal-lg " action="/action_page.php">
            <div class="modal-content">
              <div class="modal-header" style="background-color:rgb(238, 204, 11)">
                <h4 class="modal-title" style="color:white">แก้ไขตำแหน่งของผู้ใช้งาน</h4>
              </div>
              <div class="modal-body" id="addModalBody">
                <div class="container">

                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อตำแหน่ง : </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อตำแหน่งผู้ใช้" maxlength="8" value="นิสิต">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>สถานภาพ : </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกสถานภาพ" value="บุคคลภายใน">
                    </div>

                  </div>

                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="return confirm('Are you sure?')" data-dismiss="modal">ยืนยัน</button>
                <button type="button" class="btn btn-danger" onclick="closeForm()" data-dismiss="modal">ยกเลิก</button>
              </div>
            </div>
          </form>

        </div>
        <!-- #################################################################################################################  -->

        <div id="modaldel_userpro" class="modal fade">
          <form action="#" class="modal-dialog modal-lg " method="POST">

            <div class="modal-content">
              <div class="modal-header" style="background-color: rgb(219, 22, 22);">
                <h4 class="modal-title" style="color:white">ยืนยันการลบหลักสูตร</h4>
              </div>
              <div class="modal-body" id="addModalBody">
                <div class="container">
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ตำแหน่ง :</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="namecourse_delete" placeholder="กรุณากรอกชื่อตำแหน่ง" value="นิสิต" disabled=true; required>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>สถานภาพ :</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="namecourse_delete" placeholder="กรุณากรอกสถานภาพ" disabled=true; required>
                    </div>
                  </div>
                </div>
              </div>


              <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="ยืนยัน">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
              </div>
            </div>

          </form>

        </div>
        <!-- #################### end Content #################### -->
      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- ########### footer ########### -->
  <?php include("../main/footer.php"); ?>
</body>

</html>
<script>
  $(".table").DataTable();


  $('#modalRemoveUserType').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })

  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
  });

  $(document).ready(function() {
    console.log("ready!");
    $("#btn_delete").click(function() {
      swal({
        title: "ยืนยันการลบ ",
        icon: "warning",
        buttons: ["ยกเลิก", "ยืนยัน"],
      });
    });
    $("#adduserpro").click(function() {
      $("#modaladduserpro").modal();
    });

    $("#btn_edituserpro").click(function() {
      $("#modaledituserpro").modal();
    });
    $("#btn_deluserpro").click(function() {
      $("#modaldel_userpro").modal();
    });

  });
</script>