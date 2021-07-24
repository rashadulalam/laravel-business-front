@extends('layout.app')
@section('page_title', 'About us')

@section('content')

    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <h1 class="h4 fw-bolder">About us</h1>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium blanditiis cum dolore dolorum, eveniet, laboriosam nam necessitatibus nobis odit perspiciatis quasi quibusdam, quisquam quod quos ratione reiciendis sed sunt veniam.</p>
                </div>

            </div>
        </div>
    </section>
    @include('layout.testimonial')




@endsection
