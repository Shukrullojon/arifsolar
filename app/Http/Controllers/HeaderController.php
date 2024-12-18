<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headers = Header::latest()->paginate(20);
        return view('header.index',[
            'headers' => $headers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'title_uz' => 'required|string|max:200',
            'title_ru' => 'required|string|max:200',
            'button_title_uz' => 'required|string|max:200',
            'button_title_ru' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        Header::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'button_title_uz' => $request->button_title_uz,
            'button_title_ru' => $request->button_title_ru,
            'status' => $request->status,
            'section_id' => $request->section_id,
            'styles' => $request->styles,
        ]);
        return redirect()->route('header.index')->with('success','Header create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        return view('header.show',[
            'header' => $header,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        return view('header.edit',[
            'header' => $header
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        $validated = Validator::make($request->all(),[
            'title_uz' => 'required|string|max:200',
            'title_ru' => 'required|string|max:200',
            'button_title_uz' => 'required|string|max:200',
            'button_title_ru' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        $header->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'button_title_uz' => $request->button_title_uz,
            'button_title_ru' => $request->button_title_ru,
            'status' => $request->status,
            'section_id' => $request->section_id,
            'styles' => $request->styles,
        ]);
        return redirect()->route('header.index')->with('success','Header update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        $header->delete();
        return redirect()->route('header.index')->with('success','Header delete successfuly');
    }
}
