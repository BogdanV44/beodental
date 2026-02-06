@extends("front.layouts.layout")

@section('tabTitle') Appointments @endsection

@section('pageTitleFirstWord') Appointments @endsection
@section('slug') appointments @endsection

@section('style')
    <link href="{{asset('css/filament/filament/app.css')}}" rel="stylesheet" media="screen" />
    @livewireStyles()
    @filamentStyles()
@endsection

@section("content")
    <!-- Modals Start -->
    <x-cancel-appointment-modal></x-cancel-appointment-modal>
    <!-- Modals End -->

    <!-- Page Appointments Start -->
    <div class="page-appointments">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    @livewire('appointments-list')
                </div>
            </div>
        </div>
    </div>
    <!-- Page Appointments End -->
@endsection

@section('script')
    @livewireScripts()
    @filamentScripts()
    <script type="text/javascript" src="{{asset('js/pages/appointments.js')}}"></script>
@endsection
