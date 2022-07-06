@extends('layout.master')
{{-- begin::style --}}
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<style>
    .header-dashboard {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 0;
    }

    .title-section {
        font-size: 10px;
        
    }

    .row-service-dashboard {
        margin-top: 40px !important;
    }

    .card-service-dashboard {
        width: 140px;
        height: 160px !important;
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
    }

    .title-section {
        margin-bottom: 0 !important;
    }
    
    .card-service-main {
        display: flex;
        width: 120%;
    }

    .card-service-dashboard {
        margin-right: 10px;
    }
</style>
@livewireStyles
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
        </div>
    </div>
@endsection

{{-- begin:scripts --}}
@livewireScripts
{{-- end:scripts --}}