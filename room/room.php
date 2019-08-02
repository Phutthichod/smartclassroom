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
		<?php include("sidebarRoom.php"); ?>
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
										รายซื่อห้อง
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
												<div class="font-weight-bold  text-uppercase mb-1">จำนวนห้อง</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">4 ห้อง</div>
											</div>
											<div class="col-auto">
												<i class="material-icons icon-big">home</i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-12 mb-4">
								<a href='addroom.php' style="text-decoration: none">
									<div class="card border-left-primary card-color-four shadow h-100 py-2" id="addsub" style="cursor:pointer;">
										<div class="card-body">
											<div class="row no-gutters align-items-center">
												<div class="col mr-2">
													<div class="font-weight-bold  text-uppercase mb-1">เพิ่มห้อง
													</div>
													<div class="h5 mb-0 font-weight-bold text-gray-800">+1 ห้อง</div>
												</div>
												<div class="col-auto">
													<i class="material-icons icon-big">add_circle</i>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>

						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-header card-header-table py-3">
								<h6 class="m-0 font-weight-bold text-primary">รายซื่อห้องในระบบ</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
										<div class="row">
											<div class="col-sm-12">
												<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 180%;">
													<thead>
														<tr role="row">
															<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="รหัสวิชา: activate to sort column descending" style="width: 100px;">หมายเลขห้อง</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="ชื่อวิชา: activate to sort column ascending" style="width: 180px;">ซื่อห้อง</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="หลักสูตร: activate to sort column ascending" style="width: 70px;">ชื่อย่อห้อง</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 180px;">ตึก</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 30px;">ชั้น</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 100px;">วิทยาเขต</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 80px;">ข้อมูลชนิดห้อง</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 70px;">ข้อมูลอุปกรณ์</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 30px;">รูปห้อง</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 40px;">สถานะห้อง</th>
															<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="จัดการ: activate to sort column ascending" style="width: 60px;">จัดการ</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th rowspan="1" colspan="1">หมายเลขห้อง</th>
															<th rowspan="1" colspan="1">ซื่อห้อง</th>
															<th rowspan="1" colspan="1">ชื่อย่อห้อง</th>
															<th rowspan="1" colspan="1">ตึก</th>
															<th rowspan="1" colspan="1">ชั้น</th>
															<th rowspan="1" colspan="1">วิทยาเขต</th>
															<th rowspan="1" colspan="1">ข้อมูลชนิดห้อง</th>
															<th rowspan="1" colspan="1">ข้อมูลอุปกรณ์</th>
															<th rowspan="1" colspan="1">รูปห้อง</th>
															<th rowspan="1" colspan="1">สถานะห้อง</th>
															<th rowspan="1" colspan="1">จัดการ</th>

														</tr>
													</tfoot>
													<tbody>
														<tr role="row" class="odd">
															<td class="sorting_1">E8405</td>
															<td>ห้องปฎิบัติการคอมพิวเตอร์</td>
															<td>Lab</td>
															<td>ตึกวิศวกรรมศาสตร์(ตึก 8)</td>
															<td>ชั้น 3</td>
															<td>วิทยาเขตกำแพงแสน</td>
															<td style="text-align:center;">
																<button type="button" onclick="type_room()" class="btn btn-info btn-sm">2 ชนิด
																</button>
															</td>
															<td style="text-align:center;">
																<button type="button" onclick="equipment_room()" class="btn btn-info btn-sm">2 อย่าง
																</button>
															</td>
															<td style="text-align:center;">
																<button type="button" onclick="picture()" class="btn btn-info btn-sm"><i class="fas fa-photo-video"></i>
																</button>
															</td>
															<td>
																<a class="btn btn-success btn-sm btn-circle active">R</a>
															</td>
															<td style="text-align:center;">
																<a href="Usage_history.php"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-file-alt"></i></button></a>
																<a href="addroom.php"><button type="button" id="btn_info" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button></a>
																<button type="button" id="btn_delete" class="btn btn-danger btn-sm"><i class="fas fa-lock"></i>
																	<!-- <i class="fas fa-lock-open"></i> -->
																</button>
																<button type="button" onclick="del_function('E8405','ห้องปฎิบัติการคอมพิวเตอร์')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>
																</button>
															</td>
														</tr>
														<tr role="row" class="odd">
															<td class="sorting_1">E8406</td>
															<td>ห้องปฎิบัติการคอมพิวเตอร์</td>
															<td>Lab</td>
															<td>ตึกวิศวกรรมศาสตร์(ตึก 8)</td>
															<td>ชั้น 3</td>
															<td>วิทยาเขตกำแพงแสน</td>
															<td style="text-align:center;">
																<button type="button" onclick="type_room()" class="btn btn-info btn-sm">2 ชนิด
																</button>
															</td>
															<td style="text-align:center;">
																<button type="button" onclick="equipment_room()" class="btn btn-info btn-sm">2 อย่าง
																</button>
															</td>
															<td style="text-align:center;">
																<button type="button" onclick="picture()" class="btn btn-info btn-sm"><i class="fas fa-photo-video"></i>
																</button>
															</td>
															<td>
																<a class="btn btn-success btn-sm btn-circle active">R</a>
															</td>
															<td style="text-align:center;">
																<a href="Usage_history.php"><button type="button" class="btn btn-info btn-sm"><i class="fas fa-file-alt"></i></button></a>
																<a href="addroom.php"><button type="button" id="btn_info" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button></a>
																<button type="button" id="btn_delete" class="btn btn-success btn-sm"><i class="fas fa-lock-open"></i>
																	<!-- <i class="fas fa-lock-open"></i> -->
																</button>
																<button type="button" onclick="del_function('E8406','ห้องปฎิบัติการคอมพิวเตอร์')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>
																</button>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- ########################################start Model edit#######################################-->
						<div id="modal_editsub" class="modal fade">

							<form class="modal-dialog modal-lg " method="post" action="processeditsubject.php">
								<div class="modal-content">
									<div class="modal-header" style="background-color:rgb(238, 204, 11)">
										<h4 class="modal-title" style="color:white">แก้ไขชนิดห้อง</h4>
									</div>
									<div class="modal-body" id="addModalBody">
										<div class="container">
											<div class="row mb-4">
												<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
													<span>ชนิดห้อง:</span>
												</div>
												<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="type_ed" name="type_ed" placeholder="กรุณากรอกชนิดห้อง" maxlength="8">
												</div>
											</div>
											<div class="row mb-4">
												<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
													<span>ซื่อย่อ:</span>
												</div>
												<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="initials_ed" name="initials_ed" placeholder="กรุณากรอกชื่อย่อ">
												</div>
											</div>
											<div class="row mb-4">
												<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
													<span>รายละเอียด:</span>
												</div>
												<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="description_ed" name="description_ed" placeholder="กรุณากรอกรายละเอียด">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
									</div>
								</div>
							</form>

						</div>
						<!-- ########################################start Model add#######################################-->
						<div id="modaladdsub" class="modal fade">

							<form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
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
												<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกชนิดห้อง" maxlength="8">
												</div>
											</div>
											<div class="row mb-4">
												<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
													<span>ซื่อย่อ:</span>
												</div>
												<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="initials_add" name="initials_add" placeholder="กรุณากรอกชื่อย่อ">
												</div>

											</div>
											<div class="row mb-4">
												<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
													<span>รายละเอียด:</span>
												</div>
												<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="description_add" name="description_add" placeholder="กรุณากรอกรายละเอียด">
												</div>

											</div>

											<div class="modal-footer">
												<button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
											</div>
										</div>
									</div>
								</div>

							</form>
						</div>
						<!-- ########################################start Model delect#######################################-->
						<div id="modal_delsub" class="modal fade">
							<form class="modal-dialog modal-lg" method="post" action="processdelsubject.php">
								<div class="modal-content">
									<div class="modal-header" style="background-color:#fa3636">
										<h4 class="modal-title" style="color:white">ยืนยันการลบ</h4>
									</div>
									<div class="modal-body" id="addModalBody">
										<div class="container">
											<div class="row mb-4">
												<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
													<span>หมายเลขห้อง:</span>
												</div>
												<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="room_number_del" name="room_number_del" disabled=true; placeholder="กรุณากรอกรหัสวิชา" maxlength="8">
												</div>
											</div>
											<div class="row mb-4">
												<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
													<span>ซื่อห้อง:</span>
												</div>
												<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
													<input type="text" class="form-control" id="name_number_del" name="name_number_del" disabled=true; placeholder="กรุณากรอกรหัสวิชา" maxlength="8">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-success" name="submitdel">ยืนยัน</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
									</div>
								</div>
							</form>
						</div>
						<!-- ########################################start Model delect#######################################-->
						<div id="modal_type" class="modal fade">
							<form class="modal-dialog modal-lg " action="/action_page.php">
								<div class="modal-content">
									<div class="modal-header" style="background-color:#3E49BB">
										<h4 class="modal-title" style="color:white">ข้อมูลของห้อง</h4>
									</div>
									<div class="modal-body" id="addModalBody">
										<div class="container">

											<table class="table table-bordered dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
												<thead>
													<tr>
														<th rowspan="1" colspan="1">ชนิดห้อง</th>
														<th rowspan="1" colspan="1">ซื่อย่อ</th>
														<th rowspan="1" colspan="1">จำนวนคนที่รองรับ</th>
														<th rowspan="1" colspan="1">สิทธิ์การใช้งาน</th>
													</tr>
												</thead>
												<tbody>
													<input type="hidden" name="number_r_ty" id="number_r_ty">

													<tr>
														<td style='text-align:center;'>ห้องแลป</td>
														<td style='text-align:center;'>lab</td>
														<td style='text-align:center;'>20</td>
														<td style='text-align:center;'><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>T</button><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>S</button><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>P</button><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>O</button>
													<tr>
														<td style='text-align:center;'>ห้องเรียน</td>
														<td style='text-align:center;'>lab</td>
														<td style='text-align:center;'>20</td>
														<td style='text-align:center;'><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>T</button><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>S</button><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>P</button><button type='button' id='btn_comfirm' class='btn btn-success btn-sm btn-circle'>O</button>

												</tbody>
											</table>

										</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" onclick="closeForm()" data-dismiss="modal">ปิด</button>
									</div>
								</div>
							</form>

						</div>


					</div>
					<!-- ########################################start Model delect#######################################-->
					<div id="modal_equipment" class="modal fade">
						<form class="modal-dialog modal-lg " action="/action_page.php">
							<div class="modal-content">
								<div class="modal-header" style="background-color:#3E49BB">
									<h4 class="modal-title" style="color:white">ข้อมูลอุปกรณ์</h4>
								</div>
								<div class="modal-body" id="addModalBody">
									<div class="container">

										<table class="table table-bordered dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
											<thead>
												<tr>
													<th rowspan="1" colspan="1">หมายเลขอุปกรณ์</th>
													<th rowspan="1" colspan="1">ซื่ออุปกรณ์</th>
													<th rowspan="1" colspan="1">จำนวนอุปกรณ์</th>
												</tr>
											</thead>
											<tbody>
												<input type="hidden" name="number_r_ty" id="number_r_ty">

												<tr>
													<td style='text-align:center;'>6120502734</td>
													<td style='text-align:center;'>โปรเจคเตอร์</td>
													<td style='text-align:center;'>1</td>
												</tr>

											</tbody>
										</table>

									</div>

								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-danger" onclick="closeForm()" data-dismiss="modal">ปิด</button>
								</div>
							</div>
						</form>

					</div>


				</div>
				<!-- ########################################start Model delect#######################################-->
				<div id="picture" class="modal fade">
					<form class="modal-dialog modal-lg ">
						<div class="modal-content">
							<div class="modal-header" style="background-color:#3E49BB">
								<h4 class="modal-title" style="color:white">ภาพห้อง</h4>
							</div>
							<div class="modal-body">
								<div class="container">
									<div class="box" align="center">
										<img src="../img/room.jpg" width="500" height="300">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" onclick="closeForm()" data-dismiss="modal">ปิด</button>
							</div>
						</div>
					</form>
				</div>
				<!-- ########################################start Model delect#######################################-->
				<!-- /.container-fluid -->
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
		console.log("ready!");
		$("#addsub").on('click', function() {
			$("#modaladdsub").modal('show');
		});
	});

	function edit_function(type, initials, description) {
		$("#modal_editsub").modal('show');
		$('#type_ed').val(type);
		$('#initials_ed').val(initials);
		$('#description_ed').val(description);
	}

	function del_function(room_number, name_number) {
		$("#modal_delsub").modal('show');
		$('#room_number_del').val(room_number);
		$('#name_number_del').val(name_number);
	}

	function type_room() {
		$("#modal_type").modal();
	}

	function equipment_room() {
		$("#modal_equipment").modal();
	}

	function picture() {
		$("#picture").modal();
	}
</script>