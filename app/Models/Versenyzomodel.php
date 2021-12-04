<?php

namespace App\Models;  
use CodeIgniter\Model;

  
class Versenyzomodel extends Model{

    protected $table = 'versenyzo';
    
    protected $allowedFields = [
        'email',
        'jelszo',
        'created_at',
        'aktiv',
        'vezeteknev',
        'utonev'
    ];

}