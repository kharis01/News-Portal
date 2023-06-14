<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class SliderController extends Controller
{
    public function index()
    {
        try {
            $slider = Slider::latest()->paginate('10');

            if($slider){
                return ResponseFormatter::success($slider, 'Data Slider berhasil diambil');
            } else {
                return ResponseFormatter::error(null, 'Data Slider tidak ada', 404);
            }
        } catch (\Error $error) {
            return ResponseFormatter::error([
                'message' => 'Something When Wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function create(Request $request)
    {
        try {
            $this->validate($request, [
                'image'       => 'required|mimes:png,jpg,jpeg|max:2000',
                'url'         => 'required'
            ]);
    
            //upload image
            $image = $request->file('image');
            $image->storeAs('public/slider', $image->hashName());
    
            //save to DB
            $slider = Slider::create([
                'image'             => $image->hashName(),
                'url'               => $request->url
            ]);
            
            if ($slider) {
                return ResponseFormatter::success($slider, 'Data slider berhasil ditambah');
            } else {
                return ResponseFormatter::error(null, 'Data slider gagal ditambahkan', 404);
            }
            

        } catch (\Error $error) {
            return ResponseFormatter::error([
                'data' => null,
                'message' => 'Data gagal ditambahkan',
                'error' => $error
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            // delete image
            Storage::disk('local')->delete('public/slider'. basename($slider->image));
            //delete data
            $slider->delete();

            if ($slider) {
                return ResponseFormatter::success($slider, 'Data slider berhasil dihapus');
            } else {
                return ResponseFormatter::error(null, 'Data slider tidak ada', 404);
            }
            

        } catch (\Error $error) {
            ResponseFormatter::error([
                'data' => null,
                'message' => 'Data gagal dihapus',
                'error' => $error
            ]);
        }
    }

}
