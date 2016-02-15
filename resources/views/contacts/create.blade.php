@extends('contacts.create')
@section('content')


<h1>Create A New Contact</h1>

{!! Form::open([
    'route' => 'contacts.store'
    ]) !!}

<div class="form-name">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-address">
    {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-phone">
    {!! Form::label('phone', 'phone:', ['class' => 'control-label']) !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Contact', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection
