<?php
/**
 * Created by PhpStorm.
 * User: thilanMJ
 * Date: 10/8/18
 * Time: 11:41 PM
 */

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function getAllUsers()
    {
        $users = $this->userService->findUsersBasicInfo();

        return response()->json([
            'status' => true,
            'data' => $users
        ], 201);
    }

}