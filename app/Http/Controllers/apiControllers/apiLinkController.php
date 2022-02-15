<?php

namespace App\Http\Controllers\apiControllers;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apiLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified link.
     *
     * NOTE: THIS WILL RETURN LINK FROM HER SHORTED ANALOG
     *
     * @param Request $request $id identificator of shorted link
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) : string
    {
        $request->only(["id"]);
        $request->validate([
            "id" => "string|size:4"
        ]);

        $id  = $request->get('id');

        $rs = DB::table('links')->where('short_link', '=', $id)->first(['*']);
        if ($rs !== null)
            return $rs->link;
        else
            return abort(404); // todo create new answer for the page that shows up if there is no such short link
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
