@extends('master/master')
@section('title', 'View all trainings information')
<style>
    b{
        font-size: large;
        color: #2E7D32;
    }

    label{
        font-size: larger;
        color: darkolivegreen;
    }

    p{
        font-size: medium;
    }

    div{
        text-align: justify;
        text-justify: inter-word;
    }

    hr{
        background-color: #FFD180;
    }
</style>
@section('content')
    <div class="container col-md-12">
        <header align="center">
            <b>Bangladesh Academy For Rural Development(BARD)</b><br>
            <b>Kotbari,Comilla,Bangladesh</b><br>
            <b>{!! $training->training_name !!}</b>
        </header><br>


        <div class="col-md-10 col-md-offset-1 well well bs-component">

                <div class="col-md-5">

                    <label>Training Type</label><hr>
                    <p>{!! $training->training_type  !!}</p>

                    <label>List of Courses</label><hr>
                    <br>
                    @if ($courses->isEmpty())
                        <p> There is no available courses.</p>
                    @else
                        @foreach($courses as $course)
                            <b><a href="{!! action('CourseController@show', $course->id) !!}">{!! $course->course_name !!}</a></b><br>
                        @endforeach
                    @endif
                    <hr>

                    <label>Duration:</label>&nbsp;{!! $training->start_date !!}&nbsp;to&nbsp;{!! $training->end_date !!}<hr>

                    <label>Description</label><hr>
                    <p>{!! $training->description !!}</p>

                    <label>Objectives</label><hr>
                    <p>{!! $training->objectives !!}</p>

                    <label>Information How to Apply</label><hr>
                    <p>{!! $training->applying_information !!}</p>

                    <label>Information About Accommodation</label><hr>
                    <p>{!! $training->accommodation !!}</p>

                </div>
                <div class="col-md-5">
                    <label>Daily Schedule</label><hr>
                    <p>{!! $training->daily_schedule !!}</p>

                    <label>Fees Structure</label><hr>
                    <p>{!! $training->fees_structure !!}</p>

                    <label>Responsible person for Trainees</label><hr>
                    <p>{!! $training->responsible_person !!}</p>

                    <label>Resources Provided by to a Particular Training</label><hr>
                    <p>{!! $training->provided_resources !!}</p>
                </div>
        </div>

        <div class="mbr-section__container mbr-section__container--std-padding container">
            <div class="row">
                <div class="col-md-12">
                    @if (!$testimonials->isEmpty())
                    <h2 class="mbr-section__header"><font color="#556b2f">Testimonials</font></h2>
                        <ul class="mbr-reviews mbr-reviews--wysiwyg row">
                            @foreach($testimonials as $testimonial)
                        <li class="mbr-reviews__item col-sm-6 col-md-4">
                            <div class="mbr-reviews__text"><p class="mbr-reviews__p">{!! $testimonial->testimonial !!}</p></div>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name">{!! $testimonial->author_name !!}</div>
                            </div>
                        </li>
                            @endforeach
                                @endif
                        </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(!$FAQs->isEmpty())
                    <h2 align="center"><font color="#556b2f">Frequently Asked Questions(FAQs)</font></h2><br>
                    @foreach($FAQs as $FAQ)
                    <div class="col-md-4">
                        <div class="well well bs-component">
                            <label>Question</label><hr>
                            <p>{!! $FAQ->question !!}</p>
                            <label>Answer</label><hr>
                            <p>{!! $FAQ->answer !!}</p>
                            <h6><i>Written By</i> &nbsp; &nbsp;{!! $FAQ->author_name !!}</h6>
                        </div>
                    </div>
                    @endforeach
                    @endif
            </div>
        </div>
    </div>
@endsection