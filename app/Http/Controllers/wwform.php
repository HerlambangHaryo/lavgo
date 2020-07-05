<?php

namespace App\Http\Controllers;

use App\dmha_5;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class wwform extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function generate()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';            
            $DMHA_1         = $_GET['id'];
            $AUTH_ID        = $_GET['ida'];

            $dmha_2  = dmha_1_id_check_col($DMHA_1,'dmha_2');
        // ------------------------------------------------------------------------- ACTION

            if($dmha_2 == 1)
            {
                $isi .= color_admin_v42_hidden($AUTH_ID,$DMHA_1);
                $isi .= color_admin_v42_form($AUTH_ID,$DMHA_1);
            }
            
            $isi .= $DMHA_1;
        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }
    
    public function postdata(Request $request)
    {       
        // ------------------------------------------------------------------------- INITIALIZE
        // ------------------------------------------------------------------------- SUBMITTING DATA
            if( !empty( request()->all() ) )
            {
                $isi = 'kesini la'.$request->id.'a';

                //dmha_5::create(request()->all());
                dmha_5::insert(
                        ['nama' => $request->nama,   ]
                    );
                if( !empty(request('submit'))) 
                {         
                    //session()->flash('Success',flash_messages(1));
                    $isi = 'kesini';

                    // dmha_5::insert(
                    //     ['name' => $request->name,   ]
                    // );
                }
            }     
        // ------------------------------------------------------------------------- SEND
        

    }
}
