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
    <?php include("sidebarprofile.php"); ?>
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
                    <h5>ผู้ใช้งาน</h5>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2 card-color-three">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class=" font-weight-bold text-uppercase mb-1">
                          <h5>จำนวนผู้ใช้งาน</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <h5>1 คน</h5>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="material-icons icon-big">person</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 card-color-one">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class=" font-weight-bold text-uppercase mb-1">
                          <h5>จำนวนตำแหน่ง</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <h5>1 ตำแหน่ง</h5>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="material-icons icon-big">person</i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2 card-color-two" id="adduser" style="cursor:pointer">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1 ">
                          <h5>เพิ่มผู้ใช้งาน</h5>
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <h5>+1 ผู้ใช้งาน</h5>
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
                        <th style="text-align:center;">ชื่อผู้ใช้</th>
                        <th style="text-align:center;">ชื่อ-นามสกุล</th>
                        <th style="text-align:center;">สถานะ</th>
                        <th style="text-align:center;">สิทธิ์การเข้าใช้งาน</th>
                        <th style="text-align:center;">จัดการ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="text-align:center;">pongwisanu</td>
                        <td style="text-align:center;">Pongwisanu Hootip</td>
                        <td style="text-align:center;">online</td>
                        <td style="text-align:center;">
                          <a class="btn btn-success btn-square btn-sm active" data-toggle="tooltip" title="Admintrator">
                            <b>A
                          </a>
                          <a class="btn btn-info btn-square btn-sm active" data-toggle="tooltip" title="Teacher">
                            <b>T
                          </a>
                          <a class="btn btn-warning btn-square btn-sm active" data-toggle="tooltip" title="Outsider">
                            <b>O
                          </a>
                          <a class="btn btn-danger  btn-square btn-sm active" data-toggle="tooltip" title="Student">
                            <b>S
                          </a>
                        </td>
                        <td style="text-align:center;">
                          <a href="profile.php" class="btn btn-success btn-square btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="userblock.php" class="btn btn-warning btn-square btn-sm">
                            <i class="fas fa-window-close"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-square btn-sm" data-toggle="modal" id="deluser">
                            <i class="fas fa-trash"></i>
                          </a>
                          <a href="userlog_login.php" class="btn btn-warning btn-square btn-sm">
                            <i class="fas fa-user-circle"></i>
                          </a>
                          <a href="userlog_reserve.php" class="btn btn-info btn-square btn-sm">
                            <i class="fas fa-home"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:center;">pongwisanu1</td>
                        <td style="text-align:center;">Pongwisanu Hootip</td>
                        <td style="text-align:center;">offline</td>
                        <td style="text-align:center;">
                          <a class="btn btn-success btn-square btn-sm active" data-toggle="tooltip" title="Admintrator">
                            <b>A
                          </a>
                          <a class="btn btn-secondary btn-square btn-sm active" data-toggle="tooltip" title="Teacher">
                            <b>T
                          </a>
                          <a class="btn btn-secondary btn-square btn-sm active" data-toggle="tooltip" title="Outsider">
                            <b>O
                          </a>
                          <a class="btn btn-secondary  btn-square btn-sm active" data-toggle="tooltip" title="Student">
                            <b>S
                          </a>
                        </td>
                        <td style="text-align:center;">
                          <a href="#" class="btn btn-success btn-square btn-sm">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="#" class="btn btn-warning btn-square btn-sm" data-toggle="modal" id="btn_delete">
                            <i class="fas fa-window-close"></i>
                          </a>
                          <a href="#" class="btn btn-danger btn-square btn-sm" data-toggle="modal" id="btn_delete">
                            <i class="fas fa-trash"></i>
                          </a>
                          <a href="userlog_login.html" class="btn btn-warning btn-square btn-sm">
                            <i class="fas fa-user-circle"></i>
                          </a>
                          <a href="userlog_reserve.html" class="btn btn-info btn-square btn-sm">
                            <i class="fas fa-home"></i>
                          </a></td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- #################################################################################################################  -->

        <div id="modaladduser" class="modal fade">

          <form class="modal-dialog modal-lg " action="/action_page.php">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#3E49BB">
                <h4 class="modal-title" style="color:white">เพิ่มผู้ใช้งาน</h4>
              </div>
              <div class="modal-body" id="addModalBody">
                <div class="container">

                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อผู้ใช้ : </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อผู้ใช้" maxlength="8">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อ-นามสกุล: </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อ-นามสกุล">
                    </div>

                  </div>
                  <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                      <span>สิทธิ์การเข้าถึง</span>
                    </div>
                    <div class="col-xl-9 col-12">
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">ผู้บริหารระบบ</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">อาจาร์ย+เจ้าหน้าที่</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">นิสิต</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">บุคลลภายนอก</label>
                      </div>
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

        <div id="modaldel_user" class="modal fade">

          <form class="modal-dialog modal-lg" method="post" action="del_room.php">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#fa3636">
                <h4 class="modal-title" style="color:white">ยืนยันการลบ</h4>
              </div>
              <div class="modal-body" id="addModalBody">
                <input type="hidden" name="id_r_de" id="id_r_de">
                <div class="container">
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อผู้ใช้ : </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อผู้ใช้" maxlength="8" value="pongwisanu" disabled>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อ-นามสกุล: </span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อ-นามสกุล" value="Pongwisanu Hootip" disabled>
                    </div>

                  </div>
                  <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                      <span>สิทธิ์การเข้าถึง</span>
                    </div>
                    <div class="col-xl-9 col-12">
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label" for="exampleCheck1">ผู้บริหารระบบ</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label" for="exampleCheck1">อาจาร์ย+เจ้าหน้าที่</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label" for="exampleCheck1">นิสิต</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label" for="exampleCheck1">บุคลลภายนอก</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
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
    $("#adduser").click(function() {
      $("#modaladduser").modal();
    });
    $("#deluser").click(function() {
      $("#modaldel_user").modal();
    });

  });
</script>