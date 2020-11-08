@component('mail::message')
# Hi **{{$name}}**

Thanks for checking out ,we hope our products can make your morning routine a little more enjoyable  ,  {{-- break line --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent