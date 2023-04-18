@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Главная страница</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">

            </div>
            <h3 class="fs-2">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">

            </div>
            <h3 class="fs-2">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>

        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">

            </div>
            <h3 class="fs-2">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
        </div>
    </div>

@endsection
