<?php

namespace App\Models;

use App\Models\FileDocument;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'application_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'marital_status',
        'age',
        'address',
        'city',
        'state',
        'gender',
        'specialization',
        'preferred_role',
        'recent_job_title',
        'total_years_of_xp',
        'summary',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'dob' => 'datetime',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'application_id';
    }

    /**
     * Get the File documents for a Job Application.
     */
    public function documents()
    {
        return $this->hasMany(FileDocument::class);
    }
}
