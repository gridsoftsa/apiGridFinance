<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = [
    'register_id',
    'category_id',
    'type',
    'amount',
    'currency',
    'exchange_rate',
    'description',
    'date',
  ];

  public function register()
  {
    return $this->belongsTo(Register::class);
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
