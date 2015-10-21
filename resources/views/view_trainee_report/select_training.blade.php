@extends('admin/layouts.master')
@section('title', 'View all courses')
@section('content')

    <div class="container">

        <h2> Trainings </h2>

        @if ($trainings->isEmpty())
            <p> There is no training available.</p>
        @else
            <div class="row">
                @foreach($trainings as $training)

                    <div class="col-md-4">
                        <div class="course_gellary">
                            <div class="course_image">
                                <img src="{{ $training->image_path }}" alt="Training Image">
                            </div>
                            <div class="course_title">
                                <a href="{!! action('ViewTraineeReportController@select_course', $training->id) !!}">{!! $training->training_name !!} </a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        @endif

    </div>

@endsection