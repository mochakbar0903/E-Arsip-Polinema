<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page, Request $request)
    {

        if($request->has('search')){
            $arsip =Arsip::where('judul', 'LIKE', '%'. $request->search.'%')->paginate(5);
        }else{
            $arsip =Arsip::paginate(5);
        }
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}", compact('arsip'));
        }
        return abort(404);
    }

    public function create()
    {
        //
        return view('pages.add_arsip',compact('arsip'));
    }

    public function store(Request $request)
    {

        // dd($request);

        $request->validate([
            'no_surat' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'file' => 'required',
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file('file')->storeAs('public', $fileName);
        Arsip::create([
            'no_surat' => $request->no_surat,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'file' => $fileName
        ]);

        return redirect()->route('page.index', 'arsip')->with('succes', 'Data Berhasil di Input');
        // {{ route('page.index', 'arsip') }}
    }
    public function destroy($id){

            $data = Arsip::find($id);

            $data->delete();
            return redirect()->route('page.index', 'arsip')->with('succes', 'Data Berhasil di Input');
    }

    public function show($id )
    {
        $show = Arsip::find($id);
        return view('pages.viewpdf',compact('show'));

    }
    public function showedit($id)
    {
        $show = Arsip::find($id);
        return view('pages.edit_arsip', compact('show'));
    }

    public function update(Request $request, $id){


        $show = Arsip::where('id', $request->id)->first();
        $fileName = time() . '.' . $request->file->extension();
        $request->file('file')->storeAs('public', $fileName);
        $show->update([
            'no_surat' => $request->no_surat,
            'kategori'=> $request->kategori,
            'judul'=> $request->judul,
            'file'=> $fileName
        ]);
        return redirect()->route('page.index', 'arsip')->with('succes', 'Data Berhasil di Input');
    }

}
