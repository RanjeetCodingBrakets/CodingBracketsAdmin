<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class FileHelper
{
    public static function uploadBannerImage(Request $request, $inputName = 'banner_image', $destination = 'assets/static/uploads')
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destination), $fileName);
            return [
                'status' => true,
                'file_path' => $destination . '/' . $fileName,
            ];
        } else {
            return [
                'status' => false,
                'message' => 'File is not uploaded. Something went wrong.',
            ];
        }
    }

    public static function uploadPortfolioImage(Request $request, $inputName = 'portfolio_image', $destination = 'assets/static/uploads')
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destination), $fileName);
            return [
                'status' => true,
                'file_path' => $destination . '/' . $fileName,
            ];
        } else {
            return [
                'status' => false,
                'message' => 'File is not uploaded. Something went wrong.',
            ];
        }
    }
}
