@extends('layouts.app')

@section('main')
    <main id="main">

        <!-- ======= Clients Section ======= -->
        @include('sections.clientSection')
        <!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        @include('sections.about')
        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        @include('sections.whyUs')
        <!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        @include('sections.skills')
        <!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        @include('sections.services')
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        @include('sections.callToActionSection')
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        @include('sections.portfolio')
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        @include('sections.team')
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        @include('sections.pricing')
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        @include('sections.faq')
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        @include('sections.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
