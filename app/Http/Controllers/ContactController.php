<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function ShowContact()
    {
        $user = DB::table('ContactInfo')
            ->where('ContactInfo.status', '=', '0')
            ->join('Service', 'ContactInfo.service_id', '=', 'Service.id')
            ->select(
                'ContactInfo.id',
                'ContactInfo.name',
                'ContactInfo.email',
                'ContactInfo.phone',
                'ContactInfo.requirements',
                'ContactInfo.service_id',
                'ContactInfo.comment',
                'ContactInfo.createdAt',
                'ContactInfo.status',
                'Service.name as service_name'
            )
            ->orderBy('ContactInfo.createdAt', 'desc')
            ->paginate(10);

        return view('contact', ['user' => $user]);
    }

    public function DeleteContact($id)
    {
        $deletedRows = DB::table('ContactInfo')->where('id', $id)->delete();
        if ($deletedRows) {
            return redirect('/admin/contact')->with('success', 'user deleted successfully.');
        } else {
            return redirect('/admin/contact')->with('error', 'Something went wrong');
        }
    }

    public function UpdateContact(Request $request)
    {
        $id = $request->input('id');
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');
        $data = [
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ];
        if ($password == $cpassword) {
            $admin = DB::table('admin')
                ->where('id', $id)
                ->update($data);
            if ($admin) {
                $updatedAdmin = DB::table('admin')
                    ->select('id', 'name', 'email')
                    ->find($id);
                $request->session()->put('user', $updatedAdmin);
                return redirect('/admin/my-profile')->with('success', 'Updated successfully.');
            } else {
                return redirect('/admin/my-profile')->with('error', 'Something went wrong');
            }
        } else {
            return redirect('/admin/my-profile')->with('error', 'password not matched');
        }
    }

    public function approvedContact()
    {
        $user = DB::table('ContactInfo')
            ->where('ContactInfo.status', '=', '1')
            ->join('Service', 'ContactInfo.service_id', '=', 'Service.id')
            ->select(
                'ContactInfo.id',
                'ContactInfo.name',
                'ContactInfo.email',
                'ContactInfo.phone',
                'ContactInfo.requirements',
                'ContactInfo.service_id',
                'ContactInfo.comment',
                'ContactInfo.createdAt',
                'ContactInfo.status',
                'Service.name as service_name'
            )
            ->orderBy('ContactInfo.createdAt', 'desc')
            ->paginate(10);

        return view('approvedContactView', ['user' => $user]);
    }

    public function approveContactHandler($id)
    {
        $user = DB::table('ContactInfo')
            ->where('ContactInfo.id', $id)
            ->update(['status' => 1]);

        if ($user) {
            return redirect('/admin/contact')->with('success', 'Approved Contact successfully.');
        } else {
            return redirect('/admin/approved-contact')->with('error', 'Something went wrong');
        }

    }
}