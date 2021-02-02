<div>
    @if(session()->has('message'))
        <div class="alert-message">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
        <div class="alert-error">{{session()->get('error')}}</div>
    @endif
</div>