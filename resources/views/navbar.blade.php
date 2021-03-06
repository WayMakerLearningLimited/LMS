<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="/admin/dashboard"><img src="{!! asset('waymaker/Waymaker Learning Logo.jpg') !!}" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Administrator</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/admin/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
							<li>
							<a href="#subPag" data-toggle="collapse" class="collapsed"><i class="lnr lnr-cloud-check"></i> <span>Courses</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPag" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/course/create" class="">Create Course</a></li>
									<li><a href="/admin/courses" class="">All Courses</a></li>
									<li><a href="/admin/courses/category/create" class="">Course Category</a></li>
								</ul>
							</div>
						</li>
							<li>
							<a href="#subPa" data-toggle="collapse" class="collapsed"><i class="lnr lnr-inbox"></i> <span>Modules</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPa" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/module/create" class="">Create Module</a></li>
									<li><a href="/admin/modules" class="">All Modules</a></li>
								</ul>
							</div>
								<li>
							<a href="#topics" data-toggle="collapse" class="collapsed"><i class="lnr lnr-text-format"></i> <span>Topics</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="topics" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/topic/create" class="">Create Topic</a></li>
									<li><a href="/admin/topics" class="">All Topics</a></li>
								</ul>
							</div>
						</li>
							<li>
							<a href="#blog" data-toggle="collapse" class="collapsed"><i class="lnr lnr-spell-check"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="blog" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/post/create" class="">Create Post</a></li>
									<li><a href="/admin/posts" class="">All Posts</a></li>
							        <li><a href="/admin/posts/category/create" class="">Post Categories</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#questions" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>Questions</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="questions" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/question/create" class="">Create Question</a></li>
									<li><a href="/admin/questions" class="">All Questions</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#tests" data-toggle="collapse" class="collapsed"><i class="lnr lnr-book"></i> <span>Test</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="tests" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/test/create" class="">Create Test</a></li>
									<li><a href="/admin/tests" class="">All Tests</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->