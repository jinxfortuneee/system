<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" href="settings.css">
    <link rel="stylesheet" href="fontawesome/css/all.css" media="screen">

    <title>School Management System</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
           <center><br/><br/>
            <span class="text">ACLC College of Ormoc City, Inc.</span></center>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="#">
                    <i class='fas fa-tachometer-alt'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-user'></i>
                    <span class="text">Instructor</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-user-graduate'></i>
                    <span class="text">Student</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-book'></i>
                    <span class="text">Subjects</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-book-open'></i>
                    <span class="text">Programs</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-chart-line'></i>
                    <span class="text">Performance</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-clipboard-check'></i>
                    <span class="text">Evaluation</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li class="active">
                <a href="#">
                    <i class='fas fa-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='fas fa-sign-out-alt'></i>
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
        
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
        </div>
    </form>
 
    <input type="checkbox" id="switch-mode" hidden>
<label for="switch-mode" class="switch-mode"></label>

<script>
        const switchMode = document.getElementById('switch-mode');

        switchMode.addEventListener('change', function () {
            if (this.checked) {
                document.body.classList.add('dark');
                
            } else {
                
                document.body.classList.remove('dark');
            }
        });
    </script>


    <a href="#" class="notification">
        <i class="fas fa-bell"></i>
        <span class="num">8</span>
    </a>
    <a href="#" class="profile">
        <img src="img/profile.jpg" alt="Profile">
    </a>
</nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Settings</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li><i class='fas fa-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>

        


             
              
                
                  
<div class="setting">

<div class="bg-profile">
        <img src="img/bg-profile.jpg" alt="Profile"> 
    </div>

<div class="head-title1">
        <!-- Complete Name -->
        <p style="color: black "><b>Juan Dela Cruz - ADMIN</b></p> 
    </div>          
    
    <!-- Form -->
    <form action="#">
        
       <!-- Username -->
       <div class="form-input">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>
        <!-- Password -->
        <div class="form-input">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <!-- Mobile No -->
        <div class="form-input">
            <label for="mobile">Mobile No:</label>
            <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number">
        </div>
        <!-- Address -->
        <div class="form-input">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address">
        </div>
        
        
        <!-- Save Button -->
        <button type="submit" class="btn-save">Save</button>
        </form>
            </div>
        

                
</body>


</html>
