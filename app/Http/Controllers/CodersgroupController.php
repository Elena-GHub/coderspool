<?php

namespace App\Http\Controllers;

use App\Codersgroup;
use App\Bootcoder;
use Illuminate\Http\Request;

class CodersgroupController extends Controller
{
    public function index()
    {
        $codersgroups = Codersgroup::all();
        return view('codersgroup.index', compact('codersgroups'));
    }

   public function create()
    {
        $codersgroups = Codersgroup::all();
        return view('codersgroup.create', compact('codersgroups'));
    }

    public function store(Request $request)
    {
        Codersgroup::create($request->all());
        return redirect(route('codersgroup.index'));
    }

    public function show(Codersgroup $codersgroup)
    {
        $bootcoders = Bootcoder::all();
        return view('codersgroup.show', compact('codersgroup', 'bootcoders'));
    }

    public function edit(Codersgroup $codersgroup)
    {
        return view('codersgroup.edit', ['codersgroup' => $codersgroup]);
    }

    public function update(Request $request, Codersgroup $codersgroup)
    {
        $codersgroup->update($request->all());
        return redirect(route('codersgroup.index'));
    }

    public function destroy(Codersgroup $codersgroup)
    {
        $codersgroup->delete();
        return redirect(route('codersgroup.index'));
    }
}