<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreExamRequest;
use App\Models\Exam;
use Illuminate\Contracts\View\View;

class ExamController extends Controller
{
    //get all exams
    public function index()
    {
        $exams = Exam::get()->groupBy('category');
        // return $exams;
        return view('exams')->with(['exams'=>$exams]);
    }
    //create exam page
    public function createPage()
    {
        return view('create-exam');

    }

    //save exam
    public function saveExam(StoreExamRequest $request)
    {
        $exam = Exam::create([
            'question'=> $request->question,
            'category'=> $request->category,
            'option_1'=> $request->option_1,
            'option_2'=> $request->option_2,
            'option_3'=> $request->option_3,
            'option_4'=> $request->option_4,
        ]);

        if ($exam) {
            return true;
        }else{
            return false;
        }

    }

    //update page
    public function updatePage($id)
    {
        $exam = Exam::findOrFail($id);

        return view('update-exam')->with(['exam'=>$exam]);

    }

    //update exam
    public function updateExam(StoreExamRequest $request)
    {
        // dd($request->all());
        $exam = Exam::findOrFail($request->id);
        $exam->update([
            'question'=> $request->question,
            'category'=> $request->category,
            'option_1'=> $request->option_1,
            'option_2'=> $request->option_2,
            'option_3'=> $request->option_3,
            'option_4'=> $request->option_4,
        ]);

        if ($exam) {
            return true;
        }else{
            return false;
        }

    }

    //delete exam
    public function deleteQuestion(Request $request)
    {
        $exam = Exam::findOrFail($request->get('question_id'));
        
        $exam->delete();

        return true;
    }
}
