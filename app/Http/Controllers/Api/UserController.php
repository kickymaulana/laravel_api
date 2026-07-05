<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();

        if ($search = $request->input('search')) {
            $query->whereAny([
                'name',
                'email',
            ], 'like', "%{$search}%");
        }

        $perPage = $request->input('per_page', 10);

        $users = $query->paginate($perPage);

        return response()->json($users);
    }
}
