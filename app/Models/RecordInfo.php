<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordInfo extends Model
{
  use HasFactory;

  protected $fillable = ['record_id', 'diagnose', 'note'];

  public function getCreatedAtAttribute($value)
  {
    return Carbon::parse($value)->format('d.m.Y H:i:s');
  }
}
