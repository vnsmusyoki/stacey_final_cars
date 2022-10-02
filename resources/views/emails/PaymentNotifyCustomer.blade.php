@component('mail::message')
    # Hi {{ $receiverone }}
    Message From {{ $senderone }}
    {{ $messageone }}
    Thanks
    {{ config('app.name') }}
@endcomponent
