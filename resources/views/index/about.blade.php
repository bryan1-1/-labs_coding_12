

	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					{{-- <div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-023-flask"></i>
							</div>
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-011-compass"></i>
							</div>
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div> --}}
					<!-- single card -->
					@foreach ($service->shuffle()->slice(0,3) as $service)
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$service->icon->name}}"></i>
							</div>
							<h2>{{$service->title}}</h2>
							<p>{{$service->description}}</p>
						</div>
					</div>
					@endforeach
					{{-- <div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		<!-- card section end-->

		<?php
		$phrase  = "You should eat fruits, (vegetables), and fiber every day.";
$healthy = ["<span>","</span>"];
$yummy   = ["(", ")",];

$newPhrase = str_replace($yummy, $healthy, $phrase);
		?>

		<!-- About contant -->
		@foreach ($presentation->slice(0,1) as $pres)
			
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{!!str_replace($yummy,$healthy, $pres->title)!!}</h2>
					{{-- <h2>Get in <span>the Lab</span> and discover the world</h2> --}}
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$pres->description}} </p>
					</div>
					<div class="col-md-6">
						<p>{{$pres->description2}} </p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">{{$pres->button}} </a>
				</div>
				@endforeach
				<!-- popup video -->
				@foreach ($video as $video)
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{asset('storage/'.$video->thumbnail)}}" alt="">
							<a href="{{$video->url}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	
	<!-- About section end -->
