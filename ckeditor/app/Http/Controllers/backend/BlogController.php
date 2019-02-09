<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Modules\Blog\Http\Controllers;
use Modules\Blog\Models\Blog;


class BackendModuleBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function upload_image()
    {

        $this->validate(request() , [
            'upload' => 'required|mimes:jpeg,png,bmp',
        ]);

        $imagePath = "/uploads/blog/post-contents/". Carbon::now()->year . '/' . Carbon::now()->month;

        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();

        if(file_exists(public_path($imagePath) . $filename)) {
            $filename = Carbon::now()->timestamp . $filename;
        }

        $file->move(public_path($imagePath) , $filename);
        $url = $imagePath . $filename;

        $response = [
            "uploaded" => 1,
            "filename" => $filename,
            "url" => $url,
            "error" => ''
        ];
        return $response;
    }

}
