@component('mail::message')

<strong>Email: </strong>{{ $data['email'] }}

<strong>Message</strong>

{{ $data['message'] }}

Thanks,<br>
{{ $data['name'] }}
@endcomponent
