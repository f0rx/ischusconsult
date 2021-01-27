<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobAppliation extends Model
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
        'title',
        'email',
        'gender',
        'phone',
        'marital_status',
        'address',
        'address2',
        'city',
        'state',
        'specialization',
        'preferred_role',
        'summary',
        'total_years_of_xp',
        'recent_job_title',
        'year_of_degree_certificate',
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
}
