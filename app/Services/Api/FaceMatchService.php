<?php


namespace App\Services\Api;


use Aws\Rekognition\RekognitionClient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class FaceMatchService implements FaceMatchInterface
{

    public function validateFaceWithBase(string $path_base_picture, $picture) : bool
    {
        // TODO: Implement validateFaceWithBase() method.

        $client = new RekognitionClient([
            'region'    => env('AWS_DEFAULT_REGION'),
            'version'   => 'latest'
        ]);

        if ($path_base_picture == null or $picture == null) return false;

        $pathPicture = $picture->store('temp_picture','local');

        $result = $client->compareFaces([
            'QualityFilter' => 'AUTO', // NONE|AUTO|LOW|MEDIUM|HIGH
            'SourceImage' => [ // REQUIRED
                'Bytes' => file_get_contents(storage_path('app/\/'. $path_base_picture)),
            ],
            'TargetImage' => [ // REQUIRED
                'Bytes' => file_get_contents(storage_path('app/\/'. $pathPicture)),
            ],
        ]);

        $result->get('FaceMatches');

        if (count($result['FaceMatches']) > 0) {
            if($result['FaceMatches'][0]['Face']['Confidence'] > 80) return true;
            return false;
        }

        return false;
    }
}
