@extends('layouts.auth')

@section('title', 'Trocar senha')

@section('main')
    {!! Form::open(['url' => 'admin/trocar-senha', 'method' => 'POST', 'data-parsley-validate', 'data-parsley-errors-messages-disabled']) !!}
        @include('admin.alert')

        <input type="hidden" name="token" value="{{ $token }}">

        <fieldset>
            <legend>Trocar senha</legend>

            <div class="form-group">
                {!! Form::label('username', 'Usuário', ['class' => 'control-label']) !!} <small>(obrigatório)</small>
                <div>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        {!! Form::text('username', Input::old('username'), ['required', 'autofocus', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Senha nova', ['class' => 'control-label']) !!} <small>(mín.: 8 caracteres, obrigatório)</small>
                <div>
                    {!! Form::password('password', ['minlength' => 8, 'maxlength' => 16, 'required', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Confirme a senha nova', ['class' => 'control-label']) !!} <small>(obrigatório)</small>
                <div>
                    {!! Form::password('password_confirmation', ['required', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div>
                    {!! Form::submit('Trocar', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop
