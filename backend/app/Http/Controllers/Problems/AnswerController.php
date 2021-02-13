<?php

namespace App\Http\Controllers\Problems;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Problem;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    // public function index()
    // {
    //     // return view('problems.index');
    // }
    public function create(Problem $problem)
    {
        return view('answers.create', compact('problem'));
    }

    public function store(Request $request, Problem $problem)
    {

        //ユーザーを設定するかもしれない
        // $company = Problem::find($request->company_id);
        // $companyId = $request->company_id;
        $answer = Answer::create([
            'problem_id'         => $problem->id,
            'url'                => $request->url,
            'title'              => $request->title,
            'description'        => $request->description,
        ]);

        return redirect(route('problems.show', compact('problem')));
    }

    public function show(Problem $problem)
    {
        return view('problems.show', compact('problem'));
    }
}
