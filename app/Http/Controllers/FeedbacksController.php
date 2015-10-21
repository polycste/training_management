<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackFormRequest;
use App\Trainer;
use App\Feedback;
use App\Course;
use Auth;
class FeedbacksController extends Controller
{

    public function __construct(){
        $this->middleware('trainee');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $feedbacks = Feedback::with('trainer')->distinct()->select('trainer_id')->get();
        $trainers = DB::table('users')
                    ->join('role_user','users.id','=','role_user.user_id')
                    ->where('role_user.role_id',3)->get();
     
        return view('feedbacks.index', compact('feedbacks','trainers'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers =  DB::table('users')
                    ->join('role_user','users.id','=','role_user.user_id')
                    ->where('role_user.role_id',3)->get();
        //dd($trainers);
        return view('feedbacks.create',compact('trainers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackFormRequest $request)
    {   
          $traineeId = Auth::user()->id;
          $feedback = new Feedback(array(
           'trainer_id' => $request->get('trainer_id'),
           'trainee_id' => $traineeId,
           'voice_range' => $request->get('A1'),
           'voice_clearity' => $request->get('A2'),
           'communication_skills' => $request->get('A3'),
           'rapport_building' => $request->get('A4'),
           'interaction' => $request->get('A5'),
           'topic_usefulness' => $request->get('B1'),
           'material_organization' => $request->get('B2'),
           'speakers_knowledge' => $request->get('B3'),
           'comments' => $request->get('comments'),
        ));
        if (Feedback::where('trainee_id', '=', $traineeId)->where('trainer_id', '=',$request->get('trainer_id'))->exists()) {
           return redirect('/trainee')->with('status', 'You have already given feedback');
        }
        else{
            $feedback->save();
            return redirect('/trainee')->with('status', 'Your feedback has been submitted!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedbacks = Feedback::where('trainer_id', '=', $id)
                 ->with('trainer')
                ->join('trainers', 'trainers.id', '=', 'feedbacks.trainer_id')
                ->select('*',DB::raw('AVG(voice_range) as voice_range,
                            AVG(voice_clearity) as voice_clearity,
                            AVG(communication_skills) as communication_skills,
                            AVG(rapport_building) as rapport_building,
                            AVG(topic_usefulness) as topic_usefulness,
                            AVG(interaction) as interaction,
                            AVG(material_organization) as material_organization,
                            AVG(speakers_knowledge) as speakers_knowledge'))
                ->get();
      
        foreach($feedbacks as $f){
                $sum= $f->voice_range+$f->voice_clearity+$f->communication_skills+$f->rapport_building+$f->topic_usefulness+$f->interaction+$f->material_organization+$f->speakers_knowledge;
    }
        $avg = $sum/8;
       
        return view('feedbacks.show', compact('feedbacks', 'avg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
