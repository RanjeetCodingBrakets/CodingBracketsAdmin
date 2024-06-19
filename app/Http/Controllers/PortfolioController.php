<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
   public function index()
   {
      $category = DB::table('project_category')
         ->select('*')
         ->get();
      return view('addPortfolio', ['category' => $category]);
   }

   public function view()
   {
      $portfolio_data = DB::table('portfolio')
         ->join('project_category', 'project_category.id', '=', 'portfolio.cat_id')
         ->select('portfolio.id', 'portfolio.cat_id', 'portfolio.title', 'portfolio.description', 'portfolio.portfolio_image', 'portfolio.createdAt', 'project_category.name as category')
         ->paginate(10);

      return view('allPortfolios', ['portfolio_data' => $portfolio_data]);
   }

   public function updatePortfolio($id)
   {
      $portfolio_data = DB::table('portfolio')
         ->where('id', $id)
         ->first();

      $category = DB::table('project_category')
         ->select('*')
         ->get();

      $data = [
         'portfolio_data' => $portfolio_data,
         'category' => $category
      ];

      return view('addPortfolio', $data);
   }

   public function deletePortfolio($id)
   {
      $portfolio_data = DB::table('portfolio')
         ->where('id', $id)
         ->delete();

      if ($portfolio_data) {
         return redirect('/admin/portfolio/view')->with('success', 'portfolio deleted successfully.');
      } else {
         return redirect('/admin/portfolio/view')->with('error', 'Something went wrong');
      }
   }

   public function addPortfolio(Request $request)
   {
      if (!$request->hasFile('portfolio_image')) {
         $filePath = $request->portfolio_image;
      } else {
         $uploadResult = FileHelper::uploadPortfolioImage($request);
         if ($uploadResult['status'] && $request->hasFile('portfolio_image')) {
            $filePath = $uploadResult['file_path'];
         } else {
            return [
               'status' => false,
               'message' => 'File is not uploaded. Something went wrong.',
            ];
         }
      }
      if ($request->portfolio_id) {
         $user = DB::table('portfolio')
            ->where('id', $request->portfolio_id)
            ->update([
               'title' => $request->title,
               'portfolio_image' => $filePath,
               'description' => $request->description,
               'cat_id' => $request->cat_id
            ]);
      } else {
         $user = DB::table('portfolio')
            ->insert([
               'title' => $request->title,
               'portfolio_image' => $filePath,
               'description' => $request->description,
               'cat_id' => $request->cat_id
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
}