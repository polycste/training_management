@extends('admin/layouts.master')
@section('title', 'View all courses')
@section('content')
    <style>
    .all_report  i.fa {
        display: block;
        margin-top: 50px;
        margin-bottom: 20px;
        font-size: 40px;
    }
    .all_report .col-md-3 {
        margin-bottom: 20px;
    }

    .btn-square{
        width: 14em;
        height: 14em;
    }
    .btn-square a span{
        display: block;
    }
</style>
    <div class="container">

        <h2> Courses </h2>

        @if ($courses->isEmpty())
            <p> There is no course available.</p>
        @else
            <div class="row">
                @foreach($courses as $course)

                    <div class="col-md-4">
                        <div class="course_gellary">
                            <div class="course_image">
                                <img src="{!! asset($course->course_image) !!}" alt="Course Image">
                            </div>
                            <div class="course_title">
                                <a href="{!! action('ViewTraineeReportController@view_trainee_report', $course->id) !!}">{!! $course->course_name !!} </a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        @endif

    </div>
    <div class="row all_report">
        <div class="col-md-4">
                <a style="background-color: #E91E63; color: #fff;" class="btn btn-square btn-lg btn-primary"  href="#"><i class="fa fa-comment"></i> Feedback</a>
            </div>
    </div>
   

@endsection