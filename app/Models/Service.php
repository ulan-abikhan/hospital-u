<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
  use HasFactory;

  protected $fillable = ['department_id', 'name', 'price', 'duration'];

  public function department(): BelongsTo
  {
    return $this->belongsTo(Department::class);
  }

  public function doctors(): BelongsToMany
  {
    return $this->belongsToMany(Doctor::class, 'doctor_service_links');
  }
}
