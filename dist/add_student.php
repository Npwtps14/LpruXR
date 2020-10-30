<?php session_start(); ?>
<?php

if (!$_SESSION["UserID"]) {

    Header("Location: form_login.php");
} else { ?>
    <!DOCTYPE html>
    <html lang="en" class="has-aside-left has-aside-mobile-transition  has-aside-expanded">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LpruX - Assignment - Create</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <style>
            
        </style>
    </head>


    <!-- Side menu -->
    <aside class="aside is-placed-left is-expanded">
        <div class="aside-tools">
            <div class="aside-tools-label">
                <span><b>Lpru</b>X</span>
            </div>
        </div>
        <div class="menu is-menu-main">
            <p class="menu-label">Management</p>
            <ul class="menu-list">
                <li>
                    <a href="add_student.php" class="is-active has-icon">
                        <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                        <span class="menu-item-label">จัดการข้อมูลนักศึกษา
                        </span>
                    </a>
                </li>
                <li>
                    <a href="add_teacher.php" class="is-active has-icon">
                        <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                        <span class="menu-item-label">จัดการข้อมูลอาจารย์
                        </span>
                    </a>
                </li>
                <li>
                    <a href="add_subject.php" class="is-active has-icon">
                        <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                        <span class="menu-item-label">จัดการข้อมูลรายวิชา</span>
                    </a>
                </li>
                <li>
                    <a href="add_register.php" class="is-active has-icon">
                        <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                        <span class="menu-item-label">จัดการการลงทะเบียน
                        </span>
                    </a>
                </li>

                <li class="is-fixed-bottom">
                    <br><br><br><br><br><br><br><br><br>
                    <a href="logout.php" class="has-icon">
                        <center><button class="button is-danger is-rounded">Logout</button></center>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End side menu -->
    <section class="section is-title-bar has-background-black-ter">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <ul>
                        <li class="has-text-white-bis">Admin</li>
                        <li class="has-text-white-bis">Management </li>
                        <li class="has-text-white-bis">Student </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    </div>
    <section class="section">
        <form action="save_student.php" method="post">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Student detail</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" name="student_id" maxlength="11" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Student ID"/>                                                             </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                            <input class="input" type="text" name="student_name" placeholder="Full name">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                            </p>
                            <p class="control is-expanded">
                                <input class="input" name="email" type="email" placeholder="Your Email">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Birthday</label>
                </div>
                <div class="field-body">
                    <div class="field is-narrow">
                        <div class="control">
                            <input class="input" name="birthday" type="date">
                        </div>
                    </div>
                
                    <div class="field is-narrow">
                        <div class="control">
                            
                            <div class="select">
                                <select name="status">
                                    <option>exist</option>
                                    <option>expire</option>
                                  
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Address</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input" name="address" type="text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary">
                                submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="column  table-wrapper-scroll-y my-custom-scrollbar ">

            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="student_data" class="table is-fullwidth is-scrollable  is-bordered is-striped   ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student ID</th>
                                    <th>group</th>
                                    <th>Full name</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    </body>

    </html>
<?php } ?>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {

        var dataTable = $('#student_data').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "fetch_student.php",
                type: "POST"
            }
        });

        $('#student_data').on('draw.dt', function() {
            $('#student_data').Tabledit({
                url: 'action_student.php',
                dataType: 'json',
                columns: {
                    identifier: [0, 'id'],
                    editable: [
                        [1, 'student_id'],
                        [2, 'sect'],
                        [3, 'student_name'],
                        [4, 'birthday'],
                        [5, 'address'],
                        [6, 'email'],
                        [7, 'status', '{"exist":"exist","expire":"expire"}']
                    ]
                },
                restoreButton: false,
                onSuccess: function(data, textStatus, jqXHR) {
                    if (data.action == 'delete') {
                        $('#' + data.id).remove();
                        $('#student_data').DataTable().ajax.reload();
                    }
                }
            });
        });

    });
</script>