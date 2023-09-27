<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CardMeta extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['link','card_id','icon','title'];
    public function card(){
        return $this->belongsTo(Card::class,'card_id');
    }
}
