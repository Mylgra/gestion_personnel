<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AgentController extends Controller
{
    public function index()
    {
        $agents=Agent::query()->orderByDesc('created_at')->get();
        return view('agents.index',compact('agents'));
    }

    public function create()
    {
        return view('agents.create');
    }

    public function store(Request $request)
    {
       $agent = $request->validate([

        'name'=>['required'],
        'username'=>['required'],
        'firstname'=>['required'],
        'gender'=>['nullable', Rule::in(['Masculin', 'Feminin','Non reconnu'])],
        'birthday'=>['nullable','date'],
        'birthplace'=>['nullable'],
        'contact'=>['nullable'],
        'address'=>['nullable'],
        'identity'=>['nullable','image'],
        'civil_status'=>['nullable', Rule::in(['Celibataire', 'Marié(e)','Non reconnu'])],
        'picture'=>['nullable','image']

       ]);
       Agent::create($agent);

       session()->flash('success','Enregistrement effectué avec succes');

       return redirect()->route('agent.index');
    }
}
