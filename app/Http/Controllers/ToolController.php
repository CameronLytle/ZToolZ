<?php

namespace App\Http\Controllers;

use App\Tool;
use Illuminate\Http\Request;
use Auth;

class ToolController extends Controller
{
    public function getIndex () {
        if(!Auth::check()){
            return redirect('/login');
        }

//        $tools = Tool::all();
//        $tools = Tool::orderBy('item', 'asc')->get();
        $tools = Tool::orderBy('item', 'asc')->paginate(3);
        return view('ztoolz.index', ['tools' => $tools]);
    }

    public function getAdminIndex() {
        if(!Auth::check()){
            return redirect('/login');
        }

//        $tools = Tool::all();
        $tools = Tool::orderBy('item', 'asc')->get();
        return view('admin.index', ['tools' => $tools]);
    }

    public function getTool($id) {
//        $tool = Tool::find($id);
        $tool = Tool::where('id', '=', $id)->first();
        return view('ztoolz.tool', ['tool' => $tool]);
    }

    public function getAdminCreate() {
        if(!Auth::check()){
            return redirect('/login');
        }

        return view('admin.create');
    }

    public function getAdminEdit($id) {
        $tool = Tool::find($id);
        return view('admin.edit', ['tool' => $tool, 'toolId' => $id]);
    }

    public function postAdminCreate(Request $request) {
        if(!Auth::check()){
            return redirect('/login');
        }

        $this->validate($request, [
            'item' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|regex:/^\d*(\.\d{2})?$/'
        ]);
        $tool = new Tool([
            'item' => $request->input('item'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);
        $tool->save();
//        $tool->addTool($session, $request->input('item'), $request->input('description'), $request->input('price'));
        return redirect()->route('admin.index')->with('info', 'Tool created, Item is: ' . $request->input('item'));
    }

    public function postAdminUpdate(Request $request) {
        if(!Auth::check()){
            return redirect('/login');
        }

        $this->validate($request, [
            'item' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|regex:/^\d*(\.\d{2})?$/'
        ]);
        $tool = Tool::find($request->input('id'));
        $tool->item = $request->input('item');
        $tool->description = $request->input('description');
        $tool->price = $request->input('price');
        $tool->save();
        return redirect()->route('admin.index')->with('info', 'Tool edited, new Item is: ' . $request->input('item'));
    }

    public function getAdminDelete($id) {
        if(!Auth::check()){
            return redirect('/login');
        }

        $tool = Tool::find($id);
        $tool->delete();
        return redirect()->route('admin.index')->with('info', 'Post Deleted');
    }
}