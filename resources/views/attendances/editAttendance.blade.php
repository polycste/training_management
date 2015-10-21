
@extends('layout.master')
@section('script')
    <link href="{!! asset('css/datepicker.css') !!}" rel="stylesheet">
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <!-- Include Bootstrap Datepicker -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js">    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function(){
            $('#datePicker')
                    .datepicker({
                        format: 'yyyy/mm/dd'
                    })
        });
    </script>
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
            <form class="form-horizontal" action="{!! action('AttendanceController@updateAttendance') !!}" method="post">
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
                        <div class="col-lg-2">
                            <input type="hidden" value="{{ $course_id }}" name="course_id">
                        </div>
                    </div>
                    <div>
                        <label for="inputTrainingName" class="col-lg-3 control-label">Session: {{ $session }}</label>
                        <div class="col-lg-2">
                            <input type="hidden" name="session" value="{{ $session }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Date : {{ $date }}</label>
                        <input type="hidden" value="{{ $date }}" class="form-control" name="date" placeholder="1990/11/11"/>

                    </div>



                    <div>
                        <table class="table" >
                            <thead>
                            <tr>
                                <th>Name</th>

                                <th>Attendence</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trainee_list as $trainee)
                                <tr>

                                    <td>{{ $trainee->name }}</td>
                                    <td>
                                        <input type="radio" name="ta__{!! $trainee->trainee_id !!}" value="P" @foreach($current_attendance as $attendance) @if($trainee->trainee_id==$attendance->trainee_id && $attendance->trainee_attendance=='P') {!! "checked" !!}@endif @endforeach>Present
                                        <input type="radio" name="ta__{!! $trainee->trainee_id !!}"value="A" @foreach($current_attendance as $attendance) @if($trainee->trainee_id==$attendance->trainee_id && $attendance->trainee_attendance=='A') {!! "checked" !!}@endif @endforeach>Absent
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-5 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

