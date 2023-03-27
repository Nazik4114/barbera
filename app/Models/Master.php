<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\BelongsToMany;

class Master extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','active'];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

}
