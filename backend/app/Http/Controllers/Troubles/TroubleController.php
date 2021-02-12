<?php

namespace App\Http\Controllers\Troubles;

use App\Models\Trouble;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TroubleController extends Controller
{
    public function index (Trouble $trouble){
        return view('troubles.index',compact('trouble'));
    }
    public function create(Trouble $trouble): View
    {
//        return view('admin.companies.bots.create', compact('company'));
    }
    public function store(Request $request): RedirectResponse
    {
//        $company = Company::find($request->company_id);
//        $companyId = $request->company_id;
//        $bot = Bot::create([
//            'company_id'           => $company->id,
//            'alias'                => $this->generateUniqueStringInColumnService->generate('bots', 'alias'),
//            'bot_user_id'          => $request->bot_user_id,
//            'basic_id'             => $request->basic_id,
//            'display_name'         => $request->display_name,
//            'sheet_url'            => $request->sheet_url,
//            'channel_secret'       => $request->channel_secret,
//            'channel_access_token' => $request->channel_access_token,
//        ]);
//        $this->importQuestionsForUsersService->import($bot->id);
//        $this->createQuestionIndexService->createIndex($bot->id);
//
//        return redirect(route('admin.companies.bots.show', compact('company', 'bot')));
    }
    public function show(Trouble $troubles): View
    {
        return view('troubles.show', compact('company', 'bot'));
    }
}
