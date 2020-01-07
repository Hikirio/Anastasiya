<?php

namespace App\Http\Controllers;

use App\Depart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Integer;

class GenerateController extends Controller
{

    public function index()
    {
        $сreate_data = new Depart();
        $number = 0;
        return view('generate', compact('сreate_data', 'number'));

    }

    public function pol_num(Request $request)
    {

    }
    /**
     * @param Request $request
     * @param $number
     * @param Depart $create_data
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, Depart $create_data)
    {
        $number = $request->number;

        try {
//            for ($i = 0; $i < $number; $i++) {
                $create_data->fill([
                    'depart_number' => Str::random(10)->depart_number,
                    'name' => Str::random(10)->name,
                    'dep_head' => Str::random(10)->dep_head,
                    'fin_responsible' => Str::random(10)->fin_responsible,

                ])->save();
//            }

        } catch
        (\Exception $e) {
            dd($e);

        }
        return redirect('/generate');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
