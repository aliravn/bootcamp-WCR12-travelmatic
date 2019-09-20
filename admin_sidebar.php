<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
	<div class="py-4 px-3 mb-4 bg-light">
		<div class="media d-flex align-items-center"><img src="img/avatar_admin.jpg" alt="..." width="65" class="mr-3 rounded img-thumbnail sidebar-thumbnail-color shadow-sm">
			<div class="media-body">
				<h4 class="m-0"><?php echo $user_details['username']; ?></h4>
				<p class="font-weight-light text-muted mb-0">~admin~</p>
			</div>
		</div>
	</div>

	<p class="text-gray font-weight-bold text-uppercase px-3 small pb-2 mb-0">Page Controls</p>
	<ul class="nav flex-column bg-white mb-0">
		<li class="nav-item">
			<a href="dashboard.php" class="nav-link text-dark font-italic bg-light">
				<i class="fa fa-th-large sidebar-link fa-fw"></i>
				Home
			</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-address-card sidebar-link fa-fw"></i>
				About
			</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-cubes sidebar-link fa-fw"></i>
				Services
			</a>
		</li>
		<li class="nav-item">
			<a href="sarahmaps.php" class="nav-link text-dark font-italic">
				<i class="fa fa-map sidebar-link fa-fw"></i>
				Maps
			</a>
		</li>
		<li class="nav-item">
			<a href="sarahmaps.php" class="nav-link text-dark font-italic">
				<i class="fa fa-users sidebar-link fa-fw"></i>
				Manage users
			</a>
		</li>		
	</ul>

	<p class="text-gray font-weight-bold text-uppercase px-3 small pt-4 py-2 mb-0">User controls</p>
	<ul class="nav flex-column bg-white mb-0">
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-user-circle-o sidebar-link fa-fw"></i>
				Change avatar
			</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-key sidebar-link fa-fw"></i>
				Change password
			</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-address-card sidebar-link fa-fw"></i>
				TBA
			</a>
		</li>
		<li class="nav-item">
			<a href="#" class="nav-link text-dark font-italic">
				<i class="fa fa-address-card sidebar-link fa-fw"></i>
				TBA
			</a>
		</li>
	</ul>
</div>
<!-- End vertical navbar -->