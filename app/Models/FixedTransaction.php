<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FixedTransaction extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = [
    'user_id',
    'category_id',
    'type',
    'amount',
    'currency',
    'exchange_rate',
    'description',
    'start_date',
    'end_date',
    'frequency'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
