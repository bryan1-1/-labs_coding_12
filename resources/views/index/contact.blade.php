	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				@foreach ($contact->slice(0,1) as $contact)
					
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$contact->title}}</h2>
					</div>
					<p>{{$contact->description}} </p>
					<h3 class="mt60">{{$contact->subtitle}}</h3>
					<p class="con-item">{{$contact->country}} <br> {{$contact->street}} </p>
					<p class="con-item">{{$contact->number}}</p>
					<p class="con-item">{{$contact->email}} </p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form action="/question" method="POST" class="form-class" id="con_form">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">{{$contact->button}} </button>
							</div>
						</div>
					</form>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- Contact section end-->