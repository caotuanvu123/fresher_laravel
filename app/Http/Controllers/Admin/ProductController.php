<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // get product
        // select * from product

        // get tat ca du lieu trong table
        // ham nay nam trong eloquent
        // select * from product;
        $products = Product::all();

//        return view('product.master', ['products' => $products]);
        return view('admin.products.master', compact('products'));
    }

    public function create()
    {
        return view('admin.products.add');
    }

    public function store(Request $request)
    {
        // xu ly o day
        //      $_POST;
        // $request->all(); lay tat ca requesst cua nguoi dung
        $data = $request->all();

        $request->validate([
            'name' => 'required|unique:products,name|string|min:3',
            'price' => 'required|int'
        ]);

        Product::create($request->all());

        return redirect(route('admin.product.index'))->with('created-success', 'Created successfully !');
    }

    public function detail($id)
    {
        // select * from product where id = id
        // eloquent laravel
        $product = Product::find($id);

        return view('admin.products.detail', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:100',
            'price' => 'required|int'
        ]);

        // update *...... sql
        Product::find($id)->update($request->all());

        return redirect(route('admin.product.index'))->with('updated-success', 'Updated successfully !');
    }

    public function delete($id)
    {
        Product::destroy($id);
        return redirect()->back()->with('deleted-success', 'Deleted successfully !');
    }
}
