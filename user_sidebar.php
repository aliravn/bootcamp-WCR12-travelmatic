<?php
if(!isset($_SESSION['user'])) {
	header("Location: index.php");
	exit;
}
?>

<div class="vertical-nav bg-white" id="sidebar">
	<div class="py-4 px-3 mb-4 bg-light">
		<div class="media d-flex align-items-center"><img src="<?php echo $user_details['userpic']; ?>" alt="..." width="65" class="mr-3 rounded img-thumbnail sidebar-thumbnail-color shadow-sm">
			<div class="media-body">
				<h4 class="m-0"><?php echo $user_details['username']; ?></h4>
				<p class="font-weight-light text-muted mb-0">[user]</p>
			</div>
		</div>
	</div>

	<p class="text-gray font-weight-bold text-uppercase px-3 small pb-2 mb-0">Navigation</p>
	<ul class="nav flex-column bg-white mb-0">
		<li class="nav-item">
			<a href="home.php" class="nav-link text-dark font-italic bg-light">
				<i class="fa fa-th-large sidebar-link fa-fw"></i>
				Home / All posts
			</a>
		</li>
		<li class="nav-item">
			<a href="restaurant.php" class="nav-link text-dark font-italic">
				<i class="fa fa-cutlery sidebar-link fa-fw"></i>
				Restaurants
			</a>
		</li>
		<li class="nav-item">
			<a href="event.php" class="nav-link text-dark font-italic">
				<i class="fa fa-music sidebar-link fa-fw"></i>
				Events
			</a>
		</li>
		<li class="nav-item">
			<a href="map.php" class="nav-link text-dark font-italic">
				<i class="fa fa-map sidebar-link fa-fw"></i>
				Maps
			</a>
		</li>
	</ul>

	<p class="text-gray font-weight-bold text-uppercase px-3 small pt-4 py-2 mb-0">User controls</p>
	<ul class="nav flex-column bg-white mb-0">
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-user-circle-o sidebar-link fa-fw"></i>
				Avatar [n/a]
			</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-unlock-alt sidebar-link fa-fw"></i>
				Password [n/a]
			</a>
		</li>
	</ul>
</div>