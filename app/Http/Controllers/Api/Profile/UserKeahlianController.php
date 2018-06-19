<?php

namespace App\Http\Controllers\Api\Profile;

use App\UserKeahlian;
use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UserKeahlianController extends ResponseController
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
        $model = new UserKeahlian;
        $fillable = $model->getFillable();

        foreach (array_keys($request->all()) as $value) {
            if (array_search($value, $fillable) === false) {
                return $this->sendError('Unkown value detected!');
            }
        }

        try {
            $userKeahlian = UserKeahlian::create($request->all());
        } catch (QueryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse('Data saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserKeahlian  $userKeahlian
     * @return \Illuminate\Http\Response
     */
    public function show(UserKeahlian $userKeahlian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserKeahlian  $userKeahlian
     * @return \Illuminate\Http\Response
     */
    public function edit(UserKeahlian $userKeahlian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserKeahlian  $userKeahlian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserKeahlian $userKeahlian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserKeahlian  $userKeahlian
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserKeahlian $userKeahlian)
    {
        //
    }
}
