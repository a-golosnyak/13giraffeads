<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use DB;

class AdController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required'
        ]);

        $ad = new Ad;
        $ad->title = $request->input('title');
        $ad->description = $request->input('description');
        $ad->author = $request->input('author');
        $ad->save();

        return redirect("/$ad->id")->with('status', 'Ad created');
    }

    public function createAd()
    {
        return view('edit', ['title' => 'Tipe title here',
                            'description' => 'Tipe ad here',
                            'but' => 'Create']);
    }
/*
    public function editAd($id)
    {
        $ads = DB::select('SELECT * FROM ads where id = ?', [$id]);

        foreach ($ads as $ad) {
            $title = $ad->title;
            $description = $ad->description;
        }

        return view('edit', ['title'=>$title,
                            'description' => $description,
                            'but' => 'Edit' ]);
                            
    }
*/
    public function getAds()
    {
//      $ads = DB::select('SELECT * FROM ads ORDER BY created_at DESC')->paginate(3);
        $ads = Ad::orderBy('id', 'desc')->paginate(3);

        return view('ads', ['ads' => $ads]);
    }

    public function getAd($id)
    {
        $ads = DB::select('SELECT * FROM ads where id = ?', [$id]);

        return view('ad', ['ads' => $ads]);
    }

    public function delete($id)
    {
        $ads = DB::delete('DELETE FROM ads where id = ?', [$id]);

        return redirect("/")->with('status', 'Ad deleted');  
    }
}
