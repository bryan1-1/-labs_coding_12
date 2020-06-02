
	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@foreach ($logo as $logo)
				<img  src="{{asset('storage/'.$logo->url)}}" alt="">
				@endforeach
			@foreach ($baner->slice(0,1) as $ban)
			<p>{{$ban->slogan}} </p>
			@endforeach
				
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($baner->slice(0,2) as $baner)
			<div class="item  hero-item" data-bg="{{asset('storage/'.$baner->url)}} "></div>
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->