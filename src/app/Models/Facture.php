<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $table = 'factures';
    public $timestamps = false;
    protected $fillable =['id', 'ref','title','price', 'tva','total','client'];
}
