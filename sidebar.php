<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigation</title>
    <link rel="stylesheet" href="sidebar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <?php
    include 'db.php';

    $query = mysqli_query($conn, "SELECT * FROM school_year where status='Yes' ");
    $s = mysqli_fetch_assoc($query);
    $school_year = $s['school_year'];
    ?>

    <section id="sidebar">
        <a href="#" class="brand">
            <span class="text">ACLC College of Ormoc City, Inc.</span>
        </a>
        <ul class="side-menu">
            <li class="active">
                <a href="#">
                    <i class="material-icons">dashboard</i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">person</i>
                    <span class="text">Instructor</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">school</i>
                    <span class="text">Student</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">menu_book</i>
                    <span class="text">Subjects</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">library_books</i>
                    <span class="text">Programs</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">trending_up</i>
                    <span class="text">Performance</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">assignment_turned_in</i>
                    <span class="text">Evaluation</span>
                </a>
            </li>
            <li>
                
                <a href="#">
                    <i class="material-icons">settings</i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class="material-icons">exit_to_app</i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
