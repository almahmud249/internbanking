<?php

namespace App\Http\Controllers;

use App\Models\BillEntry;
use Illuminate\Http\Request;
use DB;

class BillEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function NewSerial()
    {
        return view('entry.billentry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BillEntry(Request $request)
    {
        $validatedData = $request->validate([
            'serial' => 'required|unique:bill_entries|max:4|min:4',
            'account' => 'required|unique:bill_entries|max:12|min:12',
            'address' => 'required',
            'phone' => 'required|max:11|min:11',
            
        ]);
        $data=array();
        $data['serial']=$request->serial;
        $data['account']=$request->account;
        $data['address']=$request->address;
        $data['phone']=$request->phone;
        

        if($data){ 
           
                
                $employee=DB::table('bill_entries')
                ->insert($data);

                if($employee){
                    $notification=array(
                        'message'=>'Successfully data inserted',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('home')->with( $notification);
                }else{
                    $notification=array(
                        'message'=>'Error',
                        'alert-type'=>'success'
                    );
                    return Redirect()->route('home')->with( $notification);
                }
            }else{
                return Redirect()->back();
            }
        

          
                
            


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillEntry  $billEntry
     * @return \Illuminate\Http\Response
     */
    public function show(BillEntry $billEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillEntry  $billEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(BillEntry $billEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BillEntry  $billEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BillEntry $billEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillEntry  $billEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillEntry $billEntry)
    {
        //
    }
}
