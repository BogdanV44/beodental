@extends("front.layouts.layout")

@section('tabTitle') Register @endsection

@section('pageTitleFirstWord') Register @endsection
@section('slug') register @endsection

@section("content")
    <div>

        <div class="row justify-content-center">
            <div id="login-box" class="col-xl-4 col-lg-6 col-sm-10 wow fadeInUp">
                @if(app('request')->input('fromAppointment'))
                    @php($fromAppointment = 1)
                @else
                    @php($fromAppointment = 0)
                @endif
                <form action="{{route('register', ['fromAppointment' => $fromAppointment])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name *</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name *</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone *</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password *</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"/>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation " class="form-label">Confirm password *</label>
                        <input type="password" class="form-control" id="password_confirmation " name="password_confirmation" value="{{ old('password_confirmation') }}" />
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn-default" >Register</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-3">
                    <p class="mb-0">Already have an account? You can <a href="{{route('login', ['fromAppointment' => $fromAppointment])}}">login</a>.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-xl-4 col-lg-6 col-sm-10 wow fadeInUp">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
