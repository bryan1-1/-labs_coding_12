@extends('index.doctype')

@section('content')
	@include('serv.header')
	@include('index.service')
	@include('serv.feature')
	@include('serv.service')
	@include('serv.newsletter')
	@include('index.contact')
	@include('index.footer')
@endsection