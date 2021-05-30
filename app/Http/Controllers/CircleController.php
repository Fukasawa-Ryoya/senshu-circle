<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Circle;

class CircleController extends Controller {
    public function show() {
        $circles = Circle::inRandomOrder()->get();
        $circles_jp = Circle::orderBy('name', 'asc')->get();
        $circles_few = Circle::orderBy('people', 'asc')->get();
        $circles_many = Circle::orderBy('people', 'desc')->get();
        $circles_authorization = Circle::where('authorization', 'true')->get();
        return view(
            'circle_list',
            [
                'circles' => $circles,
                'circles_jp' => $circles_jp,
                'circles_few' => $circles_few,
                'circles_many' => $circles_many,
                'circles_authorization' => $circles_authorization,
            ]
        );
    }

    public function showDetail($id) {
        $circle = Circle::find($id);
        $circles_type = Circle::where('type', $circle->type)
            ->where('id', '<>', $circle->id)->get();

        return view('circle', ['circle' => $circle, 'circles_type' => $circles_type]);
    }

    public function showCategory($category) {
        $circles_category = Circle::where('category', $category)
            ->orderBy('name', 'asc')->get();

        $circles_category_many = Circle::where('category', $category)
            ->orderBy('people', 'desc')->orderBy('name', 'asc')->get();

        $circles_category_few = Circle::where('category', $category)
            ->orderBy('people', 'asc')->orderBy('name', 'asc')->get();
        $circles_category_authorization = Circle::where('category', $category)->where('authorization', 'true')->get();

        return view(
            'search_circle_list',
            [
                'circles_category' => $circles_category,
                'circles_category_many' => $circles_category_many,
                'circles_category_few' => $circles_category_few,
                'circles_category_authorization' => $circles_category_authorization,
            ]
        );
    }

    public function showType($type) {
        $circles_type = Circle::where('type', $type)
            ->orderBy('name', 'asc')->get();

        $circles_type_many = Circle::where('type', $type)
            ->orderBy('people', 'desc')->orderBy('name', 'asc')->get();

        $circles_type_few = Circle::where('type', $type)
            ->orderBy('people', 'asc')->orderBy('name', 'asc')->get();
        $circles_type_authorization = Circle::where('type', $type)
            ->where('authorization', 'true')->get();
        return view(
            'search_circle_list',
            [
                'circles_type' => $circles_type,
                'circles_type_many' => $circles_type_many,
                'circles_type_few' => $circles_type_few,
                'circles_type_authorization' => $circles_type_authorization,
            ]
        );
    }

    public function search(Request $request) {
        // dd($request->search);
        $results = Circle::where('name', 'like', "%{$request->search}%")
            ->orWhere('category', 'like', "%{$request->search}%")
            ->orWhere('type', 'like', "%{$request->search}%")->orderBy('name', 'asc')->get();

        $results_many = Circle::where('name', 'like', "%{$request->search}%")
            ->orWhere('category', 'like', "%{$request->search}%")
            ->orWhere('type', 'like', "%{$request->search}%")->orderBy('people', 'desc')->get();

        $results_few = Circle::where('name', 'like', "%{$request->search}%")
            ->orWhere('category', 'like', "%{$request->search}%")
            ->orWhere('type', 'like', "%{$request->search}%")->orderBy('people', 'asc')->get();
        
        // *(XorY)and Z
        $search = $request->search;
        $results_authorization = Circle::where(function ($query) use ($search) {
            $query->orWhere('name', 'like', "%$search%")
                ->orWhere('category', 'like', "%$search%")
                ->orWhere('type', 'like', "%$search%");
        })->where('authorization', 'true')->orderBy('name', 'asc')->get();

        return view(
            'search_circle_list',
            [
                'request' => $request,
                'results' => $results,
                'results_many' => $results_many,
                'results_few' => $results_few,
                'results_authorization' => $results_authorization,
            ]
        );
    }
}
