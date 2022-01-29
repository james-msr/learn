<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Models\Lesson;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectLessonController extends Controller
{
    public function index($subjectId)
    {
        return LessonResource::collection(Subject::query()->findOrFail($subjectId)->lessons);
    }


    public function store(Request $request, $subjectId)
    {
        Subject::query()->findOrFail($subjectId)->lessons->create($request->all());

        return 201;
    }


    public function show($subjectId, $id)
    {
        return new LessonResource(Lesson::query()->where(['subject_id' => $subjectId])->findOrFail($id));
    }


    public function update(Request $request, $subjectId, $id)
    {
        Lesson::query()->where(['subject_id' => $subjectId])->findOrFail($id)->update($request->all());

        return 201;
    }


    public function destroy($subjectId, $id)
    {
        Lesson::query()->where(['subject_id' => $subjectId])->findOrFail($id)->delete();

        return 201;
    }
}
