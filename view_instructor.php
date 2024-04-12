<div class="modal-body">

    <?php
    include 'db.php';
    $id = $_POST['id'];

    if ($_POST['id']) {
        $sql = mysqli_query($conn, "SELECT * From instructors where E_n = '$id'");
        while ($row = mysqli_fetch_assoc($sql)) {
            ?>
            <input type="hidden" name="id" value="<?php echo $id ?>" <div class="row">
            <div class="col-md-5 text-right">
                <label>EMPLOYEE NO.</label>
            </div>
            <div class="col-md-2 text-left">
                <?php echo $row['E_n'] ?>


            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-5 text-right">
                <label>Name:</label>
            </div>
            <div class="col-md-4 text-left">
                <?php echo $row['I_lname'] . ", " . $row['I_fname'] . " " . $row['I_mname']; ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-5 text-right">
                <label>Gender:</label>
            </div>
            <div class="col-md-2 text-left">
                <?php echo $row['I_gender'] ?>
                <label></label>

            </div>

        </div>

        <div class="row">
            <div class="col-md-5 text-right">
                <label>Date of Birth:</label>
            </div>
            <div class="col-md-2 text-left">
                <?php echo $row['I_bp'] ?>
                <label></label>

            </div>

        </div>
        <div class="row">
            <div class="col-md-5 text-right">
                <label>Place of Birth:</label>
            </div>
            <div class="col-md-2 text-left">
                <?php echo $row['I_dob'] ?>

            </div>

        </div>
        <div class="row">
            <div class="col-md-5 text-right">
                <label>Address:</label>
            </div>
            <div class="col-md-4 text-left">
                <?php echo $row['I_pob'] ?>
                <label></label>

            </div>

        </div>

        </div>

        </div>

        </div>
        <div class="row">
            <div class="col-md-8 text-right">
                <!-- <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button> -->

            </div>

        </div>
        </div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-default" href="rms.php?page=instructor_p&id=<?php echo $id ?>">Update</a>

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>





        <?php
        }
    }
    mysqli_close($conn);
    ?>