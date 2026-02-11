<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Language;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /* ============================
        INDEX
    ============================ */
    public function index()
    {
        $blogs = Blog::with('user', 'updatedby')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.blog.index', compact('blogs'));
    }

    /* ============================
        CREATE
    ============================ */
    public function create()
    {
        return view('admin.blog.create', [
            'categories' => Category::latest('created_at')->get(),
            'languages'  => Language::latest()->get(),
            'stores'     => Store::latest('created_at')->get(),
        ]);
    }

    /* ============================
        STORE
    ============================ */
    public function store(Request $request)
    {
        $request->validate([
            'name'             => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:blogs,slug',
            'description'      => 'nullable',
            'title'            => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'meta_keyword'     => 'nullable|string|max:255',
            'image'            => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'content'          => 'required|string',
            'category_id'      => 'required|exists:categories,id',
            'status'           => 'required|boolean',
            'language_id'      => 'required|exists:languages,id',
            'store_id'         => 'nullable|exists:stores,id',
        ]);

        $blog = new Blog();
        $blog->user_id        = Auth::id();
        $blog->language_id    = $request->input('language_id');
        $blog->store_id       = $request->input('store_id');
        $blog->name           = $request->input('name');
        $blog->slug           = $request->input('slug');
        $blog->description    = $request->input('description');
        $blog->title          = $request->input('title');
        $blog->content        = $request->input('content');
        $blog->meta_keyword   = $request->input('meta_keyword');
        $blog->meta_description = $request->input('meta_description');
        $blog->status         = $request->input('status') ?? 0;
        $blog->category_id    = $request->input('category_id');
        $blog->save();

        /* 🖼 IMAGE UPLOAD */
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($blog->slug) . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/blogs');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }
            $image->move($uploadPath, $imageName);
            $blog->image = $imageName;
            $blog->save();
        }

        return redirect()->route('admin.blog.show', $blog->id)
            ->with('success', 'Blog created successfully.');
    }
    /* ============================
        SHOW
    ============================ */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', [
            'blog' => $blog,
        ]);
    }

    /* ============================
        EDIT
    ============================ */
   public function edit(Blog $blog)
    {
        return view('admin.blog.edit', [
            'blog'       => $blog,
            'categories' => Category::latest('created_at')->get(),
            'languages'  => Language::latest('created_at')->get(),
            'stores'     => Store::latest('created_at')->get(),
        ]);
    }

    /* ============================
        UPDATE
    ============================ */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'name'             => 'required|string|max:255',
            'slug'             => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'description'      => 'nullable|string',
            'title'            => 'required|string|max:255',
            'content'          => 'required|string',
            'image'            => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'category_id'      => 'required|exists:categories,id',
            'language_id'      => 'required|exists:languages,id',
            'store_id'         => 'nullable|exists:stores,id',
            'status'           => 'nullable|boolean',
        ]);

        /* 🖼 IMAGE UPDATE */
        if ($request->hasFile('image')) {

            // Delete old image
            if ($blog->image) {
                $oldPath = public_path('uploads/blogs/' . $blog->image);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $image = $request->file('image');
            $imageName = Str::slug($request->slug) . '.' . $image->getClientOriginalExtension();

            $uploadPath = public_path('uploads/blogs');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $image->move($uploadPath, $imageName);
            $blog->image = $imageName;
        }

        /* 📝 UPDATE DATA */
        $blog->updated_id       = Auth::id();
        $blog->language_id      = $request->input('language_id') ?? $blog->language_id;
        $blog->store_id         = $request->input('store_id') ?? $blog->store_id;
        $blog->name             = $request->input('name') ?? $blog->name;
        $blog->slug             = $request->input('slug') ?? $blog->slug;
        $blog->description      = $request->input('description') ?? $blog->description;
        $blog->title            = $request->input('title') ?? $blog->title;
        $blog->content          = $request->input('content') ?? $blog->content;
        $blog->meta_keyword     = $request->input('meta_keyword') ?? $blog->meta_keyword;
        $blog->meta_description = $request->input('meta_description') ?? $blog->meta_description;
        $blog->status           = $request->input('status') ?? 0;
        $blog->category_id      = $request->input('category_id') ?? $blog->category_id;
        $blog->save();

        return redirect()->route('admin.blog.show', $blog->id)
            ->with('success', 'Blog updated successfully.');
    }

    /* ============================
        DELETE SINGLE
    ============================ */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            $imagePath = public_path('uploads/blogs/' . $blog->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $blog->forceDelete();

        return redirect()->route('admin.blog.index')
            ->with('success', 'Blog deleted successfully.');
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->ids;

        if (!$ids) {
            return redirect()->back()->with('error', 'No blogs selected.');
        }

        foreach ($ids as $id) {
            $blog = Blog::findOrFail($id);
            if ($blog) {
                if ($blog->image) {
                    $path = public_path('uploads/blogs/' . $blog->image);
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
                $blog->delete();
            }
        }

        return redirect()->route('admin.blog.index')
            ->with('success', 'Selected blogs deleted successfully.');
    }
}
