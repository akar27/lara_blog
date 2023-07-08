<?php

namespace App\Http\Controllers;

use App\Models\Commant;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommantController extends Controller
{

    public function index()
    {
        return view('comnts');
        //  [
        //     'post' => Blog::where('id', $id)->commants()->get()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $request)
    {
        //
    }


    public function edit( $commant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commant  $commant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $commant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commant  $commant
     * @return \Illuminate\Http\Response
     */
    public function destroy($commant)
    {
        //
    }
}
