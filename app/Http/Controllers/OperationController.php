<?php

namespace App\Http\Controllers;

use App\Models\operation;
use Illuminate\Http\Request;
use Exception;
class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operation=operation::all();
        return view('html.operation.operations',compact('operation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('html.operation.addoper');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $operation=operation::create($request->all());
        return  redirect()->route('operation.index')
        ->with('success','تمت اضافة الحالة');
    }

    /**
     * Display the specified resource.
     */
    public function show(operation $operation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $operation= operation::find($id);
        return view('html.operation.editoperation',compact('operation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $operation=operation::find($id);
        }catch(Exception $e){
            return  redirect()->route('operation.index');
    
        }
        $operation->update($request->all());
           
            return  redirect()->route('operation.index')->with('success','تمت تعديل العملية');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        operation::destroy($id);
        return  redirect()->route('operation.index')->with('success','تمت حذف العملية');
    }
}
