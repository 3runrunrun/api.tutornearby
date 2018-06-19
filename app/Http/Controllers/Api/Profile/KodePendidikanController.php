<?php

namespace App\Http\Controllers\Api\Profile;

use App\KodePendidikan;
use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class KodePendidikanController extends ResponseController
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
    public function store(Request $request)
    {
        $model = new KodePendidikan;
        $fillable = $model->getFillable();

        foreach (array_keys($request->all()) as $value) {
            if (array_search($value, $fillable) === false) {
                return $this->sendError('Unknown value detected!');
            }
        }

        try {
            $kodePendidikan = KodePendidikan::create($request->all());
        } catch (QueryException $e) {
            return $this->sendError($e->getMessage());            
        }

        return $this->sendResponse('Data saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KodePendidikan  $kodePendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(KodePendidikan $kodePendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KodePendidikan  $kodePendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit(KodePendidikan $kodePendidikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KodePendidikan  $kodePendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KodePendidikan $kodePendidikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KodePendidikan  $kodePendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KodePendidikan $kodePendidikan)
    {
        //
    }
}
