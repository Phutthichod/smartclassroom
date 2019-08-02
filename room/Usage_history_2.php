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
    <?php include("../main/sidebar.php"); ?>
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
            <div class="row">
              <div class="col-xl-12 col-12 mb-4">
                <div class="card">
                  <div class="card-header card-bg text-primary">
                    ประวัติ
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-3 col-12 mb-4">
                <a href='Usage_history.php' style="text-decoration: none">
                  <div class="card border-left-primary card-color-three shadow h-100 py-2" id="addsub" style="cursor:pointer;">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="font-weight-bold  text-uppercase mb-1">ประวัติการเข้าใช้งาน</div>
                        </div>
                        <div class="col-auto">
                          <i class="material-icons icon-big">library_books</i>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-3 col-12 mb-4">
                <a href='Usage_history_2.php' style="text-decoration: none">
                  <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addsub" style="cursor:pointer;">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="font-weight-bold  text-uppercase mb-1">ประวัติการจอง</div>
                        </div>
                        <div class="col-auto">
                          <i class="material-icons icon-big">library_books</i>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- DataTales RoomType -->
            <div class="card shadow mb-4">
              <div class="card-header card-header-table py-3">
                <h6 class="m-0 font-weight-bold text-primary">ประวัติการจอง
                  <button type="button" id="btn_pass" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm right">ตาราง</button>
                  <button type="button" id="btn_pass" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm right"> ปฎิทิน</button>
                </h6>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>วันที่เริ่มจอง</th>
                        <th>สิ้นสุด</th>
                        <th>ระยะเวลา</th>
                        <th>หมายเลขห้อง</th>
                        <th>ซื่อผู้จอง</th>
                        <th>หมายเหตุ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>01/08/2562</td>
                        <td>02/08/2562</td>
                        <td>1 วัน</td>
                        <td>E804</td>
                        <td>น.ส สวยเด่น เป็นสง่า</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>03/08/2562</td>
                        <td>04/08/2562</td>
                        <td>1 วัน</td>
                        <td>E804</td>
                        <td>น.ส สวยเด่น เป็นสง่า</td>
                        <td>-</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="modal-footer">
                <a href="room.php"> <button type="button" class="btn btn-danger" data-dismiss="modal">กดกลับ</button></a>
              </div>
            </div>

          </div>


        </div>

        <!-- The Modal -->
        <!-- ################################################################################################################# -->
        <div id="modaladdroom" class="modal fade">

          <form class="modal-dialog modal-lg " action="/action_page.php">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#3E49BB">
                <h4 class="modal-title" style="color:white">เพิ่มชนิดห้อง</h4>
              </div>
              <div class="modal-body" id="addModalBody">
                <div class="container">

                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชนิดห้อง:</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกหลักสูตร" maxlength="8">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อย่อ:</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกคณะ" maxlength="8">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>รายละเอียด:</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกคณะ" maxlength="8">
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
                <button type="button" class="btn btn-danger" onclick="closeForm()" data-dismiss="modal">ยกเลิก</button>
              </div>
            </div>
          </form>

        </div>
        <!-- #################################################################################################################  -->
        <div id="modaledit_room" class="modal fade">

          <form class="modal-dialog modal-lg " action="/action_page.php">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#3E49BB">
                <h4 class="modal-title" style="color:white">แก้ไขชนิดห้อง</h4>
              </div>
              <div class="modal-body" id="addModalBody">
                <div class="container">

                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชนิดห้อง:</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกหลักสูตร" maxlength="8">
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>ชื่อย่อ:</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกคณะ" maxlength="8">
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>รายละเอียด:</span>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกคณะ" maxlength="8">
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
                <button type="button" class="btn btn-danger" onclick="closeForm()" data-dismiss="modal">ยกเลิก</button>
              </div>
            </div>
          </form>

        </div>
        <!-- #################################################################################################################  -->
        <div id="modaldel_room" class="modal fade">

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
                      <span>ชนิดห้อง</span>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="name_r_de" name="name_r_de" disabled=true; placeholder="กรุณากรอกชื่อวิชา" value="ห้องเรียน">
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

  $(document).ready(function() {
    $("#addroom").click(function() {
      $("#modaladdroom").modal();
    });
  });

  function ep_room() {
    $("#modaledit_room").modal();
  }

  function del_eq() {
    $("#modaldel_room").modal('show');
  }
</script>