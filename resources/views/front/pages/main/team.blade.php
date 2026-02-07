@extends("front.layouts.layout")

@section('tabTitle') Our Team @endsection
@section('pageTitleFirstWord')  Our @endsection
@section('pageTitleSecondWord')  Team @endsection
@section('slug') Our Team @endsection

@section("content")
    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
                @foreach($dentists as $dentist)
                    <x-single-team-member
                        :id="$dentist->dentist_id"
                        :image-name="$dentist->image_route"
                        :dentist-name="$dentist->full_name"
                        :title="$dentist->title"
                    />
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page Team End -->
@endsection



