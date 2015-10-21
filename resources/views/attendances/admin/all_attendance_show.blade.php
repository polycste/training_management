@extends('master')
@section('title', 'View a course')
@section('content')

    <div class="container col-md-12">
        <div class="well well bs-component">
            <div ><center><h5>Bangladesh Academy for Rural Development<br/>
                        Kotbari, Comilla</h5>
                    <legend><u><h3>Attendence Sheet</h3></u><small>(For Trainees)</small></legend>
                    <h4><b>Name of Training Course  : 3<sup>rd</sup> FTFL Foundation Training Course<br/>
                            Participants                : FTFL Trainers of Bangladesh Computer Council<br/>
                            Duration                    : 01 August - 29 October 2015</b></h4> </center>  <br/>
            </div>

            <div class="content">
                <table class="table">
                    <thead>
                    <tr style="background-color:seagreen;color:white">
                        <th>Date</th>
                        <th>Session</th>
                        <th>Present</th>
                        <th>Absent</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; $j=0; ?>
                    @foreach($attendance as $attendance_date)
                        @foreach($attendance_date as $attendance_session)
                            @if($attendance_session['present']!=0 || $attendance_session['absent']!=0 )
                                @if($i++==1)
                                    <tr>
                                        <td><?php echo date('Y-m-d',strtotime("$j days")) ?></td>
                                        <td>
                                            <a href="{!! action('AttendanceController@AdminAttendanceShowTrainee',[$course_id,$attendance_session['session_name'],date('Y-m-d',strtotime("$j days"))]) !!}">{!! $attendance_session['session_name'] !!}</a>
                                        </td>
                                        <td>
                                            {!! $attendance_session['present'] !!}
                                        </td>
                                        <td>
                                            {!! $attendance_session['absent'] !!}
                                        </td>
                                    </tr>

                                    @else
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="{!! action('AttendanceController@AdminAttendanceShowTrainee',[$course_id,$attendance_session['session_name'],date('Y-m-d',strtotime("$j days"))]) !!}">{!! $attendance_session['session_name'] !!}</a>
                                            </td>
                                            <td>
                                                {!! $attendance_session['present'] !!}
                                            </td>
                                            <td>
                                                {!! $attendance_session['absent'] !!}
                                            </td>
                                        </tr>
                                    @endif
                            @endif
                        @endforeach
                        <?php $i=1;$j-- ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
