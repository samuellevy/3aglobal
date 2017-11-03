@extends('layouts.admin')

@section('title', 'Contato')

@section('main')
    @include('admin.alert')

    <table class="table show">
        <caption>Contato</caption>

        <tr>
            <th>Data</th>
            <td>{{ $contact->created_at->format('d/m/Y \\à\\s H:i') }}</td>
        </tr>
        <tr>
            <th>Endereço IP</th>
            <td>{{ $contact->ip_address }}</td>
        </tr>
        @if (count($contact->name) > 0)
        <tr>
            <th>Nome</th>
            <td>{{ $contact->name }}</td>
        </tr>
        @endif
        <tr>
            <th>E-mail</th>
            <td><a href="mailto:{{ $contact->email }}" target="_blank">{{ $contact->email }}</a></td>
        </tr>
        <tr>
            <th>Unidade</th>
            @if (count($contact->unit) > 0)
            <td>{{ $contact->unit->name }}</td>
            @else
            <td>Internacional</td>
            @endif
        </tr>
        @if (count($contact->department) > 0)
        <tr>
            <th>Departamento</th>
            <td>{{ $contact->department->name }}</td>
        </tr>
        @endif
        @if (count($contact->subject) > 0)
        <tr>
            <th>Assunto</th>
            <td>{{ $contact->subject->name }}</td>
        </tr>
        @endif
        <tr>
            <th>Mensagem</th>
            <td>{!! nl2br($contact->message) !!}</td>
        </tr>
    </table>
@stop
