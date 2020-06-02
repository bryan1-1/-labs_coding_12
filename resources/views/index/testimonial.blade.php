<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    @foreach ($testimonialTitle->slice(0,1) as $title)
                    <h2>{{$title->title}}</h2>
                    @endforeach
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonial->reverse()->slice(0,6) as $testi)
                    {{-- @if($loop->last) --}}
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>{{$testi->description}} </p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="{{asset('storage/'.$testi->url)}}" alt="">
                            </div>
                            <div class="client-name">
                            <h2>{{$testi->name}} {{$testi->lastName}}</h2>
                                <p>{{$testi->job}} </p>
                            </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                    @endforeach
                    <!-- single testimonial -->
                    {{-- <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/01.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial -->
                    <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                        <div class="client-info">
                            <div class="avatar">
                                <img src="img/avatar/02.jpg" alt="">
                            </div>
                            <div class="client-name">
                                <h2>Michael Smith</h2>
                                <p>CEO Company</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->