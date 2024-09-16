<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screen;


class ScreenController extends Controller
{
    public function index(){
        $screens = Screen::get();
        return view('screens.index', compact('screens'));
    }
    public function create(){
        return view('screens.create');
    }
    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('media')) {
            $mediaName = time().'.'.$request->file('media')->extension();
            $request->file('media')->move(public_path('screens'), $mediaName);
            // dd($request->all());
            
            Screen::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $mediaName,
            ]);
            return back()->withSuccess('Screen Added Successfully!');      

        } else {
            Screen::create([
                'title' => $request->title,
                'description' => $request->description,
                // 'image' => $mediaName,
            ]);
            return back()->withSuccess('Screen Added Successfully! Without Media File');      
            // dd('No media uploaded');
        }

        // return view('screens.index');
    }
    public function edit($id){
        // dd($id);
        $screen = Screen::where('id', $id)->first();
        return view('screens.edit', compact('screen'));
        // return view('screens.update', ['screen' => $screen]);
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $screen = Screen::where('id', $id)->first();
        if ($request->hasFile('media')) {
            $mediaName = time().'.'.$request->file('media')->extension();
            $request->file('media')->move(public_path('screens'), $mediaName);
            
            $screen->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $mediaName,
            ]);
            return back()->withSuccess('Screen Updated Successfully!');      

        } else {
            $screen->update([
                'title' => $request->title,
                'description' => $request->description,
                // 'image' => $mediaName,
            ]);
            return back()->withSuccess('Screen Updated Successfully! Without Media File');      
            // dd('No media uploaded');
        }   
    } 
    
    public function delete($id){
        $screen = Screen::where('id', $id)->first();
        $screen->delete();
        return back();
    }
}


