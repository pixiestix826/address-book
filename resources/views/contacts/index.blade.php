@extends('template.main')
@section('content')

<h1>Your Contacts</h1>

@foreach($contact as $contact)
    <li>
        <span>{{ $contact->name }}</span>
        <span>{{ $contact->address }}</span>
        <span>{{ $contact->phone }}</span>
    </li>
    <button><a href="{{ route('contacts.edit', $contact->id) }}">Edit Contact</a></button>
    <button><a href="{{ route('contacts.update', $contact->id) }}">Delete Contact</a></button>
@endforeach

<button type="button" class="create-btn">
    <a href="{{ route('contacts.create') }}">Create A New Contact</a>
</button>

@endsection
