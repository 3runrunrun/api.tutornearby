<?php

namespace App\Http\Controllers\Api\Enrollment;

use App\CourseKategori;
use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class CourseKategoriController extends ResponseController
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
        // Get fillable fields from The Model
        $model = new CourseKategori;
        $fillable = $model->getFillable();

        // Check if any unknown passed value
        foreach (array_keys($request->all()) as $value) {
            if (array_search($value, $fillable) === false) {
                return $this->sendError('Unknown value detected!');
            }
        }

        // Save the data
        try {
            $courseKategori = CourseKategori::create($request->all());
        } catch (QueryException $e) {
            return $this->sendError($e->getMessage());
        }
        
        return $this->sendResponse('Data saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseKategori  $courseKategori
     * @return \Illuminate\Http\Response
     */
    public function show(CourseKategori $courseKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseKategori  $courseKategori
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseKategori $courseKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseKategori  $courseKategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseKategori $courseKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseKategori  $courseKategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseKategori $courseKategori)
    {
        //
    }
}
