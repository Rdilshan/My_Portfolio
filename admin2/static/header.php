<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<!-- <link rel="shortcut icon" href="img/icons/icon-48x48.png" /> -->
    <link rel="icon" href="../../Assets/web/67_White.png" type="image/x-icon" />
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Dashboard</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">

		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Dashboard</span>
                </a>

				<ul class="sidebar-nav">
					
					<li class="sidebar-item active">
						<a class="sidebar-link" href="./index.php">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./mydetails.php">
                        <i class="align-middle" data-feather="user"></i> <span class="align-middle">My Details</span>
                        </a>
					</li>

                    <li class="sidebar-header">
						Skills
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./skills.php">
                        <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">My Skills</span>
                        </a>
					</li>

					<li class="sidebar-item">
                            <a class="sidebar-link" href="education.php">
                            <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Education</span>
                            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="workexperience.php">
                        <i class="align-middle" data-feather="book"></i> <span class="align-middle">Work Experoence</span>
                        </a>
					</li>

					<li class="sidebar-header">
						
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="blog.php">
                        <i class="align-middle" data-feather="square"></i> <span class="align-middle">Blog</span>
                        </a>
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="countshow.php">
                        <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Count Showing</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="recentwork.php">
                        <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Recent Work</span>
                        </a>
					</li>

                    <li class="sidebar-header">
						Other
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="cando.php">
                        <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">What can do</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="myexpertise.php">
                        <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">My Expertise</span>
                        </a>
					</li>

                    <li class="sidebar-header">
						
                    </li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="mymsg.php">
                        <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Message</span>
                        </a>
					</li>

					
				</ul>

				
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="mymsg.php">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator"><?php require_once 'php/showmsgcount.php'; ?></span>
								</div>
							</a>


						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>
                            <?php 
                                $sql = "SELECT * FROM `Detila`";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                            ?>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="../../Assets/profile/<?php echo  $row['Profile_Pic'];?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo  $row['Name'];?></span>
                            </a>
                            <?php } ?>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="./logout.php">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

