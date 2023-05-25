<?php

namespace App\Http\Controllers;

use App\Models\addcase;
use Exception;
use Illuminate\Http\Request;

class AddcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases=addcase::all();
       return view('html.follow-up',compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('html.add-case');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $addcase=addcase::create($request->all());
       return  redirect()->route('addcase.index')
       ->with('success','تمت اضافة العملية');
    }

    /**
     * Display the specified resource.
     */
    public function show(addcase $addcase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $addcase= addcase::find($id);
       return view('html.editcase',compact('addcase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
        $addcase=addcase::find($id);
    }catch(Exception $e){
        return  redirect()->route('addcase.index');

    }
    $addcase->update($request->all());
       
        return  redirect()->route('addcase.index')->with('success','تمت تعديل الحالة');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       addcase::destroy($id);
        return  redirect()->route('addcase.index')->with('success','تمت حذف الحالة');
    }
}
