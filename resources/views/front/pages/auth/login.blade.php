@extends("front.layouts.layout")

@section('tabTitle')
    Login
@endsection

@section('pageTitleFirstWord')
    Login
@endsection
@section('slug')
    login
@endsection

@section("content")

    <div>

        <div class="row justify-content-center">
            <div id="login-box" class="col-xl-4 col-lg-6 col-sm-10 wow fadeInUp">
                @if(app('request')->input('fromAppointment'))
                    @php($fromAppointment = 1)
                @else
                    @php($fromAppointment = 0)
                @endif
                <form action="{{route('login', ['fromAppointment' => $fromAppointment])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value=" {{old('email')}} "/>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"/>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn-default" >Login</button>
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-3">
                    <p class="mb-0">Don't have an account? You can <a href="{{route('register', ['fromAppointment' => $fromAppointment])}}">register</a>.</p>
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
                @if (session('error-msg'))
                    <div class="alert alert-danger">
                        <p class="mb-0">{{session('error-msg')}}</p>
                    </div>
                @endif
            </div>
        </div>

    </div>


@endsection
