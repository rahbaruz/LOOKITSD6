<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::get();
        return view("page.dashboard.category.main", compact('categories', 'user'));
    }
    public function create()
    {
        $categories = Category::get();
        return view("page.dashboard.category.input", compact('categories'));
    }

    public function store(Request $request)
    {
        $path = $request->file('icon')->store('icons', 'public');
        // dd($path);
        Category::create([
            "category" => $request['category'],
            "icon" => $path,
        ]);
        $categories = Category::get();
        return view("page.dashboard.category.input", compact('categories'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        $categories = Category::get();
        return view("page.dashboard.category.input", compact('categories'));
    }

    public function detail($id)
    {
        
        $events = Event::where("id", $id)->paginate(20);
        // dd($events);
        return view("page.dashboard.event.all_event", compact("events"));
    }
}
