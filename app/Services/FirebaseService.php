<?php
namespace App\Services;

use Kreait\Firebase\RemoteConfig\User;

require './vendor/autoload.php';
use Kreait\Firebase\Factory;

class FirebaseService
{
    private $firebase;
    private $db;

    public function __construct()
    {
        $this->firebase = (new Factory)->withServiceAccount('./key/adminsxpo-a082ca577b54.json');
        $this->db = $this->firebase->createDatabase();
    }
    public function ordenesCocina()
    {
    $reference = $this->db->getReference('/users/cocina');
    $registros = $reference->getValue();
    return $registros;  
    }
} 
?> 