<?php
$phrase  = "You should eat fruits, (vegetables), and fiber every day.";
$healthy = ["<span>","</span>"];
$yummy   = ["(", ")",];

$newPhrase = str_replace($yummy, $healthy, $phrase);
?>
<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            @foreach ($teamTitle as $teamt)
                
           
            <h2>{!!str_replace($yummy,$healthy, $teamt->title)!!}</h2>
            {{-- <h2>Get in <span>the Lab</span> and  meet the team</h2> --}}
            @endforeach
        </div>

        <div class="row">
           
            @foreach ($team->shuffle()->slice(0,1) as $team1)
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('storage/'.$team1->url)}}" alt="">
                    <h2>{{$team1->name}} {{$team1->lastName}} </h2>
                    <h3>{{$team1->job}} </h3>
                </div>
            </div>
            @endforeach
            @foreach ($team as $team2)
            @if($loop->first)
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('storage/'.$team2->url)}}" alt="">
                    <h2>{{$team2->name}} {{$team2->lastName}} </h2>
                    <h3>{{$team2->job}} </h3>
                </div>
            </div>
            @endif
            @endforeach
            <!-- single member -->
            @foreach ($team->shuffle()->slice(0,1) as $team3)
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('storage/'.$team3->url)}}" alt="">
                    <h2>{{$team3->name}} {{$team3->lastName}} </h2>
                    <h3>{{$team3->job}} </h3>
                </div>
            </div>
            @endforeach
        </>
    </div>
</div>
<!-- Team Section end-->