<table>
    @if (count($contact->name) > 0)
    <tr>
        <th style="text-align: right; height: 20px; padding-right: 10px;">Nome:</th>
        <td>{{ $contact->name }}</td>
    </tr>
    @endif
    <tr>
        <th style="text-align: right; height: 20px; padding-right: 10px;">E-mail:</th>
        <td><a href="mailto:{{ $contact->email }}" target="_blank">{{ $contact->email }}</a></td>
    </tr>
    <tr>
        <th style="text-align: right; height: 20px; padding-right: 10px;">Unidade:</th>
        @if (count($contact->unit) > 0)
        <td>{{ $contact->unit->name }}</td>
        @else
        <td>Internacional</td>
        @endif
    </tr>
    @if (count($contact->department) > 0)
    <tr>
        <th style="text-align: right; height: 20px; padding-right: 10px;">Departamento:</th>
        <td>{{ $contact->department->name }}</td>
    </tr>
    @endif
    @if (count($contact->subject) > 0)
    <tr>
        <th style="text-align: right; height: 20px; padding-right: 10px;">Assunto:</th>
        <td>{{ $contact->subject->name }}</td>
    </tr>
    @endif
    <tr>
        <th style="text-align: right; height: 20px; padding-right: 10px; vertical-align: top;">Mensagem:</th>
        <td>{!! nl2br($contact->message) !!}</td>
    </tr>
</table>
