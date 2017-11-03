@extends('layouts.admin')

@section('title', 'Usuário')

@section('main')
    {!! Form::model($user, [
            'url' => 'admin/usuarios/' . $user['id'], 'method' => 'PUT', 'class' => 'form',
            'data-parsley-validate', 'data-parsley-errors-messages-disabled',
            'data-parsley-trigger-after-failure' => 'change'
    ]) !!}
        @include('admin.alert')

        <?php $disabledIfSameUser = Auth::user()->id === $user['id'] ? ['disabled' => true, 'title' => 'Desabilitado por ser o usuário atual'] : [] ?>

        <fieldset>
            <legend>Usuário</legend>

            <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                    <div>
                        <div class="checkbox">
                            {!! Form::hidden('active', false) !!}
                            <label>
                                {!! Form::checkbox('active', true, null, $disabledIfSameUser) !!} Ativo
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <div>
                        <div class="checkbox">
                            {!! Form::hidden('receive_notifications', false) !!}
                            <label>
                                {!! Form::checkbox('receive_notifications') !!} Receber notificações por e-mail
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {!! Form::label('group_id', 'Grupo', ['class' => 'control-label']) !!} <small>(obrigatório)</small>
                    <div>
                        {!! Form::select('group_id', $userGroups, Input::old('group_id'), ['required', 'class' => 'form-control selectpicker'] + $disabledIfSameUser) !!}
                    </div>
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('username', 'Usuário', ['class' => 'control-label']) !!} <small>(mín.: 5, máx.: 64, único e obrigatório)</small>
                    <div>
                        {!! Form::text('username', Input::old('username'), ['minlength' => 5, 'maxlength' => 64, 'required', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {!! Form::label('password', 'Senha', ['class' => 'control-label']) !!} <small>(mín. 8 e máx. 16 caracteres)</small>
                    <div>
                        {!! Form::password('password', ['minlength' => 8, 'maxlength' => 16, 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('password_confirmation', 'Confirme a senha', ['class' => 'control-label']) !!}
                    <div>
                        {!! Form::password('password_confirmation', ['minlength' => 5, 'maxlength' => 16, 'data-parsley-equalto' => '#password', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!} <small>(máx.: 64 caracteres)</small>
                    <div>
                        {!! Form::text('name', Input::old('name'), ['maxlength' => 64, 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('email', 'E-mail', ['class' => 'control-label']) !!} <small>(máx.: 64 caracteres, obrigatório)</small>
                    <div>
                        {!! Form::email('email', Input::old('email'), ['maxlength' => 64, 'required', 'class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-sm-6">
                    <label class="control-label">Notificações de contatos</label>
                    <div>
                        @foreach ($contactSubjects as $contactSubject)
                        <div class="checkbox">
                            <label>{!! Form::checkbox('user_contact_subjects[]', $contactSubject->id, in_array($contactSubject->id, $userContactSubjects)) !!} {{ $contactSubject->name }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop
