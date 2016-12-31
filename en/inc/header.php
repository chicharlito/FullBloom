	<div id="main-header">
	<div class="container">

		<div class="row">
			<div class="header">

				<div class="col-md-2 col-sm-12">
					<div id="logo" class="margin-top-25">
						<a href="?q=home"><img src="../images/FullBloom.png" alt=""></a>
					</div>
				</div>

				<!-- Search Form -->
				<div class="search-container">
			      	<form action="#" method="get">
			      		<input type="text" name="s" id="s" onblur="if(this.value=='')this.value='';" onfocus="if(this.value=='')this.value='';" value="" />
			      	</form>
			      	<div class="close-search"><a class="sl sl-icon-close" href="#"></a></div>
				</div>

					<div class="col-md-10 col-sm-12">

					<!-- Mobile Navigation -->
					<div class="menu-responsive">
						<i class="fa fa-reorder menu-trigger"></i>
						<i class="fa fa-search search-trigger"></i>
						<a href="http://admin.mypaas.io/"><i class="ln ln-icon-Lock-User"></i></a>
				      	<form action="#" method="get" class="responsive-search">
				      		<input type="text" onblur="if(this.value=='')this.value='';" onfocus="if(this.value=='')this.value='';" value="" />
				      	</form>
					</div>
					
					<!-- Main Navigation -->
					<nav id="navigation">

						<ul class="menu alt2" id="responsive">

							<li class="dropdown">
								<a href="?q=home" class="<?php echo $_home_class; ?>">HOME</a>
							</li>

							<li>
								<a href="?q=services" class="<?php echo $_services_class; ?>">SOLUTION</a>
				            </li>

							<li>
								<a href="?q=paas" class="<?php echo $_paas_class; ?>">RELATED SERVICES</a>
							</li>

							<li>
								<a href="?q=contact" class="<?php echo $_contact_class; ?>">CONTACT</a>
                            </li>


							<!-- Search Icon-->		
							<li class="search"><a href="#"><i class="sl sl-icon-magnifier"></i></a></li>
                            <li class="cart-icon"><a href="#"><i class="ln ln-icon-Lock-User"></i></a></li>
                            
                            <li>
								<a href="<?php echo BASEDIR_EN."/" ?>">EN</a>
                            </li>
                            <li>
								<a href="<?php echo BASEDIR_FR."/" ?>">FR</a>
                            </li>

						</ul>
					</nav>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>