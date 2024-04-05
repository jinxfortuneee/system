<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>SCHOOL MANAGEMENT SYSTEM</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">ACLC </span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">INSTRUCTOR</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">STUDENT</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">SUBJECTS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">PROGRAMS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">PERFORMANCE</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">EVALUATION</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>Students</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Instructor</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>10</h3>
                        <p>Programs</p>
                    </span>
                </li>
            </ul>

            <?php  /*------------------------------ CALENDAR ------------------------ */ ?>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>CALENDAR</h3>
                    </div>
                    <div class="calendar">
                        <header>
                            <h3></h3>
                            <nav>
                                <button id="prev"></button>
                                <button id="next"></button>
                            </nav>
                        </header>
                        <section>
                            <ul class="days">
                                <li>Sun</li>
                                <li>Mon</li>
                                <li>Tue</li>
                                <li>Wed</li>
                                <li>Thu</li>
                                <li>Fri</li>
                                <li>Sat</li>
                            </ul>
                            <ul class="dates"></ul>
                        </section>
                    </div>
                    <script>
                        const header = document.querySelector(".calendar h3");
                        const dates = document.querySelector(".dates");
                        const navs = document.querySelectorAll("#prev, #next");

                        const months = [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December",
                        ];

                        let date = new Date();
                        let month = date.getMonth();
                        let year = date.getFullYear();

                        function renderCalendar() {
                            const start = new Date(year, month, 1).getDay();
                            const endDate = new Date(year, month + 1, 0).getDate();
                            const end = new Date(year, month, endDate).getDay();
                            const endDatePrev = new Date(year, month, 0).getDate();

                            let datesHtml = "";

                            for (let i = start; i > 0; i--) {
                                datesHtml += `<li class="inactive">${endDatePrev - i + 1}</li>`;
                            }

                            for (let i = 1; i <= endDate; i++) {
                                let className =
                                    i === date.getDate() &&
                                        month === new Date().getMonth() &&
                                        year === new Date().getFullYear()
                                        ? ' class="today"'
                                        : "";
                                datesHtml += `<li${className}>${i}</li>`;
                            }

                            for (let i = end; i < 6; i++) {
                                datesHtml += `<li class="inactive">${i - end + 1}</li>`;
                            }

                            dates.innerHTML = datesHtml;
                            header.textContent = `${months[month]} ${year}`;
                        }

                        navs.forEach((nav) => {
                            nav.addEventListener("click", (e) => {
                                const btnId = e.target.id;

                                if (btnId === "prev" && month === 0) {
                                    year--;
                                    month = 11;
                                } else if (btnId === "next" && month === 11) {
                                    year++;
                                    month = 0;
                                } else {
                                    month = btnId === "next" ? month + 1 : month - 1;
                                }

                                date = new Date(year, month, new Date().getDate());
                                year = date.getFullYear();
                                month = date.getMonth();

                                renderCalendar();
                            });
                        });

                        renderCalendar();
                    </script>



                    <?php  /*------------------------------ REMINDERS ------------------------ */ ?>



                </div>
                <div class="todo">
                    <div class="head">
                        <h3>REMINDERS</h3>
                        <!-- Modal Trigger Button -->
                        <button id="openModalBtn" class="custom-button">Add reminder</button>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal Content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <form action="add_reminder.php" method="post">
                                    <input type="text" name="description" placeholder="Reminders">
                                    <button type="submit" class="custom-button">Add Reminders</button>
                                </form>
                            </div>
                        </div>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <ul class="todo-list">
                        <?php
                        $con = new mysqli('localhost', 'root', '', 'system');
                        $sql = "SELECT * FROM reminders";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<li>" . $row["description"] . " <button class='delete-btn' onclick='deleteReminder(" . $row["r_id"] . ")'>Delete</button></li>";
                            }
                        } else {
                            echo "<li>No reminders found</li>";
                        }
                        ?>
                        </li>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
    <script>// Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("openModalBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Form Submission
        document.getElementById("modalForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent default form submission
            modal.style.display = "none";
        });
    </script>

</body>


</html>
