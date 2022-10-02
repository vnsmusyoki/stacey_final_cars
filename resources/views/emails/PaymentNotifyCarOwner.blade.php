@component('mail::message')
    # Hi {{ $receivertwo }}
    Message From {{ $sendertwo }}
    {{ $messagetwo }}
    Thanks
    {{ config('app.name') }}
@endcomponent
