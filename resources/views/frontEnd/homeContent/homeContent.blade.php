@extends('frontEnd.master')


@section('homeContent')

@include('frontEnd.includes.slider')
</section>
<!-- END SLIDESHOW -->
@include('frontEnd.includes.abouts')
<!-- START CAPTION -->
@include('frontEnd.includes.services')
@include('frontEnd.includes.passion')
<!-- END CAPTION -->

<!-- START ABOUT -->


@include('frontEnd.includes.protpholio')
<!-- END ABOUT -->

<!-- START TEAM -->

@include('frontEnd.includes.members')
<!-- END TEAM -->

<!-- START SERVICES -->
<!-- END SERVICES -->

<!-- START PORTFOLIO -->


<!-- END PORTFOLIO -->

<!-- START QUOTES -->

@include('frontEnd.includes.testimonial')
<!-- END QUOTES -->

<!-- START PACKAGE -->

@include('frontEnd.includes.pricing')



@endsection