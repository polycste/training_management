
@extends('layout.master')
@section('script')

@show

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div ><center><h5>Bangladesh Academy for Rural Development<br/>
                        Kotbari, Comilla</h5>
                    <legend><u><h3>Attendence Sheet</h3></u><small>(For Trainees)</small></legend>
                    <h4><b>Name of Training Course  : 3<sup>rd</sup> FTFL Foundation Training Course<br/>
                            Participants                : FTFL Trainers of Bangladesh Computer Council<br/>
                            Duration                    : 01 August - 29 October 2015</b></h4> </center>  <br/><br/>  <br/>
            </div>
            <form class="form-horizontal" method="post" action="{!! action('AttendanceController@editAttendance') !!}">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <div >
                        <label for="inputTrainingName" class="col-lg-2 control-label">Course Name: {{ $course_name }}</label>
                    </div>
                    <div>
                        <label for="inputTrainingName" class="col-lg-3 control-label"for="inputTrainingName" class="col-lg-3 control-label">Session: {{ $session_name }}</label>

                    </div>
                    <div>
                        <label for="inputTrainingName" class="col-lg-3 control-label">Date : {{ $date }}</label>
                        <input type="hidden" value="{{ $date }}" class="form-control" name="date" placeholder="1990/11/11"/>

                    </div>

                    <div class="form-control">
                        <label class="col-lg-3 control-label">Present
                            @foreach($present_att as $trainee)
                                <p>{!! $trainee !!}</p>
                            @endforeach
                        </label>
                        <label class="col-lg-3 control-label">Absent
                            @foreach($absent_att as $trainee)
                                <p>{!! $trainee !!}</p>
                            @endforeach
                        </label>
                    </div>

                </fieldset>
            </form>
        </div>

    </div>
@endsection

