<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait HelperFunctions{

    function uploadImage($folder,$image)
    {
        $fileExtension = $image->getClientOriginalExtension();
        $fileName = time().rand(1,99).'.'.$fileExtension;
        $path = $folder;
        $image->move($path,$fileName);

        return $fileName;
    }//end of uploadImage

    public function Delete_attachment($disk,$path)
    {
        Storage::disk($disk)->delete($path);
    }


}
