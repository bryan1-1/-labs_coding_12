@foreach ($map->slice(0,1) as $map)
    

<div class="map" id="map-area">
<iframe id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.693144298493!2d4.339036315916256!3d50.855366365986335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xc7799151146ebf77!2s{{$map->location}}!5e0!3m2!1sfr!2sbe!4v1589375182780!5m2!1sfr!2sbe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
</div>
@endforeach