@ -1,46 +1,88 @@
<?php
include 'db.php';

$query = mysqli_query($conn, "SELECT * FROM school_year where status='Yes' ");
$s = mysqli_fetch_assoc($query);
$school_year = $s['school_year'];
?>




<ul class="nav navbar-nav side-nav">
    <li>
        <a href="rms.php?page=home"><i class="fa fa-fw fa-dashboard"></i> DASHBOARD</a>
    </li>
    <li>
        <a id=demo1 href="javascript:void(0)" data-toggle="collapse" data-target="#masterlistCollapse"><i
                class="fa fa-fw fa-files-o"></i> MAIN <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="masterlistCollapse" class="collapse">
            <li>
                <a href="rms.php?page=Instructor"><i class="fa fa-fw fa-users"></i> instructor List</a>
            </li>
            <li>
                <a href="rms.php?page=Students"><i class="fa fa-fw fa-users"></i> Students List</a>
            </li>
            <li class="">
                <a href="rms.php?page=subjects"><i class="fa fa-fw fa-book"></i> Subjects List</a>
            </li>
            <li class="">
                <a href="rms.php?page=program"><i class="fa fa-fw fa-bars"></i> Curriculum List</a>
            </li>
        </ul>
    </li>

</ul>
<script>
    $('.side-nav li a').each(function () {
        if ((location.href).includes($(this).attr('href')) == true) {
            $(this).closest('li').addClass("active")
            console.log($(this).closest('li').parent('ul').attr('id'))
            if ($(this).closest('li').parent('ul').hasClass('collapse') == true) {
                $('[data-target="#' + $(this).closest('li').parent('ul').attr('id') + '"]').click()
            }
        }
    })
</script>