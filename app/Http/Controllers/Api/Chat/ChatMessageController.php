<?php

namespace App\Http\Controllers\Api\Chat;

use App\ChatMessage;
use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ChatMessageController extends ResponseController
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
        $model = new ChatMessage;
        $fillable = $model->getFillable();

        foreach (array_keys($request->all()) as $value) {
            if (array_search($value, $fillable) === false) {
                return $this->sendError('Unknown value detected!');
            }
        }

        $newMessage = $request->all();
        $newMessage['time'] = now();

        try {
            $chatMessage = ChatMessage::create($newMessage);    
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse('Data saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function show(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatMessage $chatMessage)
    {
        //
    }
}
