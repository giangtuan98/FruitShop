<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileStorageTrait
{
    public function uploadFile($link, $file)
    {
        try {
            return Storage::disk('admin')->put($link, $file);
        } catch (\Throwable $th) {
            return "";
        }
    }

    public function uploadFiles($link, $files)
    {
        $listFileUrl = [];

        foreach ($files as $file) {
            $listFileUrl[] = $this->uploadFile($link, $file);
        }

        return $listFileUrl;
    }
}
