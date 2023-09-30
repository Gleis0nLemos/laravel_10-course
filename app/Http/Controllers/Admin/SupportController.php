<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $supports)
    { 
        $supports = $supports->all(); 
        
        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function show(string|int $id)
    {
        // Support::find($id
        // Support::where('id', $id)->first();
        // Support::where('id', '=', $id)->first();
        if (!$support = Support::find($id)) {
            return back();
        }   

        return view('admin.supports.show', compact('support'));
    }

    public function edit(Support $support, string|int $id)
    {
        if (!$support = Support::where('id', $id)->first()) {
            return back();
        } 
          
        return view('admin.supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        }
        
        // $support->subject = $request->subject;
        // $support->body = $request->body;
        // $support->save();

        $support->update($request->only([
            'subject',
            'body',
        ]));

        return redirect()->route('supports.index');
    }

    public function destroy(string|int $id)
    {
        if (!$support = Support::find($id)) {
            return back();
        }

        $support->delete();
        
        return redirect()->route('supports.index');
    }

    public function store(StoreUpdateSupport $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support->create($data);
        return redirect()->route('supports.index');
    }
}
