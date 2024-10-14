<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\MainRequest;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index', compact('categories'));
    }

    public function confirm(MainRequest $request)
    {
        $confirm = $request->input();
        // dd($confirm);
        $content = Category::find($confirm['category_id']);
        return view('confirm', compact('confirm', 'content'));
    }
    public function create(Request $request)
    {
        $confirm = $request->only([
            'category_id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'address',
            'building',
            'detail'
        ]);
        if ($request->back == 'back') {
            return redirect('/')->withInput();
        } else {
            $confirm['tell'] = $request->tell1 . $request->tell2 . $request->tell3;
            // dd($confirm);
            Contact::create($confirm);
            return view('/thanks');
        }
    }

    public function admin(Request $request)
    {
        $contacts = Contact::with('category')->SearchWord($request->word)
            ->SearchGender($request->gender)
            ->SearchType($request->type)
            ->SearchDate($request->date)
            ->paginate(7)->withQueryString();
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
