<script>
    $(document).ready(function () {

        $(document).on('click', '#getUser', function (e) {

            e.preventDefault();

            var uid = $(this).data('id');

            $.ajax({
                url: 'view_instructor.php',
                type: 'POST',
                data: 'id=' + uid,
                beforeSend: function () {
                    $("#content").html('Working on Please wait ..');
                },
                success: function (data) {
                    $("#content").html(data);
                },
            })

        });
    })
</script>
<?php
include 'newInstructor.php';
?>

<h1 class="page-header">INSTRUCTOR <button style="float:right" type="button" class="btn btn-info" data-toggle="modal"
        data-target="#myModal">
        <i class="glyphicon glyphicon-plus"></i> New Entry</button></h1>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">


        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Instructor</h4>
            </div>
            <div class="modal-body">




                <form class="form-horizontal" method="post">
                    <fieldset>
                        <div class="container">

                            <div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
                                <h4><b>Instructor Personal Details </b></h4>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-4">
                                <br>
                                <div class="form-group">
                                    <label class="col-xs-4 control-label" for="E_n">Employee NO.</label>
                                    <div class="col-xs-6">
                                        <input id="E_n" name="E_n" type="text" placeholder="Enter no. " maxlength="12"
                                            class="form-control input-xs" required="">
                                    </div>
                                </div>

                                <!-- Prepended text-->
                                <div class="form-group">
                                    <label class="col-xs-4 control-label" for="name">Name*</label>
                                    <div class="col-xs-8">
                                        <div class="input-group">
                                            <input id="name" class="form-control input-xs"
                                                style="text-transform: capitalize;" name="I_lname"
                                                placeholder="Lastname" type="text" required="">
                                            <input id="name" class="form-control input-xs"
                                                style="text-transform: capitalize;" name="I_fname"
                                                placeholder="Firstname" type="text" required="">
                                            <input id="name" class="form-control input-xs"
                                                style="text-transform: capitalize;" name="I_mname"
                                                placeholder="Middlename" type="text" required="">

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-4 control-label" for="gender">Gender*</label>
                                    <div class="col-xs-4">
                                        <select id="gender" name="I_gender" class="form-control input-xs">
                                            <option value="MALE">Male</option>
                                            <option value="FEMALE">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-4 control-label" for="address">Birth Place*</label>
                                    <div class="col-xs-8">
                                        <div class="input-group">
                                            <input id="address" class="form-control" style="text-transform: capitalize;"
                                                name="I_bp" placeholder="Birth Place" type="text" required="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <br>
                                <br>
                                <br>

                                <div class="form-group">
                                    <label class="col-xs-5 control-label" for="I_dob">Date of Birth*</label>
                                    <div class="col-xs-7">
                                        <input id="dob" name="I_dob" type="date" placeholder="YYYY-MM-DD"
                                            class="form-control input-md" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-xs-5 control-label" for="I_pob">ADDRESS*</label>
                                    <div class="col-xs-7">
                                        <input id="pob" name="I_pob" type="text" style="text-transform: capitalize;"
                                            placeholder="Enter Student Address" class="form-control input-xs"
                                            required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success " name="I_submitb" value="Submit Form">

                </form>
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
            </div>
        </div>

    </div>
</div>



<div class="col-md-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Instructors List</h3>

        </div>
        <div class="panel-body">
            <table id="students" class="table table-bordered table-condensed">
                <thead>
                    <tr id="heads">
                        <th style="width:10%;text-align:center">EMPLOYEE NO.</th>
                        <th style="width:30%;text-align:center">Firstname</th>
                        <th style="width:20%;text-align:center">Surname</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';
                    $sql = mysqli_query($conn, "SELECT * FROM instructors order by E_n ");
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $sid = $row['E_n'];


                        ?>
                        <tr>


                            <td><?php echo $row['E_n'] ?></td>
                            <td><?php echo $row['I_fname'] . ' ' . $row['I_mname'] ?></td>

                            <td style="text-align:center"><?php echo $row['I_lname'] ?></td>


                            <td style="text-align:center">
                                <a class="btn btn-info" data-toggle="modal" data-target="#view-modal"
                                    data-id="<?php echo $sid ?>" id="getUser">View Profile</a>
                            </td>
                        </tr>

                        <?php
                    }

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content modal-lg">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">
                    <i class=""></i> PROFILE
                </h4>
            </div>
            <div id="content">

            </div>


        </div>
    </div>
</div>



<script type="text/javascript">
    $(function () {
        $("#students").dataTable(
            { "aaSorting": [[2, "asc"]] }
        );
    });
</script>