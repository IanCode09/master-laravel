@extends('layouts.app')

@section('content')

<h2>Product Description</h2>
<h3>{{ $product->title }}</h3>
<h3>{{ $product->price }}</h3>

@endsection
