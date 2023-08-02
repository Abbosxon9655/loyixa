@extends('layouts.main')
@section('content')

<!-- Header Start-->

    <x-header name1="Food Menu" name2="Menu"></x-header>
    
<!-- Header End-->

   <!-- Menu Start -->

    @include('sections.menu')

<!-- Menu End -->
@endsection
