@extends("front.layouts.layout")

@section('tabTitle')
    Booking
@endsection
@section('pageTitleFirstWord')
    Make An
@endsection
@section('pageTitleSecondWord')
    Appointment
@endsection
@section('slug')
    Make An Appointment
@endsection

@section("content")
    <!-- Page Appointment Start -->
    <div class="page-book-appointment">
        <div class="container">
            <div class="book-appointment-form">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">booking</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7">
                        @if(!Auth::check())
                            <div class="text-center">
                                <p>To book an appointment please log in.</p>
                                <a href="{{route('login', ['fromAppointment' => 1])}}">Login</a>
                            </div>
                        @else
                            <div class="appointment-form wow fadeInUp">
                                <!-- Form Start -->
                                <form id="appointmentBookingForm" action="{{route('appointment.store')}}" method="POST"
                                      enctype="multipart/form-data" data-toggle="validator">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-12 mb-4">
                                            <select name="services" class="form-control form-select" id="services"
                                                    required>
                                                <option value="" disabled selected>select service</option>
                                                @foreach($data['services'] as $service)
                                                    <option value="{{$service->service_id}}">{{$service->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-4">
                                            <select name="dentists" id="dentists" class="form-control form-select"
                                                    required>
                                                <option value="" disabled selected>choose dentist</option>
                                                @foreach($data['dentists'] as $dentist)
                                                    <option value="{{$dentist->dentist_id}}">{{$dentist->first_name}} {{$dentist->last_name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-3">
                                            <select name="dates" id="dates" class="form-control form-select">
                                                {{--                                                <option value="" disabled selected>choose date</option>--}}
                                                {{--                                                @foreach($data['dates'] as $date)--}}
                                                {{--                                                    <option value="{{$date['value']}}" >{{$date['name']}}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                            <p class="mt-1 mb-0 text-start" style="margin-left: 20px">Do you have a
                                                specific date in mind? You can <a href="{{route('contact')}}">contact
                                                    us</a>.</p>
                                        </div>

                                        <div class="form-group col-md-12 mb-5">
                                            <select name="appointment_hours" id="appointment_hours"
                                                    class="form-control form-select">
                                                {{--                                                <option value="" disabled selected>choose appointment time</option>--}}
                                                {{--                                                @foreach($data['appointmentHours'] as $hour)--}}
                                                {{--                                                    <option value="{{$hour->hour_id}}" >{{$hour->name}} PM</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>

                                        </div>

                                        {{--                                        <div class="form-group col-md-12 mb-5">--}}
                                        {{--                                            <input type="date" name="date" class="form-control" id="date" required>--}}
                                        {{--                                            <div class="help-block with-errors"></div>--}}
                                        {{--                                        </div>--}}

                                        @if(Auth::user()->fk_role_id > 2)
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-default">book appointment</button>
                                                <div id="msgSubmit" class="h3 hidden"></div>
                                            </div>
                                        @else
                                            <div class="col-md-12">
                                                <p>Booking through client form isn't available for administrator
                                                    accounts. Please switch to <a href="{{url('/admin')}}">Admin</a>
                                                    panel.</p>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                                <!-- Form End -->
                                <div class="row justify-content-center mb-5">
                                    <div class="col-xl-10 col-lg-10 col-sm-10 wow fadeInUp">
                                        @if ($errors->any())
                                            <div class="alert alert-danger mt-3">
                                                @foreach($errors->all() as $error)
                                                    <p class="mb-0">{{ $error }}</p>
                                                @endforeach
                                            </div>
                                        @elseif(session('success'))
                                            <div class="alert alert-success mt-3">
                                                <p class="mb-0">{{ session('success') }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Appointment End -->

    <!-- Section Why Choose Us  -->
    @include('front.partials.why-choose-us');

    <!-- Section Testimonials  -->
    @include('front.partials.testimonials');
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('js/pages/appointments.js')}}"></script>
@endsection
