	@include('_includes.header');

	<!--	Banner	-->
	<div data-bs-parallax-bg="true" id="banner">
		<div class="container">
			<div class="row text-right">
				<div class="col banner-head text-center">
					<h1>Technology Re-defined</h1>
					<h4>LEARN - GROW - EXPLORE</h4>
				</div>
			</div>
			<h2 class="text-center text-white">Our Schools:</h2>
			<div class="row text-center">
				<div class="col">
					<div class="banner-schools">
						<div class="banner-schools-inner shadow-light">
							<p class="text-center">Programming</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="banner-schools">
						<div class="banner-schools-inner shadow-light">
							<p class="text-center">Design</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="banner-schools">
						<div class="banner-schools-inner shadow-light">
							<p class="text-center">Business</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="banner-schools">
						<div class="banner-schools-inner shadow-light">
							<p class="text-center">Entrepreneurship</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="banner-schools">
						<div class="banner-schools-inner shadow-light">
							<p class="text-center">Cinematography</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col">
					<div class="banner-sub">
						<h3>World-Class Programs Built With Industry Experts</h3>
						<p>Complete projects and real life applications</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--	Banner -->

	<!--	Why Visit	-->
	<div class="why-visit">
		<div class="container">
			<div class="row">
				<div class="col">
					<iframe class="" width="500" height="350" src="https://www.youtube.com/embed/fJopp9RlPJc" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col text">
					<h2>Why You should visit OAcademy</h2>
					<p>First-Class Trainers, Interactive Content and Measurable Progress</p>
					<div class="row">
						<div class="col index-get-started">
							<a href="#" class="">
								<button class="btn shadow-light">Get Started</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--	Redesign the future	-->
	<div style="background: rgba(128, 128, 128, 0.13)">
		<div class="container redesign">
			<h1 class="text-center">Redesign the future</h1>
			<h5 class="text-center">Learn a new skill today</h5>
			<div class="row">
				@foreach($schools as $school)
				<div class="col-md-4 ">
					<div class="courses courses-1 shadow-light" style="background-image: url({{asset('storage/'.json_decode($school->page_content)->schoolBanner)}})">
						<h3>{{$school->school_name}}</h3>
						<a href="#">
							<a href="{{url('school/'.$school->id)}}" class="btn courses-get-started courses-get-started-1">
								Get Started
							</a>
						</a>
					</div>
				</div>
				@endforeach
				
			</div>
			
		</div>
	</div>

		@include('_includes.footer');

