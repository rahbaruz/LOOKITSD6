<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::limit(5)->get();
        $events = Event::paginate(5);
        return view("page.dashboard.main", compact("user", "categories", "events"));
    }
}
