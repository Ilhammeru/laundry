@extends('layout.master')
{{-- begin::style --}}
@push('styles')
    
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<style>
    .header-dashboard {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 0;
    }

    .title-section {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 0 !important;
    }

    .row-service-dashboard,
    .row-active-order-dashboard {
        margin-top: 40px !important;
    }

    .card-service-dashboard {
        width: 120px;
        height: 180px !important;
        margin-right: 10px;
        -webkit-box-shadow: 5px 2px 18px -6px rgba(0,0,0,0.75); 
        box-shadow: -5px 2px 18px -12px rgba(0,0,0,0.75);
        border: none !important;
    }

    .service-title {
        margin-top: 30px;
        font-weight: bold;
    }

    .card-service {
        max-width: 100%;
        overflow-x: scroll;
        overflow-y: hidden;
        align-items: center;
        padding: 10px 0;
    }

    .card-service::-webkit-scrollbar {
        display: none;
    }
    
    .card-service-main {
        display: flex;
        width: 110%;
    }

    .card-current > .card-body {
        padding: 5px 15px;
    }

    .helper-detail-current {
        font-size: 10px;
        color: #70B9F7;
    }

    .card-current {
        border-radius: 15px !important;
        border: none !important;
    }

    .helper-logo {
        margin-right: 20px;
    }

    .symbol {
        flex-shrink: 0;
        display: inline-block;
        position: relative;
        border-radius: 0.5rem;
    }

    .symbol-img {
        width: 30px;
        height: 30px;
    }

    .btn-see-all {
        background-color: #68dde6 !important;
        border-radius: 25px !important;
    }
</style>
@livewireStyles
@endpush
{{-- end::style --}}
@section('content')
    <div class="main-content--dashboard">
        <div class="container">
            <div class="row row-header-dashboard">
                <h3 class="header-dashboard">Welcome, Ilham!</h3>
            </div>

            <div class="row row-service-dashboard">
                <div class="col">
                    <p class="title-section">Choose Service</p>
                    <div class="card-service">
                        <div class="card-service-main">
                            <div class="card card-service-dashboard">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('images/washing-machine.png') }}" style="width: 70px; height: auto;" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="service-title">Laundry</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-service-dashboard">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('images/cleaning-service.png') }}" style="width: 70px; height: auto;" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="service-title">Cleaning</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-service-dashboard">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('images/painting.png') }}" style="width: 70px; height: auto;" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="service-title">Painting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-active-order-dashboard">
                <div class="col">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <p class="title-section">Active Order</p>
                        {{-- <button class="btn btn-sm btn-see-all">See All</button> --}}
                    </div>
                    <div class="row mb-2 mt-2">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="{{ asset('images/empty-order.png') }}" style="width: 160px; height: auto;" alt="">
                                    <p>Dont Have Any Active Order :(</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row mb-2">
                        <div class="col">
                            <div class="card card-flush card-current">
                                <div class="card-body">
                                    <div class="detail-current d-flex align-items-center">
                                        <div class="helper-logo">
                                            <img src="{{ asset('images/active-order.png') }}" style="width: 30px; height: auto;" alt="">
                                        </div>
                                        <div>
                                            <p class="mb-0">Order No: #INV-001/2022</p>
                                            <span class="helper-detail-current">Laundry / {{ date('d F Y H:i') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
@endsection

{{-- begin:scripts --}}
@livewireScripts
{{-- end:scripts --}}