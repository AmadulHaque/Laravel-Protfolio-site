@extends('backend.master')
@section('content')
	@php
	$setting =DB::table('settings')->first();
	@endphp
	<!--start row-->

@endsection()
