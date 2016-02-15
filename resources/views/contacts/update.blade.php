@extends('templates.main')
@section('content')

<h1>{{ $contact->name }}</h1>
<p>{{ $contact->name }}</p>
<p>{{ $contact->name }}</p>

<a href="{{ route('contacts.index') }}">Return To Address Book</a>
<a href="{{ route('contacts.edit', $contact->id) }}">Edit Contact</a>

<p>
    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['contacts.destroy', $contact->id]
        ]) !!}
    {!! Form::submit('Delete this contact?', ['class' => 'button']) !!}
    {!! Form::close() !!}
</p>

@endsection
