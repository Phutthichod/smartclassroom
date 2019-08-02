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
        <?php include("sidebarcalendar.php"); ?>
        <!--end Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="background-color: #dbe0ff6b;">
                <!-- start Topbar -->
                <?php include("../main/topbar.php"); ?>
                <!-- end Topbar -->
                <!-- #################### start Content #################### -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-12 mb-4">
                            <div class="card text-primary">
                                <div class="card-header card-bg">
                                    ปฏิทินปีการศึกษา
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------------begin nav--------------------------------->

                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#home">ปฏิทินการศึกษา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu1">ตารางปีการศึกษา</a>
                        </li><!-- Nav pills -->

                    </ul>
                    <br>

                    <!-- begin calendar and table -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <div id='calendar'></div>

                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <div class="table-responsive-sm">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ปีการศึกษา</th>
                                            <th>ภาค</th>
                                            <th>ช่วง</th>
                                            <th>เริ่มต้น</th>
                                            <th>สิ้นสุด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2562</td>
                                            <td>ภาคต้น</td>
                                            <td>ก่อนสอบกลางภาค</td>
                                            <td>15-07-62</td>
                                            <td>8-11-62</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!------------------------------------------------- end nav------------------------------------------------------------------------->


                    <!------------modal createvent----------------->

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createvent" data-whatever="@fat">Open modal for @fat</button>


                    <div class="modal fade" id="createvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มกิจกรรมปีการศึกษา</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">เพิ่มชื่อเรื่อง:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>

                                        <div class="form-group">
                                            เลือกภาคการศึกษา : <select class="form-control" id="
                                           semester">
                                                <option>ภาคต้น</option>
                                                <option>ภาคปลาย</option>
                                                <option>ภาคฤดูร้อน</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="strat" class="col-form-label">วันที่:</label>
                                            <input type='text' class="form-control" id='start' name="start" value="">
                                            <label for="end" class="col-form-label">ถึง:</label>
                                            <input type='text' class="form-control" id='end' name="end" value="">
                                        </div>

                                        <div class="form-group">
                                            เลือกช่วงการศึกษา : <select class="form-control" id="
                                           semester">
                                                <option>ก่อนสอบกลางภาค</option>
                                                <option>สอบกลางภาค</option>
                                                <option>หลังสอบกลางภาค</option>
                                                <option>สอบปลายภาค</option>
                                                <option>ปิดภาคเรียน</option>

                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="button" class="btn btn-primary">บันทึก</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------end modal createvent----------------->

                    <!-------------------------------- del modal----------------------------------------------------------------->

                    <div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modaltitle"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="#">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <h6 id="startdate"></h6>
                                            <input type="hidden" class="form-control" id='idevent' name="idevent" value="" />
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn btn-danger" name="delbtn">ลบ</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--------------------------------------------------end del modal ---------------------------------------->



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
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth',
            },

            buttonText: {
                listMonth: 'ตาราง',
                month: 'เดือน',
                week: 'สัปดาห์',
                day: 'วัน',
                today: 'วันนี้'
            },

            navLinks: true, // can click day/week names to navigate views
            businessHours: true, // display business hours
            editable: true,
            selectable: true,
            select: function(arg) {
                moment.locale('th');
                var start = moment(arg.start).tz('Asia/bangkok').format('วัน' + 'dddd DD  MMMM YYYY');
                var end = moment(arg.end).tz('Asia/bangkok').format('วัน' + 'dddd DD MMMM YYYY');
                //start.moment.tz('Asia/bangkok');
                //end.moment.tz('Asia/bangkok');

                $('#createvent').modal('show');

                $('#createvent #start').val(start);
                $('#createvent #end').val(end);

                calendar.unselect();

            },

            eventClick: function(info) {
                moment.locale('th');
                var start = moment(info.event.start).tz('Asia/bangkok').format('วัน' + 'dddd DD  MMMM YYYY');
                var end = moment(info.event.end).tz('Asia/bangkok').format('วัน' + 'dddd DD MMMM YYYY');
                var whentime = start + ' ถึง ' + end;
                $('#modaltitle').html(info.event.title);
                $('#startdate').html(whentime);
                $('#idevent').val(info.event.id);
                $('#del').modal();
            },

            locale: 'th',
            timeZone: 'th',
            events: [{
                    title: 'Business Lunch',
                    start: '2019-06-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2019-06-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: 'black'
                },
                {
                    title: 'Conference',
                    start: '2019-06-18',
                    end: '2019-06-20'
                },
                {
                    title: 'Party',
                    start: '2019-06-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    groupId: 'availableForMeeting',
                    start: '2019-06-11T10:00:00',
                    end: '2019-06-11T16:00:00',
                    rendering: 'background'
                },
                {
                    groupId: 'availableForMeeting',
                    start: '2019-06-13T10:00:00',
                    end: '2019-06-13T16:00:00',
                    rendering: 'background'
                },

                // red areas where no events can be dropped
                {
                    start: '2019-06-24',
                    end: '2019-06-28',
                    overlap: false,
                    rendering: 'background',
                    color: '#ff9f89'
                },
                {
                    start: '2019-06-06',
                    end: '2019-06-08',
                    overlap: false,
                    rendering: 'background',
                    color: '#ff9f89'
                }
            ]
        });

        calendar.render();
    });
</script>
<script>
    $(".table").DataTable();

    $("#btn_upload").click(function() {
        $("#input_upload").click();
    });

    $("#btn_info").click(function() {
        $("body").append(infoModal);
        $("#infoModal").modal('show');
    });

    $("#btn_pass").click(function() {
        $("body").append(passModal);
        $("#passModal").modal('show');
    });
</script>