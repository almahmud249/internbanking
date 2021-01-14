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
        return view('entry.serial');
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
            'account' => 'required|unique:bill_entries|max:8|min:8',
            'address' => 'required',
            'phone' => 'required|max:11|min:11',
            
        ]);
        $data=array();
        $data['name']=$request->name;
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
    public function Bill_Entry()
    {
        return view('entry.billentry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillEntry  $billEntry
     * @return \Illuminate\Http\Response
     */
    public function InsertBill(Request $request)
    {

        $validatedData = $request->validate([
            'serial' => 'required|max:4|min:4',
            'account' => 'required| max:8|min:8',
            'amount' => 'required',
             'month' => 'required',
            'status' => 'required',
            
            
            
            
        ]);


        $serial=$request->serial;
        $srl=DB::table('bill_entries')->where('serial',$serial)->first();
        if($srl==null) {


                $notification=array(
                    'message'=>'Opps!!Serial not found',
                    'alert-type'=>'error'
                );
                return Redirect()->route('bill.entry')->with( $notification);
            
        }else{
          
            $account=$request->account;
            $month=$request->month;
            $chck=DB::table('insertbills')->where('account',$account)->where('month',$month)->first();
  
              if( $chck){

            
                $notification=array(
                    'message'=>'opps!! this bill already submitted',
                    'alert-type'=>'error'
                );
                return Redirect()->route('bill.entry')->with( $notification);
          
              }else{
                $data=array();
                $data['serial']=$request->serial;
                $data['account']=$request->account;
                $data['amount']=$request->amount;
                $data['month']=$request->month;
                $data['status']=$request->status;
                $data['comment']=$request->comment;
                $data['last_date']=$request->last_date;
    
                    $employee=DB::table('insertbills')
                    ->insert($data);
    
                    if($employee){
                        $notification=array(
                            'message'=>'Successfully bill entry',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('bill.entry')->with( $notification);
                    }else{
                        $notification=array(
                            'message'=>'Error',
                            'alert-type'=>'success'
                        );
                        return Redirect()->route('bill.entry')->with( $notification);
                    }
              }
                
               
            }
            

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillEntry  $billEntry
     * @return \Illuminate\Http\Response
     */
    public function ViewBill($account)
    {
        // $emp=DB::table('insertbills')
        // ->join('bill_entries', 'insertbills.account', 'bill_entries.account')
        // ->select('insertbills.*', 'bill_entries.*' )
        // ->first();
        $A=DB::table('bill_entries')->where('account',$account)->get();
        $B=DB::table('insertbills')->where('account',$account)->get ();
        
        return view('entry.singleaccount',compact('A','B'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BillEntry  $billEntry
     * @return \Illuminate\Http\Response
     */
    public function FetchBill()
    {
        $dt=DB::table('insertbills')->get();
        return view('entry.viewbill',compact('dt'));
    }

   
    public function LastDateBill()
    {
        
       $last_date=  date("Y-m-d");
       $today=Db::table('insertbills')->where('last_date',$last_date)->get();
       return view('entry.lastdatebill',compact('today'));
    }
}
