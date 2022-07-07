@extends('layout.master')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<style>
    .row-create-laundry {
        padding-top: 20px;
    }

    .card-laundry-type {
        border: none !important;
    }

    .row-laundry-type > .col-6,
    .row-laundry-type-2 > .col-6 {
        padding-right: 0.25rem;
        padding-left: 0.25rem;
    }

    .row-laundry-type {
        padding-top: 30%;
    }
</style>
@endpush
@section('content')
    <div class="main-content--service">
        <div class="container">
            <div class="row row-header">
                <div class="col">
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-start">
                            <a href="{{ route('laundry.index') }}">
                                <img src="{{ asset('images/arrow-left.png') }}" class="hamburger-icon" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-create-laundry">
                <div class="col">
                    <p class="text-center">Choose Laundry Type</p>

                    <div class="container">
                        <div class="row row-laundry-type mb-2">
                            <div class="col-6">
                                <div class="card card-flush card-laundry-type">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('images/iron-icon.png') }}" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <h4 class="mt-3 mb-0 text-center" style="font-weight: bold;">Iron Only</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-flush card-laundry-type">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('images/wet-laundry-icon.png') }}" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <h4 class="mt-3 mb-0 text-center" style="font-weight: bold;">Wet Laundry</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-laundry-type-2">
                            <div class="col-6">
                                <div class="card card-flush card-laundry-type">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('images/dry-laundry-icon.png') }}" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <h4 class="mt-3 mb-0 text-center" style="font-weight: bold;">Dry Laundry</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card card-flush card-laundry-type">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('images/complete-laundry-icon.png') }}" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <h4 class="mt-3 mb-0 text-center" style="font-weight: bold;">All in One</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.bottom-sheet')
@endsection