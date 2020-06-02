<?php
$phrase  = "You should eat fruits, (vegetables), and fiber every day.";
$healthy = ["<span>","</span>"];
$yummy   = ["(", ")",];

$newPhrase = str_replace($yummy, $healthy, $phrase);
?>
<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($prime as $primes)
            <h2>{!!str_replace($yummy,$healthy, $primes->title)!!}</h2>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 features">
           @foreach ($service->reverse()->slice(0,3) as $serv) 
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{$serv->title}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="{{$serv->icon->name}}"></i>
                    </div>
                </div>
            @endforeach 
            <!-- feature item -->
                <!-- feature item -->
                {{-- <div class="icon-box light left">
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-019-coffee-cup"></i>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                    <div class="icon">
                        <i class="flaticon-020-creativity"></i>
                    </div>
                </div>--}}
            {{-- </div>  --}}
        </div> 
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
         
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                 @foreach ($service->reverse()->slice(0,3) as $service)
                     
               
                <div class="icon-box light">
                    <div class="icon">
                        <i class="{{$service->icon->name}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->title}}</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                @endforeach
                  {{--
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-025-imagination"></i>
                    </div>
                    <div class="service-text">
                        <h2>Projects online</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div>
                <!-- feature item -->
                <div class="icon-box light">
                    <div class="icon">
                        <i class="flaticon-008-team"></i>
                    </div>
                    <div class="service-text">
                        <h2>SMART MARKETING</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="text-center mt100">
    @foreach ($prime as $item)
        <a href="" class="site-btn">{{$item->button}} </a>
    @endforeach
        </div>
    </div>
</div>
<!-- features section end-->