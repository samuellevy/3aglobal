@extends('layouts.auth')

@section('title', 'Recuperar senha')

@section('main')
    {!! Form::open(['url' => 'admin/recuperar-senha', 'method' => 'POST', 'data-parsley-validate', 'data-parsley-errors-messages-disabled']) !!}
        @include('admin.alert')

        <fieldset>
            <legend>Recuperar senha</legend>

            <div class="form-group">
                <p>Enviaremos um e-mail com um link para trocar a senha.</p>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
                <div>
                    {!! Form::email('email', Input::old('email'), ['required', 'autofocus', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div>
                    {!! Form::submit('Enviar', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop
