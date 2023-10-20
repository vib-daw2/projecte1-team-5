@extends('plantilla')
@section('content')
<div class="container">  
<div class="ficha-container">

	<a href="{{ route('sells.index') }}"> Tornar</a>


	<form action="{{ route('sells.store') }}" method="POST">
	    @csrf
	       
	    <strong>Name:</strong>
	    <input type="text" name="name">
	    <input type="submit" value="desar">     
	   
	</form>



@if ($errors->any())
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>    
@endif
</div>
@endsection