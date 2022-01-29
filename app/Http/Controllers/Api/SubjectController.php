<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SubjectResource;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index()
    {
        return SubjectResource::collection(Subject::all());
    }


    public function store(Request $request)
    {
        Subject::query()->create($request->all());

        return 201;
    }


    public function show($id)
    {
        return new SubjectResource(Subject::query()->findOrFail($id));
    }


    public function update(Request $request, $id)
    {
        Subject::query()->findOrFail($id)->update($request->all());

        return 201;
    }


    public function destroy($id)
    {
        Subject::query()->findOrFail($id)->delete();

        return 201;
    }
}
