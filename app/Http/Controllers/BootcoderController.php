<?php

namespace App\Http\Controllers;

use App\Bootcoder;
use App\Codersgroup;
use Illuminate\Http\Request;

class BootcoderController extends Controller
{
    public function index()
    {
        $bootcoders = Bootcoder::all();
        $codersgroups = Codersgroup::all();
        return view('bootcoder.index', compact('bootcoders', 'codersgroups'));
    }

   public function create()
    {
        $codersgroups = Codersgroup::all();
        return view('bootcoder.create', compact('codersgroups'));
    }

   public function store(Request $request)
    {
        Bootcoder::create($request->all());
        return redirect(route('bootcoder.index'));
    }

   public function show(Bootcoder $bootcoder)
    {
        $codersgroups = Codersgroup::all();
        return view('bootcoder.show', compact('bootcoder', 'codersgroups'));
    }

    public function edit(Bootcoder $bootcoder)
    {
        $codersgroups = Codersgroup::all();
        return view('bootcoder.edit', ['bootcoder' => $bootcoder], compact('codersgroups'));
    }

    public function update(Request $request, Bootcoder $bootcoder)
    {
        $bootcoder->update($request->all());
        return redirect(route('bootcoder.index'));
    }

   public function destroy(Bootcoder $bootcoder)
    {
        $bootcoder->delete();
        return redirect(route('bootcoder.index'));
    }
}