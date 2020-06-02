	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
						<img src="{{asset('storage/'.$article->url)}}" alt="">
							<div class="post-date">
							<h2>{{$article->date}}</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->title}}</h2>
							<div class="post-meta">
								<a href="">{{$article->author}} </a>
								@foreach ($article->tags as $log)
								<a href="">
								{{$log->pivot->name}}{{$log->name}}
							   </a>
								   @endforeach 
							<a href="">{{$article->reaction->count()}} comments</a>
							</div>
							<p>{{$article->text}} </p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{asset('storage/'.$article->authorUrl)}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->author}} <span>Author</span></h2>
								<p>{{$article->description}} </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments {{$article->reaction->count()}} </h2>
							<ul class="comment-list">
								@foreach ($article->reaction->slice(0,3) as $reaction)
									
								
								<li>
									<div class="avatar">
										<img src="{{asset('storage/'.$reaction->url)}}" alt="">
									</div>
									<div class="commetn-text">
										<h3>{{$reaction->name}}| {{$reaction->email}} | {{$reaction->subject}}</h3>
										<p>{{$reaction->message}} </p>
									</div>
								</li>
								@endforeach
								{{-- <li>
									<div class="avatar">
										<img src="img/avatar/02.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 03 nov, 2017 | Reply</h3>
										<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
									</div>
								</li> --}}
							</ul>
						</div>
						<!-- Commert Form -->
						@if (Auth::check())
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form action="/reaction" method="POST" enctype="multipart/form-data" class="form-class">
									@csrf
									<div class="row">
										<div class="col-sm-6">
											<input type="text" value="{{Auth::user()->name}} " name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" value="{{Auth::user()->email}} " name="email" placeholder="Your email">
										</div>
										<input type="hidden" value="{{Auth::user()->url}}" name="url" >
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
										<input type="hidden" name="article_id" value="{{$article->id}}">
											<textarea name="message" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						@else
						<h3 class="text-primary"><a href="{{ route('register') }}">Register now to leave a comment</a></h3>
							
						@endif
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li><a href="#">Vestibulum maximus</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="img/instagram/1.jpg" alt=""></li>
							<li><img src="img/instagram/2.jpg" alt=""></li>
							<li><img src="img/instagram/3.jpg" alt=""></li>
							<li><img src="img/instagram/4.jpg" alt=""></li>
							<li><img src="img/instagram/5.jpg" alt=""></li>
							<li><img src="img/instagram/6.jpg" alt=""></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href="">branding</a></li>
							<li><a href="">identity</a></li>
							<li><a href="">video</a></li>
							<li><a href="">design</a></li>
							<li><a href="">inspiration</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">photography</a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="img/add.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->

