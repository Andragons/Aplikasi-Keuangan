<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $fillable = ['transaction_type', 'category_id', 'amount', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
