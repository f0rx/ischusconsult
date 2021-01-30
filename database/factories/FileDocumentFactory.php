<?php

namespace Database\Factories;

use App\Models\FileDocument;
use App\Models\JobApplication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FileDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FileDocument::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $extensions = ['.docx', '.doc', '.pdf'];

        return [
            'extension' => $this->faker->randomElement($extensions),
            'size' => mt_rand(0, 2000000),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (FileDocument $doc) {
            try {
                $job = JobApplication::whereId($doc->id)->first();

                // $lastJobId = JobApplication::all()->last()->id;

                // $current = 1;

                // if ($doc->id > $lastJobId) {
                //     $job = JobApplication::whereId($current)->first();

                //     if ($job != null) {
                //         $doc->update([
                //             'name' => $job->application_id,
                //             'full_path' => FileDocument::FAKE_FILE_DOCUMENTS_ROOT . '/' . $job->application_id . $doc->extension,
                //             'job_application_id' => $job->id,
                //             'application_id' => $job->application_id
                //         ]);
                //     }

                //     $current++;
                // }

                if ($job != null) {
                    $doc->update([
                        'name' => $job->application_id,
                        'full_path' => FileDocument::FAKE_FILE_DOCUMENTS_ROOT . '/doc.docx',
                        'job_application_id' => $job->id,
                        'application_id' => $job->application_id
                    ]);
                }
            } catch (ModelNotFoundException $th) {
            }
        });
    }
}
