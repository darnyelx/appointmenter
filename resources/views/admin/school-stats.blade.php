	@include('_includes.header-admin');


	<!--	Header	-->
	<nav class="navbar navbar-dark navbar-expand-md oghas-nav fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#" id="oghas-logo"></a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
				<span class="sr-only">
					Toggle navigation
				</span>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-around navcol1-mobile" id="navcol-1" style="margin-bottom: 5px;">
				<ul class="nav navbar-nav">
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#">OAGRIC</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#" target="_blank">OFASHION</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#" target="_blank">OACADEMY</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" href="#" target="_blank">ABOUT US</a>
					</li>

				</ul>
				<form class="form-inline" method="post" id="header-subscribe">
					<div class="input-group">
						<input type="email" name="email" class="form-control form-control-sm oghas-input" placeholder="Subscribe for newsletter" aria-describedby="basic-addon">
						<div class="input-group-append">
							<button class="btn btn-primary btn-sm oghas-input" type="submit" style="">
								<i class="fa fa-envelope-o"></i>
							</button>
						</div>
					</div>
				</form>
				<span class="navbar-text header-social">
					<a class="text-monospace text-dark" href="#facebook.com/oghastech" target="_blank">
						<i class="fa fa-facebook-square"></i>
					</a>
					<a class="text-monospace text-dark" href="#twitter.com/oghastech" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					<a class="text-monospace text-dark" href="#youtube.com/oghastech" target="_blank">
						<i class="fa fa-youtube"></i>
					</a>
				</span>
				<form class="form-inline">
					<input class="form-control form-control-sm oghas-input" type="text" name="search" placeholder="Search" id="header-search">
				</form>
			</div>
		</div>
	</nav>
	<!--	Header	-->

	<div class="container school-stats">
		<?php $sn = 1 ?>
		<table class="table table-bordered table-striped" style="overflow:auto;">
			<thead>
				<tr class="thead-dark">
					<th>SN</th>
					<th>School</th>
					<th>Explanation</th>
					<th>Images</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($schools as $school)
				<tr>
					<td>{{$sn++}}</td>
					<td>{{$school->school_name}}</td>
					<td>
						<p class="">
							{{json_decode($school->page_content)->title}}
						</p>
					</td>
					<td>
						<img src="{{url('storage/'.json_decode($school->page_content)->schoolBanner)}}" style="width: 50px;">
					</td>
					<td>
						<div class="d-flex flex-wrap justify-content-left ">
							@if($school->status == 1)
								<a href="{{url('admin/school/deactivate/'.$school->id)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">De-Activate</a href="">
							@elseif($school->status == 2)
								<a href="{{url('admin/school/activate/'.$school->id)}}" class="btn btn-success btn-sm" style="border-radius: 0px;">Activate</a href="">
							@endif

							@if($school->promote == 1)
								<a href="{{url('admin/unpromote/schools/'.$school->id)}}" class="btn btn-success btn-sm" style="margin-left: 5px;border-radius: 0px;">Unpromote</a href="">
							@elseif($school->promote == 2)
								<a href="{{url('admin/promote/schools/'.$school->id)}}" class="btn btn-success btn-sm" style="margin-left: 5px;border-radius: 0px;">Promote</a href="">
							@endif
							<a href="{{url('admin/school/edit/'.$school->id)}}" class="btn btn-info btn-sm" style="margin-left: 5px;border-radius: 0px;">Edit</a href="">
							<a href="{{url('admin/school/courses/'.$school->id)}}" class="btn btn-dark btn-sm" style="margin-left: 5px;border-radius: 0px;">View Courses</a href="">
							<a href="{{url('admin/course/create')}}" class="btn btn-dark btn-sm" style="margin-left: 5px;border-radius: 0px;">Add Course</a href="">
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@include('_includes.footer');
