@extends('templates.main')
@section('content')

<h1>Address Book</h1>

<div>
    <button type="button">
        <a href="{{ route('contacts.index') }}">View Address Book</a>
    </button>
    <button type="button">
        <a href="{{ route('contacts.create') }}">Create A New Contact</a>
    </button>
</div>

@endsection
