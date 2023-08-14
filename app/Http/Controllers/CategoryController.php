<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        
        return view('kategori', [
            "title" => "Kategori",
            "slug" => "List",
            "categories" => Category::all(),
           
        ]);
    }

    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
    
        return redirect('/kategori/pemasukan')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function showCreateForm()
    {
        return view('create', [
            'title' => "Tambah Data"
        ]);
    }

    public function showPemasukanCategories()
    {
        $pemasukanCategories = Category::where('type', 'Pemasukan')->get();

        return view('kategori', [
            'pemasukanCategories' => $pemasukanCategories, 
            'title' => "Pemasukan"
        ]);
    }

    public function showPengeluaranCategories()
    {
        $pengeluaranCategories = Category::where('type', 'Pengeluaran')->get();

        return view('pengeluaran', [
            'pengeluaranCategories' => $pengeluaranCategories, 
            'title' => "Pengeluaran"
        ]);
    }
    

    public function showUpdateForm($id)
    {
        $category = Category::find($id);
        return view('update', [
            'category' => $category,
            'title' => "Update"
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        return redirect('/kategori/pemasukan')->with('success', 'Kategori berhasil diupdate.');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/kategori/pemasukan')->with('success', 'Kategori berhasil dihapus.');
    }
}
