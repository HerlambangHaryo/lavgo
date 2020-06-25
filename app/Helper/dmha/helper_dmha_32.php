<?php

	use App\dmha_32;

    function id_check_col_dmha_32($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_32::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function data_table_dmha_32($DMHA_2,$DMHA_7)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_32::let_me_show_all();

		// ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(1).'
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
            ';
            
            foreach($model as $row)
            {
                $isi .= '
                    <td>
                        '.$row->id.'
                    </td>
                    <td>
                        '.$row->nama.'
                    </td>
                    <td class="text-center">
                        '.dropdown_table($DMHA_2,$DMHA_7,$row->id).'
                    </td>
                </tr>
                ';
            }
                
            $isi .= '
            </tbody>
            ';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}
