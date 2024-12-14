<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(20);
        return view('partner.index',[
            'partners' => $partners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }
        if ($request->hasFile("image")){
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        Partner::create([
            'image' => $image ?? "",
            'name' => $request->name,
        ]);
        return redirect()->route('partner.index')->with('success','Partner create successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        return view('partner.show',[
            'partner' => $partner,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('partner.edit',[
            'partner' => $partner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $validated = Validator::make($request->all(),[
            'name' => 'required|string|max:200',
        ]);
        if ($validated->fails()){
            return back()->withInput()->withErrors($validated);
        }

        if ($request->hasFile("image")){
            $filePath = public_path('files/' . $partner->image);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $image = date('Y_m_d_H_i_s') . rand(10000, 99999) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $image);
        }
        $partner->update([
            'image' => $image ?? $partner->image,
            'name' => $request->name,
            'status' => $request->status,
        ]);
        return redirect()->route('partner.index')->with('success','Partner update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $filePath = public_path('files/' . $partner->image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $partner->delete();
        return redirect()->route('partner.index')->with('success','Partner delete successfuly');
    }
}
