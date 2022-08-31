<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\FilterTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use FilterTrait;

    /**
     * @param Request $request
     * Gets all the users based on given url params
     * @return void
     */
    public function list(Request $request)
    {
        $params = $request->all();
        $users = $this->getFilteredQueryResult(User::query(), $params)->get();
    }

}
