<!-- //dito yung code para sa session na di na siya bumalik m


//tas yung condition below dito naman kung admin and staff -->




<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-search-alt-2 icon'></i>
            <div class="logo_name">Tracking</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <!-- <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li> -->

            <li>
                <a href="table.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="index.php">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="links_name">Track</span>
                </a>
                <span class="tooltip">Track</span>
            </li>
            <li>
            <li>
                <a href="#">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="links_name">BLOG</span>
                </a>
                <span class="tooltip">BLOG</span>
            </li>
            <li>
                <!-- since wala pang budget sa API manual muna -->
                <!-- ito yung manual tab na mag nonotif sa client onces na received na ng records. -->
                <a href="email.php">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Email</span>
                </a>
                <span class="tooltip">Email</span>
            </li>
            <!--
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            -->
            <!-- <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">File Manager</span>
                </a>
                <span class="tooltip">Files</span>
            </li> -->
            <!-- <li>
                <a href="#">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li> -->
            <!-- <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li> -->
            <li>
                <a href="about.php">
                    <i class='bx bx-info-circle'></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Tracking System</div>
                        <div class="job">PsuDev</div>
                    </div>
                </div> <a href="logout.php">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </li>
        </ul>
    </div>