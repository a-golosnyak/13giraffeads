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
                            'but' => 'Create',
                            'action'=>'edit/submit',
                            'id'=>'0']);
    }
    
    public function editAd($id)
    {
        $ads = DB::select('SELECT * FROM ads where id = ?', [$id]);
    
        foreach ($ads as $ad) {
            $title = $ad->title;
            $description = $ad->description;
        }
        $action = 'edit/edit/' . $id;
        return view('/edit', [  'title'=>$title,
                                'description' => $description,
                                'but' => 'Edit',
                                'action' => $action,
                                'id'=>$id]);
    }

    public function updateAd(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'id' => 'required'
        ]);

        $ad = new Ad;
        $ad->id = $request->input('id');
        $ad->title = $request->input('title');
        $ad->description = $request->input('description');
        $ad->author = $request->input('author');

        $ads = DB::update(
            "  UPDATE ads 
                            SET 
                            title='$ad->title',
                            description='$ad->description',
                            author='$ad->author'
                            WHERE id='$ad->id'",
                            [$ad->id]
        );
        return redirect("/")->with('status', 'Ad updated');
    }
    
    public function getAds()
    {
        $ads = Ad::orderBy('id', 'desc')->paginate(5);

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
