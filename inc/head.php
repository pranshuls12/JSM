<?php
require_once('header-links.php');
?>
<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<div class="icon text-center">
					<img src="assets/layer.png" width="55px">
				</div>
			</div>
			<div class="col-8 text-center">
				<div class="title-text pt-3">
					<h1 class="fs-35">Journalism Society MITS</h1>
				</div>
			</div>
			<div class="col-2">
				<ul class="social-media">
					<li class="social-media-links"><a href="#"><img src="assets/youtube.png"></a></li>

					<li class="social-media-links"><a href="#"><img src="assets/twitter.png"></a></li>

					<li class="social-media-links"><a href="#"><img src="assets/instagram.png"></a></li>

					<li class="social-media-links"><a href="#"><img src="assets/facebook.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<nav class="mt-2 navbar navbar-expand-lg navbar-light bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#"><img src="assets/home.png" width="20px"></a>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		<ul class="navbar-nav mr-auto ml-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Politics</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Bussiness</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Entertainment</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Lifestyle</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Sports</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Technology</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Videos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link fs-14 fw-500 cl-white" href="#">Interview</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<div class="dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="assets/avatar.png" width="20px">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="#">Name</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">My Profile</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
    </div>
			
			<button class="btn my-2 my-sm-0" type="submit" id="nav-search" onclick="myFunction();return false;"><img src="assets/magnifyingglass.png" width="20px"></button>
			<div id="search-box">
				<input  id="form-search" type="search" placeholder="Search..." aria-label="Search">
				<button class="search-icon" type="submit"><img src="assets/magnifyingglass1.png" width="20px"></button>
			</div>
		</form>
	</div>
</nav>


<?php
require_once('footer-links.php');
?>




