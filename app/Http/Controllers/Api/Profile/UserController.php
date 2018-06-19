<?php

namespace App\Http\Controllers\Api\Profile;

use App\User;
use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class UserController extends ResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        if (!$user->isEmpty()) {
            return $this->sendResponse('Usernya ada gan', $user);
        } else {
            return $this->sendError('Usernya ga ada gan:(');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->fill([
            'id_user' => $request->input('id_user'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
            'token' => $request->input('token'),
            'alamat' => $request->input('alamat'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'gender' => $request->input('gender'),
            'pendidikan' => $request->input('pendidikan')
        ]);

        try {
            $user->save();
        } catch (QueryException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse('User saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
