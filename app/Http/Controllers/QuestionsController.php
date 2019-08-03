<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AskQuestionRequest;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::orderByDesc('updated_at')->paginate(8);
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = new Question();
        return view('questions.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AskQuestionRequest $request)
    {
        $question = new Question();
        $question->title = $request->get('title'); 
        $question->body = $request->get('body'); 
        $question->desc = $request->get('desc');
        $question->armory = $request->get('armory');
        $question->price = $request->get('price');
        $question->class = $request->get('class');
        
        $imagesLinks = '';
        $images = $request->file('images');
        $countArray = count($images);
        for($i = 0; $i < $countArray; $i++){
            $name = time() . rand() . '.' . $images[$i]->getClientOriginalExtension();
            
            if($i == $countArray-1){
                $imagesLinks = $imagesLinks . $name;
            }else{
                $imagesLinks = $imagesLinks . $name . ';';
            }
            
            $images[$i]->move(public_path('images'), $name);
        }

        $question->screenshots = $imagesLinks;
        $question->save();
        return redirect()->route('questions.index')->with('success', "Your question has been submitted");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->update($request->only('title', 'body', 'desc', 'armory', 'price'));
        return redirect()->route('questions.index')->with('success', "Your question has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
