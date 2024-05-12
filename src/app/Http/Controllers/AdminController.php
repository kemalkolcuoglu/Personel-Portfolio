<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

use App\Models\BlogEntry;
use App\Models\Category;
use App\Models\Tag;

class AdminController extends Controller
{
    function index() {
        $entries = BlogEntry::all();
        return view('admin.index', compact('entries'));
    }

    function showPost($id) {
        $entry = BlogEntry::find($id);
        return view('admin.showPost', compact('entry'));
    }

    function addPost() {
        $categories = Category::where('is_active', true)->get();
        return view('admin.addPost', compact('categories'));
    }

    function storePost(Request $request) {
        try{
            $entry = new BlogEntry();
            $entry['title'] = $request->title;
            $entry['category'] = $request->category;
            $entry['seo_description'] = $request->seo_description;
            $entry['abstract'] = $request->abstract;
            $entry['content'] = $request->content;
            $entry['is_active'] = $request->is_active ? true : false;

            $entry->save();

            $tags = explode(',', $request->tags);
            foreach($tags as $tag) {
                $newTag = new Tag();
                $newTag['name'] = $tag;
                $newTag['entry_id'] = $entry['id'];
                $newTag->save();
            }

            return redirect(route('admin.index'))->with('success', 'Success!');
        } catch(Exception $exp) {
            return redirect()->back()->with('error', 'Fail!');
        }
    }

    function editPost($id) {
        $entry = BlogEntry::find($id);
        $categories = Category::where('is_active', true)->get();
        $tags = Tag::where('entry_id', $id)->get();
        $strTags = '';
        foreach($tags as $tag) {
            $strTags .= $tag['name'] . ',';
        }
        $strTags = substr($strTags, 0, -1);
        return view('admin.editPost', compact('entry', 'strTags', 'categories'));
    }

    function updatePost($id, Request $request) {
        try {
            $blogEntry = BlogEntry::find($id);
            $entry = clone $blogEntry;
            $entry['title'] = $request->title;
            $entry['category'] = $request->category;
            $entry['seo_description'] = $request->seo_description;
            $entry['abstract'] = $request->abstract;
            $entry['content'] = $request->content;
            $entry['is_active'] = $request->is_active ? true : false;

            $entry->save();

            $existTags = Tag::where('entry_id', $id)->delete();

            $tags = explode(',', $request->tags);
            foreach($tags as $tag) {
                $newTag = new Tag();
                $newTag['name'] = $tag;
                $newTag['entry_id'] = $entry['id'];
                $newTag->save();
            }

            return redirect(route('admin.index'));
        } catch(Exception $exp) {
            return redirect()->back();
        }
    }

    function deletePost ($id, Request $request) {
        $entry = BlogEntry::find($id);
        $entry->delete();
        return redirect(route('admin.index'));
    }

    function categories() {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    function addCategory() {
        $listedCategories = Category::all();
        return view('admin.addCategory', compact('listedCategories'));
    }

    function storeCategory(Request $request) {
        try{
            $category = new Category();
            $category['title'] = $request->title;
            $category['base_category'] = $request->base_category;
            $category['is_active'] = $request->is_active ? true : false;
            $category->save();

            return redirect(route('admin.categories'))->with('success', 'Success!');
        } catch(Exception $exp) {
            return redirect()->back()->with('error', 'Öhüü!');
        }
    }

    function editCategory($id) {
        $category = Category::find($id);
        $listedCategories = Category::all();
        return view('admin.editCategory', compact('category', 'listedCategories'));
    }

    function updateCategory($id, Request $request) {
        try{
            $oldCategory = Category::find($id);
            $category = clone $oldCategory;
            $category['title'] = $request->title;
            $category['base_category'] = $request->base_category;
            $category['is_active'] = $request->is_active ? true : false;
            $category->save();

            return redirect(route('admin.categories'))->with('success', 'Success!');
        } catch(Exception $exp) {
            return redirect()->back()->with('error', 'Öhüü!');
        }
    }

    function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect(route('admin.categories'));
    }
}
