@if (Session::has('alert'))
    <div class="alert alert-{{ Session::get('alert.level') }}" role="alert">
        {!! Session::get('alert.message') !!}
    </div>
@endif

@if (Session::has('status'))
    <div class="alert alert-info" role="alert">
        {!! Session::get('status') !!}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
    @if ($errors->count() > 1)
        <ul>
        @foreach ($errors->all('<li>:message</li>') as $error)
            {!! $error !!}
        @endforeach
        </ul>
    @else
        {!! $errors->first() !!}
    @endif
    </div>
@endif
