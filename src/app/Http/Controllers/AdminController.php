<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

use App\Models\BlogEntry;
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
        return view('admin.addPost');
    }

    function storePost(Request $request) {
        try{
            $entry = new BlogEntry();
            $entry['title'] = $request->title;
            $entry['seo_description'] = $request->seo_description;
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
            ddd([
                'request' => $request,
                'exp' => $exp
            ]);
            return redirect()->back()->with('error', 'Öhüü!');
        }
    }

    function editPost($id) {
        $entry = BlogEntry::find($id);
        $tags = Tag::where('entry_id', $id)->get();
        $strTags = '';
        foreach($tags as $tag) {
            $strTags .= $tag['name'] . ',';
        }
        $strTags = substr($strTags, 0, -1);
        return view('admin.editPost', compact('entry', 'strTags'));
    }

    function updatePost($id, Request $request) {
        try {
            $blogEntry = BlogEntry::find($id);
            $entry = clone $blogEntry;
            $entry['title'] = $request->title;
            $entry['seo_description'] = $request->seo_description;
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
            ddd([
                'request' => $request,
                'exp' => $exp
            ]);
            return redirect()->back();
        }
    }

    function deletePost ($id, Request $request) {
        $entry = BlogEntry::find($id);
        $entry->delete();
        return redirect(route('admin.index'));
    }
}
