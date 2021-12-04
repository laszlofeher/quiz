<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

/**
 * Description of Projectmodel
 *
 * @author feherlaszlo
 */
class Projectmodel  extends Model{
    protected $table = 'projekt';
    
    protected $allowedFields = [
        'p_id',
        'p_megnevezes',
        'p_rovid_leiras',
        'p_leiras',
        'p_idotartam',
        'p_tol',
        'p_ig',
        'p_idohozkotott',
        'p_csapat_egyeni',
        'nehezsegifok_nf_id',
        'projekt_temakor_pt_id',
        'projekt_tipus_pti_id'
    ];
    
    public function getProjectsByUserId(int $id){
        $db = db_connect();
        $sql = "SELECT * 
                FROM versenyzo v 
		LEFT JOIN projekt_versenyzo pv ON(v.v_id = pv.versenyzo_v_id)
		WHERE v.v_id = ?
                ";
        $db->query($sql, [$id]);
        
        
        
        
        
        
    }
    
}
