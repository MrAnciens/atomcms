<?php

namespace App\Http\Controllers;

use App\Adapters\Factories\UserAdapterFactory;
use App\Models\WebsiteArticle;
use Illuminate\Support\Facades\Auth;

class MeController extends Controller
{
    private $userAdapter;

    public function __invoke()
    {
        $user = Auth::user();

        $this->userAdapter = UserAdapterFactory::create($user);

        return view('user.me', [
            'onlineFriends' => $this->userAdapter->getOnlineFriends(),
            'user' => $user->load('permission:id,rank_name'),
            'articles' => WebsiteArticle::latest()->with('user:id,username,look')->take(5)->get(),
        ]);
    }
}
