@extends('template.main')
@section('content')



<h1>Edit Contact</h1>

{!! Form::model($contact, [
    'method' => 'PATCH',
    'route' => ['contacts.update', $contact->id]
    ]) !!}

    <div class="form-name">
        {!! Form::label('name', 'Name:', ['class' => 'label']) !!}
        {!! Form::text('name', null, ['class' => 'input']) !!}
    </div>
    <div class="form-address">
        {!! Form::label('address', 'Address:', ['class' => 'label']) !!}
        {!! Form::text('address', null, ['class' => 'input']) !!}
    </div>
    <div class="form-phone">
        {!! Form::label('phone', 'phone:', ['class' => 'label']) !!}
        {!! Form::text('phone', null, ['class' => 'input']) !!}
    </div>

{!! Form::submit('Create New Contact', ['class' => 'button']) !!}
{!! Form::close() !!}

<a href="{{ route('contacts.index') }}" class="button">Return To Address Book</a>


@endsection
