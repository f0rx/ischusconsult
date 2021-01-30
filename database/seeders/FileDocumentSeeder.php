<?php

namespace Database\Seeders;

use App\Models\FileDocument;
use App\Models\JobApplication;
use Illuminate\Database\Seeder;

class FileDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FileDocument::factory()->count(JobApplication::all()->count())->create();
    }
}
