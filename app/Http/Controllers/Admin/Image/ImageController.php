<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function delete(Image $image)
    {
        unlink(public_path($image->path));

        $image->delete();

        return redirect()->back()->with('success', 'Image berhasil dihapus');
    }
}
