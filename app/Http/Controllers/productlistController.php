<?php

namespace App\Http\Controllers;

use App\Models\productlist;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class productlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $numberpages =8;
        if(strlen($katakunci)){
            $data = productlist::where('name_product','LIKE',"%".$katakunci."%")
            ->orWhere('category_product','LIKE' ,"%".$katakunci."%")
            ->orWhere('code_product','LIKE' ,"%".$katakunci."%")
            ->paginate($numberpages);
        }else {
            $data = productlist::orderBy('code_product', 'asc')->paginate($numberpages);
        }
        return view('productlist.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('code_product', $request->code_product);
        Session::flash('name_product', $request->name_product);
        Session::flash('category_product', $request->category_product);
        Session::flash('price_product', $request->code_product);
        Session::flash('stoq_product', $request->code_product);
        
        // $request->validate([
        //     'code_product' => 'required|unique:productlist,code_product',
        //     'name_product' => 'required',
        //     'category_product' => 'required',
        //     'price_product' => 'required',
        //     'stoq_product' => 'required',
        // ],[
        //     'code_product.required'=>'Need to be fill Code of Product',
        //     'code_product.unique'=>'The Code Product is already exist inside database',
        //     'name_product.required'=>'Need to be fill Name of Product',
        //     'category_product.required'=>'Need to be fill Category of Product',
        //     'price_product.required'=>'Need to be fill Price of Product',
        //     'stoq_product.required'=>'Need to be fill Stoq of Product',
        // ]);

        $data = [
            'code_product' => $request ->codeproduct,
            'name_product' => $request ->nameproduct,
            'category_product' => $request ->categoryp,
            'price_product' => $request ->pricep,
            'stoq_product' => $request ->stoqp,
        ];

        productlist::create($data);
        return redirect()->to('productlist')->with('success', 'Data success inputing');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = productlist::where('code_product', $id)->first();
        return view('productlist.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Session::flash('code_product', $request->code_product);
        Session::flash('name_product', $request->name_product);
        Session::flash('category_product', $request->category_product);
        Session::flash('price_product', $request->code_product);
        Session::flash('stoq_product', $request->code_product);

        $data = [
            'name_product' => $request ->nameproduct,
            'category_product' => $request ->categoryp,
            'price_product' => $request ->pricep,
            'stoq_product' => $request ->stoqp,
        ];

        productlist::where('code_product', $id)->update($data);
        return redirect()->to('productlist')->with('success', 'Success updating the data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        productlist::where('code_product',$id)->delete();
        return redirect()->to('productlist')->with('success', 'You success deleting the data');
    }
}
