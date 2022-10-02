@component('mail::message')
    # Hi {{ $receiverthree }}
    Message From {{ $senderthree }}
    {{ $messagethree }}
    Thanks
    {{ config('app.name') }}
@endcomponent
