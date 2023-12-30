<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'no_anggota';
    protected $allowedFields = ['npm', 'nama', 'no_hp'];
}
