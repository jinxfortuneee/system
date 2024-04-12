<?php
include 'db.php';
$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM instructors WHERE E_n = '$id'");
while ($row = mysqli_fetch_assoc($sql)) {
    ?>
    <div class="container">
        <div class="col-md-12">
            <form method="post">
                <div class="row">
                    <div class="col-md-1 text-right">
                        <a type="button" class="btn btn-info" href="rms.php?page=Instructor"><i
                                class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <!-- Update Instructor Form -->
                        <div class="form-group">
                            <label>Employee no:</label>
                            <input type="text" maxlength="12" class="form-control input-xs" name="E_n"
                                value="<?php echo $row['E_n'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control input-xs" name="I_lname"
                                value="<?php echo $row['I_lname'] ?>">
                            <input type="text" class="form-control input-xs" name="I_fname"
                                value="<?php echo $row['I_fname'] ?>">
                            <input type="text" class="form-control input-xs" name="I_mname"
                                value="<?php echo $row['I_mname'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label>
                            <select class="form-control input-xs" name="I_gender">
                                <option><?php echo $row['I_gender'] ?></option>
                                <?php if ($row['I_gender'] == 'MALE') {
                                    echo '<option>FEMALE</option>';
                                } else {
                                    echo '<option>MALE</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <input type="date" class="form-control input-xs" name="I_bp" value="<?php echo $row['I_bp'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Place of Birth:</label>
                            <input type="text" class="form-control input-xs" name="I_dob"
                                value="<?php echo $row['I_dob'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <textarea rows="2" class="form-control input-xs"
                                name="I_pob"><?php echo $row['I_pob'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i>
                            Update</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
        </div>
    </div>
    <?php
}
mysqli_close($conn);
?>