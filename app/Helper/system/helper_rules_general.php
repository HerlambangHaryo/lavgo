<?php

use Illuminate\Support\Facades\Storage;

    function rules_for_layout($link,$template_agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $additional = '';
            
            $template           = replace_to_underscore(dmha_2_id_check_col(dmha_1_link_check_col($link,'dmha_2'),'nama'));            
            $controller         = replace_to_underscore(dmha_3_id_check_col(dmha_1_link_check_col($link,'dmha_3'),'nama'));

            if($link == 'welcome')
            {
                $additional = '_'.replace_to_underscore(dmha_8_what_is_my_app_mode());
            } 
        // ------------------------------------------------------------------------- ACTION
            $isi    .= 'template_'.$template.'.layout_'.$template.'_'.$controller.$additional.'_'.$template_agent;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function rules_link($link,$DMHA_4,$ID_DATA,$DMHA_1,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi    =  $link;
    
            $exc_link = array("javascript:;", "javascript:void(0)");
        // ------------------------------------------------------------------------- ACTION    
            if (!in_array($link, $exc_link)) 
            {
                if($DMHA_4 == 10)
                {
                    if($DMHA_1 == 288)
                    {
                        $name = 'filename';
                    }
                    $isi = url('/').'/'.Storage::url('app/public/storage/dmha_'.$DMHA_1.'/'.$PARAM_2.'/'.dmha_14_generate_value(3,$DMHA_1,$ID_DATA,$name));
                }
                else
                {
                    $isi = url('/').'/'.$link;
                    if($PARAM_2 != 'NULL'){$isi .= '/'.$PARAM_2;}
                    if($ID_DATA != 'NULL'){$isi .= '/'.$ID_DATA;} 
                }
            }                

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function rules_active_sidebar($ID,$ID_CHECK,$level)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if($ID == $ID_CHECK)
            {
                $isi = 'active';
            }    
            else
            {
                $temp_ID = dmha_1_id_check_col($ID,'dmha_1');

                if($temp_ID == $ID_CHECK)
                {
                    $isi = 'active';
                }
            }  
            
            if($isi != 'active' && $level == 'level1')
            {
                $isi = rules_active_sidebar($temp_ID,$ID_CHECK,'stop');
            }

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function dev_mode_show_page_detail($AUTH_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

		// ------------------------------------------------------------------------- ACTION
            $isi .= 
            data_tabel_open_with_id('dev-mode-'.$ID).
            general_colgroup(11).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Transform ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Template', $class_th).'
                    '.th_me('Controller', $class_th).'
                    '.th_me('Page', $class_th).'
                    '.th_me('Icon', $class_th).'
                    '.th_me('Kategori', $class_th).'
                    '.th_me('Tipe', $class_th).'
                    '.th_me('Support ID', $class_th).'
                    '.th_me('Load Time', $class_th).'
                </tr>
            </thead>
            <tbody>
            ';     
                $dmha_300 = dmha_1_id_check_col($ID,'dmha_300');
                $isi .= '
                <tr>
                '.td_me($ID, 'text-center').'
                '.td_me(rules_transform_ID($ID,$dmha_300), '').'
                '.td_me(dmha_1_id_check_col($ID,'nama'), '').'
                '.td_me(dmha_2_id_check_col(dmha_1_id_check_col($ID,'dmha_2'),'nama'), '').'
                '.td_me(dmha_3_id_check_col(dmha_1_id_check_col($ID,'dmha_3'),'nama'), '').'
                '.td_me(dmha_4_id_check_col(dmha_1_id_check_col($ID,'dmha_4'),'nama'), '').'
                '.td_me(dmha_5_id_check_col(dmha_1_id_check_col($ID,'dmha_5'),'nama'), '').'
                '.td_me(dmha_9_id_check_col(dmha_1_id_check_col($ID,'dmha_9'),'nama'), '').'
                '.td_me(dmha_271_id_check_col(dmha_1_id_check_col($ID,'dmha_271'),'nama'), '').'
                '.td_me(dmha_300_id_check_col(dmha_1_id_check_col($ID,'dmha_300'),'nama'), '').'
                '.td_me((microtime(true) - LARAVEL_START), 'text-center').'
                </tr>
                ';
                
            $isi .= '
            </tbody>'.
            UI_tabel_close();
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function rules_for_label_form()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            

        // ------------------------------------------------------------------------- ACTION
            $isi    .= 'col-md-2';

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }
    
    function rules_link_target_blank($DMHA_4)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            if($DMHA_4 == 10)
            {
                $isi    .= ' target="_blank" ';
            }

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }



    
    
    
    function rules_transform_ID($ID,$SUPPORTED_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';            

        // ------------------------------------------------------------------------- ACTION
            if($SUPPORTED_ID == 1) { $isi = $ID;}
            elseif($SUPPORTED_ID == 2) { $isi = dmha_1_id_check_col($ID,'dmha_1'); }
            elseif($SUPPORTED_ID == 3) { $isi = dmha_1_id_check_col(dmha_1_id_check_col($ID,'dmha_1'),'dmha_1'); }

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }