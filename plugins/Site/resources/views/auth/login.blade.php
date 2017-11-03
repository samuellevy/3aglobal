@extends('layouts.auth')

@section('title', 'Entrar')

@section('main')
    {!! Form::open(['url' => 'admin/entrar', 'method' => 'POST', 'data-parsley-validate', 'data-parsley-errors-messages-disabled']) !!}
        @include('admin.alert')

        <fieldset>
            <legend>Entrar</legend>

            <div class="form-group">
                {!! Form::label('username', 'Usuário', ['class' => 'control-label']) !!}
                <div>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        {!! Form::text('username', Input::old('username'), ['required', 'autofocus', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Senha', ['class' => 'control-label']) !!}
                <div>
                    {!! Form::password('password', ['required', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    {!! Form::hidden('remember', false) !!}
                    <label>
                        {!! Form::checkbox('remember') !!} Mantenha-me conectado
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div>
                    {!! Form::submit('Entrar', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <a href="{{ url('admin/recuperar-senha') }}">Esqueceu sua senha?</a>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop
