<?php

	use App\dmha_2;

    function dmha_2_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_2::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function data_table_dmha_2($DMHA_2,$DMHA_7)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_2::let_me_show_all();

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
