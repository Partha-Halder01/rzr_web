<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function home()
    {
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order')
            ->withCount('activeProducts')
            ->take(6)
            ->get();

        $featuredProducts = Product::where('is_active', true)
            ->with('category')
            ->inRandomOrder()
            ->take(8)
            ->get();

        return view('home', compact('categories', 'featuredProducts'));
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order')
            ->withCount('activeProducts')
            ->get();

        return view('products.index', compact('categories'));
    }

    public function category(Category $category)
    {
        $products = $category->products()
            ->where('is_active', true)
            ->paginate(12);

        $categories = Category::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('products.category', compact('category', 'products', 'categories'));
    }

    public function product(Category $category, Product $product)
    {
        $relatedProducts = Product::where('category_id', $category->id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->take(4)
            ->get();

        return view('products.show', compact('category', 'product', 'relatedProducts'));
    }

    public function services()
    {
        return view('services');
    }

    public function distributor()
    {
        return view('distributor');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        Contact::create($validated);

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
