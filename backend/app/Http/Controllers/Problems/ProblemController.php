<?php

namespace App\Http\Controllers\Problems;

use App\Models\Trouble;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Problem;

class ProblemController extends Controller
{
    public function index()
    {
        $problems = Problem::all();
        return view('problems.index', compact('problems'));
    }
    public function create()
    {
        return view('problems.create');
    }
    public function store(Request $request)
    {
        //ユーザーを設定するかもしれない
        // $company = Company::find($request->company_id);
        // $companyId = $request->company_id;
        $problem = Problem::create([
            'title'                => $request->title,
            'description'          => $request->description,
        ]);

        return redirect(route('problems.show', compact('problem')));
    }
    public function show(Problem $problem)
    {
        return view('problems.show', compact('problem'));
    }
}
