<?php

namespace App\Http\Controllers\apiControllers;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class apiLinkController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request for $url post
     * @return false|string return false something went wrong, json string object with short url if okey
     */
    public function store(Request $request): bool|string
    {
        $url = $request->post('url');
        $data = ['url' => $url];
        if (Validator::make($data, ['url' => 'required|url'])->fails()){ // todo думаю перенести проверки в middleware
            $data['error'] = 'seems this is not valid url'; // todo проверку на существование сделать
            return json_encode($data);
        }

        do{
            $new = Str::random(4);
            if ($new === 'home'){
                $result = false;
                continue;
            }
            $result = DB::table('links')->insert(['link' => $url, 'short_link' => $new, 'user_id' => "API"]);
        }while($result === false); // todo i think this is not the best solution

        $data['short_url'] = url('', [$new]);
        return json_encode($data);
    }

    /**
     * Display the specified link.
     *
     * NOTE: THIS WILL RETURN LINK FROM HER SHORTED ANALOG
     *
     * @param $id
     * @return string|object
     */
    public function show($id) : string|object
    {
        $data = ['id' => $id];

        if (Validator::make($data, ['id' => 'string|size:4'])->fails()){ // todo думаю перенести проверки в middleware
            $data['error'] = 'identificator validation went wrong';
            return json_encode($data);
        }

        $rs = DB::table('links')->where('short_link', '=', $id)->first(['*']);

        if ($rs !== null) {
            $data['url'] = $rs->link;
        }
        else{
            $data['error'] = 'could\'nt find the identificator link';
        }
        return json_encode($data);
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
