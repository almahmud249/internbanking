 
    <style>

BODY {

	background: #FFFFFF;
	MARGIN-LEFT: 200px; 
    MARGIN-RIGHT: 200px; 
    MARGIN-TOP: 50px; 
	TEXT-ALIGN: center;
	scrollbar-3dlight-color: #F0F0EE;
	scrollbar-arrow-color: #676662;
	scrollbar-base-color: #F0F0EE;
	scrollbar-darkshadow-color: #DDDDDD;
	scrollbar-face-color: #E0E0DD;
	scrollbar-highlight-color: #F0F0EE;
	scrollbar-shadow-color: #F0F0EE;
	scrollbar-track-color: #F5F5F5
}




table.wikitable {

    background: #FFFFFF;
    border: 1px #aaa solid;
    border-collapse: collapse;
    text-align:center;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    color:#003399;
    font-weight:bold;
    font-size:11px;
    margin-bottom:40px;

}
.wikitable th, .wikitable td {
    border: 1px #aaa solid;
    padding: 0.2em;
    font-family:Verdana, Arial, Helvetica, sans-serif;
    color:#003399;
    font-weight:normal;
    font-size:11px;

    text-align:center;
}
.wikitable th {
    background: #f2f2f2;
    text-align: center;
    font-family:Verdana, Arial, Helvetica, sans-serif; 
   color:#003399; 
   font-weight:bold; 
font-size:11px;
}
.wikitable caption {
    font-weight: bold;
}

</style> 
<div>

<table width="400" class="wikitable" align="center" cellspacing="1" cellpadding="1">
    
                    <tbody>
                    @foreach($A as $row)
<tr>
                      <tr>
                        <th colspan="4" scope="col"><span>Consumers Details</span>&nbsp;</th>
                      </tr>
                      <tr>
                        <th scope="row"><div align="left"><span class="textcolor1">Account Name</span></div></th>
                        <td colspan="3"><div align="left"><span class="textcolor">{{$row->name}}</span></div></td>
                      </tr>
                      <tr>
                        <th scope="row"><div align="left"><span class="textcolor1">Account No:</span></div></th>
                        <td colspan="3"><div align="left"><span class="textcolor">{{$row->account}}</span></div></td>
                      </tr>
                      <tr>
                        <th scope="row"><div align="left"><span class="textcolor1">Address:</span></div></th>
                        <td colspan="3"><div align="left"><span class="textcolor">{{$row->address}}</span></div></td>
                      </tr>
                      <tr>
                        <th scope="row"><div align="left"><span class="textcolor1">Contact Number</span></div></th>
                        <td><div align="center"><span class="textcolor">{{$row->phone}}</span></div></td>
                       
                      </tr>
                     
</tr>
@endforeach
                    </tbody>

                    
                </table>
 



            <div style="overflow-x:auto;">

                <table class="wikitable" height="100" align="center" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                   
                        <tr>
                            <th>Bill No.</th>
                            <th>Bill Month</th>
                            <th>Unit (KWh)</th>
                            <th>Bill Amount(Without LPC).Tk</th>
                            <th>Due Date</th>
                            <th>View Bill</th>
                            <th>Status</th>
                            <th>PayOnline</th>
                        </tr>

                        
                        <tr>
                        @foreach($B as $row)
                                <td>{{$row->account}}</td>
                                <td>{{$row->month}}</td>
                                <td></td>
                                
                                <td>{{$row->amount}}</td>
                                <td>{{$row->last_date}}</td>
                                
                                
                                <td><a href="https://www.desco.org.bd/ebill/login.php" style="color:red;"class="btn btn-primary">View</a></td>
                                <td>{{$row->status}}</td>
                                
                                <!-- <td><input type="button" value="Bill Copy" name="btn" disabled="disabled"></td>
                                <td><img src="css/images/tick.gif"></td> -->
                                <td><input type="button" value="PayOnline" name="btn" disabled="disabled"></td>
                        </tr>

                        @endforeach
                    </tbody>
                 </table>
             </div>

            
</div>


                    


