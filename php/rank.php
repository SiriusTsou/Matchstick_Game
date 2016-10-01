<?php
    require_once('config.php');
	header('Access-Control-Allow-Origin: *');  
	session_start();
	
	$c_e_u[10] = Array();
	$c_e_n[10] = Array();
	
	/* Select queries return a resultset */
    if ($result = $db->query("SELECT * FROM rank_count_easy ORDER BY num DESC LIMIT 10 ")) {
        $i = 0 ;
        while ($row = $result->fetch_row()) {
            $c_e_u[$i] = $row[0] ;
            $c_e_n[$i] = $row[1] ;
            $i++;
        }
        //printf("Select returned %d rows.\n", $result->num_rows);
    
        /* free result set */
        $result->close();
    }
    
    $c_n_u[10] = Array();
	$c_n_n[10] = Array();
	
	/* Select queries return a resultset */
    if ($result = $db->query("SELECT * FROM rank_count_normal ORDER BY num DESC LIMIT 10 ")) {
        $i = 0 ;
        while ($row = $result->fetch_row()) {
            $c_n_u[$i] = $row[0] ;
            $c_n_n[$i] = $row[1] ;
            $i++;
        }
        //printf("Select returned %d rows.\n", $result->num_rows);
    
        /* free result set */
        $result->close();
    }
    
    
    $c_h_u[10] = Array();
	$c_h_n[10] = Array();
	
	/* Select queries return a resultset */
    if ($result = $db->query("SELECT * FROM rank_count_hard ORDER BY num DESC LIMIT 10 ")) {
        $i = 0 ;
        while ($row = $result->fetch_row()) {
            $c_h_u[$i] = $row[0] ;
            $c_h_n[$i] = $row[1] ;
            $i++;
        }
        //printf("Select returned %d rows.\n", $result->num_rows);
    
        /* free result set */
        $result->close();
    }
    
    $c_u_u[10] = Array();
	$c_u_n[10] = Array();
	
	/* Select queries return a resultset */
    if ($result = $db->query("SELECT * FROM rank_count_ultra ORDER BY num DESC LIMIT 10 ")) {
        $i = 0 ;
        while ($row = $result->fetch_row()) {
            $c_u_u[$i] = $row[0] ;
            $c_u_n[$i] = $row[1] ;
            $i++;
        }
        //printf("Select returned %d rows.\n", $result->num_rows);
    
        /* free result set */
        $result->close();
    }

    $db->close();
	
    $data_array = array( 'count_easy_username1' => xss_clean($c_e_u[0]),'count_easy_num1' => xss_clean($c_e_n[0]),
    					 'count_easy_username2' => xss_clean($c_e_u[1]),'count_easy_num2' => xss_clean($c_e_n[1]),
    					 'count_easy_username3' => xss_clean($c_e_u[2]),'count_easy_num3' => xss_clean($c_e_n[2]),
    					 'count_easy_username4' => xss_clean($c_e_u[3]),'count_easy_num4' => xss_clean($c_e_n[3]),
    					 'count_easy_username5' => xss_clean($c_e_u[4]),'count_easy_num5' => xss_clean($c_e_n[4]),
    					 'count_easy_username6' => xss_clean($c_e_u[5]),'count_easy_num6' => xss_clean($c_e_n[5]),
    					 'count_easy_username7' => xss_clean($c_e_u[6]),'count_easy_num7' => xss_clean($c_e_n[6]),
    					 'count_easy_username8' => xss_clean($c_e_u[7]),'count_easy_num8' => xss_clean($c_e_n[7]),
    					 'count_easy_username9' => xss_clean($c_e_u[8]),'count_easy_num9' => xss_clean($c_e_n[8]),
    					 'count_easy_username10' => xss_clean($c_e_u[9]),'count_easy_num10' => xss_clean($c_e_n[9]),

                         'count_normal_username1' => xss_clean($c_n_u[0]),'count_normal_num1' => xss_clean($c_n_n[0]),
    					 'count_normal_username2' => xss_clean($c_n_u[1]),'count_normal_num2' => xss_clean($c_n_n[1]),
    					 'count_normal_username3' => xss_clean($c_n_u[2]),'count_normal_num3' => xss_clean($c_n_n[2]),
    					 'count_normal_username4' => xss_clean($c_n_u[3]),'count_normal_num4' => xss_clean($c_n_n[3]),
    					 'count_normal_username5' => xss_clean($c_n_u[4]),'count_normal_num5' => xss_clean($c_n_n[4]),
    					 'count_normal_username6' => xss_clean($c_n_u[5]),'count_normal_num6' => xss_clean($c_n_n[5]),
    					 'count_normal_username7' => xss_clean($c_n_u[6]),'count_normal_num7' => xss_clean($c_n_n[6]),
    					 'count_normal_username8' => xss_clean($c_n_u[7]),'count_normal_num8' => xss_clean($c_n_n[7]),
    					 'count_normal_username9' => xss_clean($c_n_u[8]),'count_normal_num9' => xss_clean($c_n_n[8]),
    					 'count_normal_username10' => xss_clean($c_n_u[9]),'count_normal_num10' => xss_clean($c_n_n[9]),

                         'count_hard_username1' => xss_clean($c_h_u[0]),'count_hard_num1' => xss_clean($c_h_n[0]),
    					 'count_hard_username2' => xss_clean($c_h_u[1]),'count_hard_num2' => xss_clean($c_h_n[1]),
    					 'count_hard_username3' => xss_clean($c_h_u[2]),'count_hard_num3' => xss_clean($c_h_n[2]),
    					 'count_hard_username4' => xss_clean($c_h_u[3]),'count_hard_num4' => xss_clean($c_h_n[3]),
    					 'count_hard_username5' => xss_clean($c_h_u[4]),'count_hard_num5' => xss_clean($c_h_n[4]),
    					 'count_hard_username6' => xss_clean($c_h_u[5]),'count_hard_num6' => xss_clean($c_h_n[5]),
    					 'count_hard_username7' => xss_clean($c_h_u[6]),'count_hard_num7' => xss_clean($c_h_n[6]),
    					 'count_hard_username8' => xss_clean($c_h_u[7]),'count_hard_num8' => xss_clean($c_h_n[7]),
    					 'count_hard_username9' => xss_clean($c_h_u[8]),'count_hard_num9' => xss_clean($c_h_n[8]),
    					 'count_hard_username10' => xss_clean($c_h_u[9]),'count_hard_num10' => xss_clean($c_h_n[9]),

                         'count_ultra_username1' => xss_clean($c_u_u[0]),'count_ultra_num1' => xss_clean($c_u_n[0]),
    					 'count_ultra_username2' => xss_clean($c_u_u[1]),'count_ultra_num2' => xss_clean($c_u_n[1]),
    					 'count_ultra_username3' => xss_clean($c_u_u[2]),'count_ultra_num3' => xss_clean($c_u_n[2]),
    					 'count_ultra_username4' => xss_clean($c_u_u[3]),'count_ultra_num4' => xss_clean($c_u_n[3]),
    					 'count_ultra_username5' => xss_clean($c_u_u[4]),'count_ultra_num5' => xss_clean($c_u_n[4]),
    					 'count_ultra_username6' => xss_clean($c_u_u[5]),'count_ultra_num6' => xss_clean($c_u_n[5]),
    					 'count_ultra_username7' => xss_clean($c_u_u[6]),'count_ultra_num7' => xss_clean($c_u_n[6]),
    					 'count_ultra_username8' => xss_clean($c_u_u[7]),'count_ultra_num8' => xss_clean($c_u_n[7]),
    					 'count_ultra_username9' => xss_clean($c_u_u[8]),'count_ultra_num9' => xss_clean($c_u_n[8]),
    					 'count_ultra_username10' => xss_clean($c_u_u[9]),'count_ultra_num10' => xss_clean($c_u_n[9]) ) ;
    


	outputAsC2DictionaryJSON($data_array) ;

    function outputAsC2DictionaryJSON($data){
        $data = array(
         'c2dictionary' => true,
         'data' => $data
        );
        outputData($data);
    }

    function outputAsC2ArrayJSON($data, $arrayDimensions){
        $data = array(
         'c2array' => true,
         'size' => $arrayDimensions,
         'data' => $data
        );
        outputData($data);
    }

    function outputData($data){
        header('Content-Type: application/json');
        echo json_encode($data);
        exit(1);
    }

    function xss_clean($data) {
        // Fix &entity\n;
        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do
        {
            // Remove really unwanted tags
            $old_data = $data;
            $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        }
        while ($old_data !== $data);

        // we are done...
        return $data;
    }