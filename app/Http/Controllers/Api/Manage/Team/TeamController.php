<?php

namespace App\Http\Controllers\Api\Manage\Team;

use App\Http\Controllers\Controller;
use App\Http\Resources\Manage\User\UserResource;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        /** @var User $user */
        $user = $request->user();
        $userResource = new UserResource($user);
        return new UserResource($user);
    }
}
