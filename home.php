<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #e6e8ed;
        color: #666666;
        font-family: "Montserrat", sans-serif;
    }

    .material-icons-outlined {
        vertical-align: middle;
        line-height: 1px;
    }

    .text-primary {
        color: #666666;
    }

    .text-blue {
        color: #246dec;
    }

    .text-red {
        color: #cc3c43;
    }

    .text-green {
        color: #367952;
    }

    .text-orange {
        color: #f5b74f;
    }

    .font-weight-bold {
        font-weight: 600;
    }

    /* ---------- MAIN ---------- */

    .main-container {
        grid-area: main;
        overflow-y: auto;
        padding: 20px 20px;
    }

    .main-title {
        display: flex;
        justify-content: space-between;
    }

    .main-title>p {
        font-size: 20px;
    }

    .main-cards {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 20px;
        margin: 20px 0;
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 25px;
        background-color: #ffffff;
        box-sizing: border-box;
        border: 1px solid #d2d2d3;
        border-radius: 5px;
        box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
    }

    .card:first-child {
        border-left: 7px solid #246dec;
    }

    .card:nth-child(2) {
        border-left: 7px solid #f5b74f;
    }

    .card:nth-child(3) {
        border-left: 7px solid #367952;
    }

    .card:nth-child(4) {
        border-left: 7px solid #cc3c43;
    }

    .card>span {
        font-size: 20px;
        font-weight: 600;
    }

    .card-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .card-inner>p {
        font-size: 18px;
    }

    .card-inner>span {
        font-size: 35px;
    }

    .charts {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .charts-card {
        background-color: #ffffff;
        margin-bottom: 20px;
        padding: 25px;
        box-sizing: border-box;
        -webkit-column-break-inside: avoid;
        border: 1px solid #d2d2d3;
        border-radius: 5px;
        box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
    }

    .chart-title {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        font-weight: 600;
    }

    .calendar {
        margin: auto;
        width: 98%;
        max-width: 380px;
        padding: 1rem;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .calendar header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .calendar nav {
        display: flex;
        align-items: center;
    }

    .calendar ul {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        text-align: center;
    }

    .calendar ul li {
        width: calc(100% / 7);
        margin-top: 25px;
        position: relative;
        z-index: 2;
    }

    #prev,
    #next {
        width: 20px;
        height: 20px;
        position: relative;
        border: none;
        background: transparent;
        cursor: pointer;
    }

    #prev::before,
    #next::before {
        content: "";
        width: 50%;
        height: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        border-style: solid;
        border-width: 0.25em 0.25em 0 0;
        border-color: #ccc;
    }

    #next::before {
        transform: translate(-50%, -50%) rotate(45deg);
    }

    #prev::before {
        transform: translate(-50%, -50%) rotate(-135deg);
    }

    #prev:hover::before,
    #next:hover::before {
        border-color: #000;
    }

    .days {
        font-weight: 600;
    }

    .dates li.today {
        color: #fff;
    }

    .dates li.today::before {
        content: "";
        width: 2rem;
        height: 2rem;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #000;
        border-radius: 50%;
        z-index: -1;
    }

    .dates li.inactive {
        color: #ccc;
    }
</style>

<body>
    <!-- Main -->
    <main class="main-container">
        <div class="main-title">
            <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">

            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">STUDENTS</p>
                    <span class="material-symbols-outlined text-blue">Person</span>
                </div>
                <span class="text-primary font-weight-bold">249</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">INSTRUCTOR</p>
                    <span class="material-icons-outlined text-orange">edit</span>
                </div>
                <span class="text-primary font-weight-bold">83</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">USERS</p>
                    <span class="material-icons-outlined text-green">group</span>
                </div>
                <span class="text-primary font-weight-bold">79</span>
            </div>

            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">REMINDERS</p>
                    <span class="material-icons-outlined text-red">notification_important</span>
                </div>
                <span class="text-primary font-weight-bold">56</span>
            </div>

        </div>

        <div class="charts">
            <div class="charts-card">
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>CALENDAR</h3>
                            <br>
                        </div>
                        <div class="calendar">
                            <header>
                                <br>
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
                    </div>
                </div>
            </div>
            <div class="charts-card">

    </main>
    <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
</body>

</html>