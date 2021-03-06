<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Str;
use Illuminate\View\View;



class shortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'url' => 'required|url|max:500'
        ]);
        $old = $request->input('url');






        do{
            $new = Str::random(4);

                if ($new === 'home'){
                    $result = false;
                    continue;
                }

            $result = DB::table('links')->insert(['link' => $old, 'short_link' => $new, 'user_id' => NULL]);
        }while($result === false); // todo i think this is not the best solution сделать транзакцией мб

        $linkData['new'] = $new;
        $linkData['old'] = $old;


        $request->session()->flash('linkData', $linkData); // база, фундамент я бы сказал, определенное базирование


        return redirect()->action([shortLinkController::class,'created']);
    }

    /**
     * Shows newly created link page
     * @param Request $request
     * @return View
     */
    public function created(Request $request) : View
    {
        $errors = null;

        // getting two flash session parameters
        if (isset(session('linkData')['new']) || isset(session('linkData')['old'])){
            $new = session('linkData')['new'];
            $old = session('linkData')['old'];
        }else{
            $new = null;
            $old = null;
            $errors[] = 'session doesnt exist';
        }


        return view('created', ['new' => $new, 'old' => $old, 'errors' => $errors]);
    }

    public function redirect($url)
    {
        // todo добавить валидацию на $url ссылку


        $url = DB::table('links')->where('short_link', '=', $url)->first(['*']);
        if ($url !== null)
            return redirect($url->link);
        else
            return abort(404); // todo create new view for the page that shows up if there is no such short link
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
