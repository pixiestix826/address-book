<h1>Your Contacts</h1>

@foreach($contact as $contact)
    <li>
        <span>{{ $contact->name }}</span>
        <span>{{ $contact->address }}</span>
        <span>{{ $contact->phone }}</span>
    </li>
        <button><a href="#">Edit Contact</a></button>
        <button><a href="#">Delete Contact</a></button>
@endforeach

<a href="{{ route('contacts.create') }}">Create A New Contact</a>
