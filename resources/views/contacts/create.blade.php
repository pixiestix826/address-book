@extends('contacts.create')
@section('content')


<h1>Create A New Contact</h1>

{!! Form::open([
    'route' => 'contacts.store'
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

{!! Form::submit('Create New Contact', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection
