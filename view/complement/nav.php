<header>
	<nav class="navbar navbar-default navbar-fixed-top top-nav" data-spy="affix" data-offset-top="100">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="logo">
					<a href="?view=principal" class="navbar-brand"><?php echo APP_TITLE; ?></a>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="navbar-top">
				<ul class="nav navbar-nav navbar-right">
          <li><a href="?view=principal"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Inicio</a></li>
						<?php if ($_USER[$_SESSION['app_id']]['cargo'] == 'Administrador') { ?>
							<li><a href="#login" data-toggle="modal"><i class="fa fa-key fa-lg" aria-hidden="true"></i> Permisos</a></li>
						<?php } ?>
						<li class="dropdown drop-active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								<span class="fa fa-user-plus fa-lg"></span> Registrar <i class="fa fa-caret-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu menu-user">
								<li><a href="?view=profile"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Registrar Miembro</a></li>
								<li><a href="?view=favorites"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> Registrar Usuario</a></li>
							</ul>
						</li>
						<?php if ($_USER[$_SESSION['app_id']]['cargo'] == 'Administrador') { ?>
							<li><a href="#register" data-toggle="modal" data-target="#register"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Reportes</a></li>
						<?php } ?>
						<li><a href="?view=logout"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
