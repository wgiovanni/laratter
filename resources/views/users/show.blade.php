@extends('layouts.app')

@section('content')
<h1>{{ $user->name }}</h1>
@foreach($user->messages as $message)
	@include('messages.message')
@endforeach
@endsection