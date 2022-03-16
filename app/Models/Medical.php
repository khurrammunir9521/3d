<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medical extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'myfile',
        'procedure',
        'parts',
        'discription',
        'pa_age',
        'pa_id',
        'pa_name',
        'hospital',
        'dr_phone',
        'dr_email',
        'dr_spec',
        'dr_name',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
