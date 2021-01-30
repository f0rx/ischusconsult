<?php

namespace App\Models;

use App\Models\JobApplication;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileDocument extends Model
{
    use HasFactory, SoftDeletes;

    public const FAKE_FILE_DOCUMENTS_ROOT = "public/fake";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'extension',
        'full_path',
        'size',
        'is_public',
        'job_application_id',
    ];

    /**
     * Get the Job Application that owns the document.
     */
    public function application()
    {
        return $this->belongsTo(JobApplication::class);
    }
}
