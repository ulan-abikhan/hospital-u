<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'department_id',
      'job',
      'monday',
      'tuesday',
      'wednesday',
      'thursday',
      'friday',
      'saturday',
      'sunday'
    ];

  public function services(): BelongsToMany
  {
    return $this->belongsToMany(
      Service::class,
      'doctor_service_links'
    );
  }

  public function department(): BelongsTo {
    return $this->belongsTo(Department::class);
  }

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }


}
