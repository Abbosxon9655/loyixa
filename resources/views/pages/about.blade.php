 
 @extends('layouts.main')

 @section('content')

  {{-- <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End --> --}}


<!--Header Start-->

<x-header name1="About us" name2="About"></x-header>
  

<!--Header End-->


 <!-- About Start -->

    @include('sections.about')

 <!-- About End -->


<!-- Team Start -->
@include('sections.team')
<!-- Team End -->

@endsection
