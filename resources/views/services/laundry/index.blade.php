@extends('layout.master')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endpush

@include('layout.header')
@section('content')
    <div class="main-content--service">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center" style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); width: 80%;">
                        <img src="{{ asset('images/empty-laundry.png') }}" style="width: 150px; height: auto;" alt="">
                        <p class="mt-5" style="text-transform: capitalize; font-size: 20px; font-weight: bold;">Uhh :( You dont have a laundry history</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.bottom-sheet')
@endsection

@push('scripts')
<script>
    let routeCreate = "{{ route('laundry.create') }}";
    $('#bottomSheetCreate').attr('href', routeCreate);
    console.log(routeCreate);
</script>
@endpush