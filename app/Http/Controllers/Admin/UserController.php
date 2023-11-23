<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\InvariantError;
use App\Exceptions\NotFoundError;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Utils\Constants;
use App\Utils\ErrorHandler;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:8'
            ]);
        } catch (\Throwable $th) {
            $data = ErrorHandler::handle($th);

            return response()->json($data["data"], $data["code"]);
        }
    }

    public function banUser(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required'
            ]);

            $user = User::whereId($request->id)->first();

            if (!$user) {
                throw new NotFoundError("User tidak ditemukan");
            }

            if ($user->status == Constants::user_status["banned"]) {
                throw new InvariantError("User sudah dibanned");
            }

            $user->update([
                'status' => Constants::user_status["banned"]
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'User berhasil di banned'
            ], 200);
        } catch (\Throwable $th) {
            $data = ErrorHandler::handle($th);

            return response()->json($data["data"], $data["code"]);
        }
    }

    public function getTableUser(Request $request)
    {
        if (request()->ajax()) {
            $query = User::orderBy('created_at', 'desc');

            return DataTables::of($query)
                ->addColumn('action', function ($query) {
                    return view('admin.user-menu', compact([
                        'query'
                    ]));
                })
                ->addIndexColumn()
                ->make(true);
        }
    }
}
