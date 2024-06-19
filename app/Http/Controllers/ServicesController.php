<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
   public function index()
   {
      $data = [
         'title' => 'Add Services'
      ];
      return view('/addServices', $data);
   }

   public function addServices(Request $request)
   {
      if (!$request->hasFile('banner_image')) {
         $filePath = $request->banner_image;
      } else {
         $uploadResult = FileHelper::uploadBannerImage($request);
         if ($uploadResult['status'] && $request->hasFile('banner_image')) {
            $filePath = $uploadResult['file_path'];
         } else {
            return [
               'status' => false,
               'message' => 'File is not uploaded. Something went wrong.',
            ];
         }
      }
      if ($request->service_id) {
         $user = DB::table('services_pages')
            ->where('id', $request->service_id)
            ->update([
               'name' => $request->name,
               'title' => $request->title,
               'sub_title' => $request->sub_title,
               'short_description' => $request->short_description,
               'banner_img' => $filePath,
               'description' => $request->description
            ]);
      } else {
         $user = DB::table('services_pages')
            ->insert([
               'name' => $request->name,
               'title' => $request->title,
               'sub_title' => $request->sub_title,
               'short_description' => $request->short_description,
               'banner_img' => $filePath,
               'description' => $request->description
            ]);
      }

      if ($user) {
         $response = [
            'status' => true,
            'message' => 'Submitted successfully.',
         ];
         return $response;
      } else {
         $response = [
            'status' => false,
            'message' => 'Something went wrong',
         ];
         return $response;
      }
   }

   public function viewServices()
   {

      $service = DB::table('services_pages')
         ->select('id', 'name', 'createdAt', 'banner_img')
         ->paginate(10);
      return view('allServices', ['service' => $service]);
   }

   public function DeleteUser($id)
   {
      $deletedRows = DB::table('services_pages')
         ->where('id', $id)
         ->delete();
      if ($deletedRows) {
         return redirect('/admin/all-services')->with('success', 'user deleted successfully.');
      } else {
         return redirect('/admin/all-services')->with('error', 'Something went wrong');
      }
   }

   public function updateUser($id)
   {
      $services = DB::table('services_pages')
         ->where('id', $id)
         ->first();

      $data = [
         'title' => 'Update Services',
         'services' => $services
      ];

      return view('addServices', $data);
   }
}