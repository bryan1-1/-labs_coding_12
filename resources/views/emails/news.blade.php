@component('mail::message')
# A Hello 
a new work has been released check it out!!!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
