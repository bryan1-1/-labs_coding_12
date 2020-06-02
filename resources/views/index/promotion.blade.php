<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            @foreach ($ready->slice(0,1) as $ready)
                
            <div class="col-md-9">
                <h2>{{$ready->title}}</h2>
                <p>{{$ready->subtitle}} </p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="" class="/contacts">{{$ready->button}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Promotion section end-->
