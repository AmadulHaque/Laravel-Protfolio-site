		
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<a href="/dashboard">
					<img src="{{(!empty($setting->logo)) ? url('images/setting/'.$setting->logo):url('images/profile/no_image.jpeg') }}" class="logo-icon" alt="logo icon">
					</a>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="/dashboard"><i class="bx bx-right-arrow-alt"></i>Dashboard</a>
						</li>
					</ul>
				</li>

				<!--Hero Section-->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fadeIn animated bx bx-user-check"></i>
						</div>
						<div class="menu-title">Hero Section</div>
					</a>
					<ul>
						<li> <a href="{{route('HeroHome')}}"><i class="bx bx-right-arrow-alt"></i>Hero Section</a></li>
					</ul>
				</li>

				<!--Manage Service  -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fadeIn animated bx bx-user-check"></i>
						</div>
						<div class="menu-title"> Manage Service</div>
					</a>
					<ul>
						<li> <a href="{{route('serviceAdd')}}"><i class="bx bx-right-arrow-alt"></i>Add Service</a></li>
						<li> <a href="{{route('serviceHome')}}"><i class="bx bx-right-arrow-alt"></i>Service List</a></li>
					</ul>
				</li>

				<!--Manage Service  -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="fadeIn animated bx bx-user-check"></i>
						</div>
						<div class="menu-title"> Manage About</div>
					</a>
					<ul>
						<li> <a href="{{route('aboutHome')}}"><i class="bx bx-right-arrow-alt"></i>About</a></li>
						<li> <a href="{{route('SkillAdd')}}"><i class="bx bx-right-arrow-alt"></i>Add Skill</a></li>
						<li> <a href="{{route('Skill')}}"><i class="bx bx-right-arrow-alt"></i>Skill List</a></li>
					</ul>
				</li>

				

				<!--Manage Setting  -->
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-cogs"></i>
						</div>
						<div class="menu-title">Manage Setting</div>
					</a>
					<ul>
						<li> <a href="{{route('GetSetting')}}"><i class="bx bx-right-arrow-alt"></i>All Settings</a></li>
					</ul>
				</li>



			</ul>
		</div>
