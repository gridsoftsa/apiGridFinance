<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanInstallment extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $fillable = [
    'loan_id',
    'installment_number',
    'amount',
    'due_date',
    'paid_date',
    'is_paid'
  ];

  public function loan()
  {
    return $this->belongsTo(Loan::class);
  }
}
