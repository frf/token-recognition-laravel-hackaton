<?php


namespace App\Services\Api;


interface FaceMatchInterface
{
    public function validateFaceWithBase(string $path_base_picture, $picture ) : bool;
}
