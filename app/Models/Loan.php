<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = [
    'user_id',
    'borrower_name',
    'amount',
    'interest_rate',
    'due_date',
    'is_paid'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function installments()
  {
    return $this->hasMany(LoanInstallment::class);
  }
}
