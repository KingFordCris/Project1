@component('mail::message')
Welcome, {{$user->name}}

Greeting's from Online Scholarship Management System
Thank you for registering!

You are recieving this email because you've registered to OSMS
Please do not reply to this email. God Bless!
{{-- @component('mail::pannel', ['url' => ''])

@endcomponent --}}

@component('mail::button', ['url' => '/user/index'])
OSMS
@endcomponent

Your guide in your scholarship,<br>
{{ config('app.name') }}
@endcomponent
