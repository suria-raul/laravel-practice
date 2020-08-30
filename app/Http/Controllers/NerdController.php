<?php

namespace App\Http\Controllers;

use App\Nerd;
use App\Http\Requests\NerdRequest;
use App\Providers\UnknownEvent;

class NerdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nerds = Nerd::all();

        return view('nerd.index', compact('nerds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nerd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NerdRequest $request)
    {
        $nerd = Nerd::create($request->validated());

        event(new UnknownEvent($nerd));

        return redirect('nerds');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nerd  $nerd
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Nerd $nerd)
    {
        return view('nerd.show', compact('nerd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nerd  $nerd
     *
     * @return void
     */
    public function edit(Nerd $nerd)
    {
        return view('nerd.edit', compact('nerd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\NerdRequest  $request
     * @param  \App\Nerd  $nerd
     *
     * @return void
     */
    public function update(NerdRequest $request, Nerd $nerd)
    {
        $nerd->update($request->validated());

        return redirect()->action([self::class, 'show'], compact('nerd'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nerd  $nerd
     *
     * @return void
     * @throws \Exception
     */
    public function destroy(Nerd $nerd)
    {
        $nerd->delete();

        return redirect('nerds');
    }
}
