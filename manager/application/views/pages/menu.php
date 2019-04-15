<nav class="main-menu">
		<ul>
			<li>
				<a href="<?=base_url('welcome-to-msd-dashboard.jsp')?>">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
            <li class="has-subnav">
				<a href="<?=base_url('welcome-to-msd-add-visitor.jsp')?>">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					Add Visitors / check in
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				
			</li>
            <li class="has-subnav">
                <a href="<?=base_url('welcome-to-msd-visitor-report.jsp')?>">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <span class="nav-text">
					Visitor Report
				</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>

            </li>
            <li class="has-subnav">
				<a href="<?=base_url('welcome-to-msd-visitor-list.jsp')?>">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					View Visitors
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				
			</li>

			
		</ul>
		<ul class="logout">
			<li>
			<a href="<?=base_url('msd-logout.jsp')?>">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>