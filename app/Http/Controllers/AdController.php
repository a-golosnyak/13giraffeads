<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use DB;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:150',
            'description' => 'required|max:1500',
            'author' => 'required'
        ]);

        $ad = new Ad;
        $ad->title = $request->input('title');
        $ad->description = $request->input('description');
        $ad->author = $request->input('author');
        $ad->created_at = date("Y-m-d H:i:s");
        $ad->save();

        $ad->id = DB::getPdo()->lastInsertId();
        return redirect("/$ad->id")->with('status', 'Ad created');
    }

    public function createAd()
    {
        return view('edit', ['title' => '',
                            'description' => '',
                            'but' => 'Create',
                            'action'=>'edit/submit',
                            'id'=>'0']);
    }
    
    public function editAd($id)
    {  
        $ads = Ad::where('id', "$id")->get();

        if(Auth::user()->name == $ads[0]->author)
        {
            $action = 'edit/edit/';
            return view('/edit', [  'title'=>$ads[0]->title,
                                    'description' => $ads[0]->description,
                                    'but' => 'Save',
                                    'action' => $action,
                                    'id'=>$id]);
        }
        else
        {
            abort(403);
        }
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

        $ads = Ad::where('id', $ad->id)->get();

        if(Auth::user()->name == $ads[0]->author)
        {
            Ad::where('id', $ad->id)
             ->update(['title'=>$ad->title,
                        'description'=>$ad->description,
                        'author'=>$ad->author]);

            return redirect("/")->with('status', 'Ad updated');
        }
        else
        {
            abort(403);
        }
    }
    
    public function getAds()
    {
        $ads = Ad::orderBy('id', 'desc')->paginate(5);

        return view('ads', ['ads' => $ads]);
    }

    public function getAd($id)
    {
        $ad = Ad::where('id', $id)->get();
        $ad[0]->created_at = substr($ad[0]->created_at, 0, strpos($ad[0]->created_at, ' '));

        return view('ad', ['ads' => $ad]);
    }

    public function delete($id)
    {
        $ad = Ad::where('id', $id)->get();

        if(Auth::user()->name == $ad[0]->author)
        {
            $ad = Ad::where('id', $id)->delete();
            return redirect("/")->with('status', 'Ad deleted');
        }
        else
        {
            abort(403);
        }
    }
}
