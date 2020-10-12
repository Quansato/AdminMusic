<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;

trait StorageImage{
    public function storageTraitUpload($request,$fileName,$folderName){
        $fileNameA=$request->$fileName->getClientOriginalName();
        $this->genres->find($id)->update([
            'name' =>$request->name,
            'img_path'=>Storage::url($request->file('imgpath')->storeAs('public/'.$folderName,$fileNameA)),
        ]);
    }
}