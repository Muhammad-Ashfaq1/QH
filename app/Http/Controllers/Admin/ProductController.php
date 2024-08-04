<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Helpers\FileUploadManager;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;



class ProductController extends Controller
{
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'product_model' => 'required|string|max:255',
    //         'wattage' => 'required|numeric|min:0',
    //         'guarantee' => 'nullable|string',
    //         'initial_lumen' => 'required|',
    //         'stable_lumen' => 'required|',
    //         'ra' => 'required|',
    //         'beam_angle' => 'required|',
    //         'life_hours' => 'required|',
    //         'lamp_size_h1' => 'required|',
    //         'lamp_size_h2' => 'required|',
    //         'lamp_size_d' => 'required|',
    //         'inches' => 'required|',
    //         'd_round' => 'required|',
    //         'd_square' => 'required|',
    //         'cut_square' => 'required|',
    //         'cut_round' => 'required|',
    //         'h' => 'required|',
    //         'life' => 'required|',
    //         'shape' => 'required|',
    //      //   'image_url' => 'required|',
    //         'lamp_size_w' => 'required|',
    //         'lamp_size_i' => 'required|',
    //         'lamp_size_l' => 'required|',
    //         'lamp_size_t' => 'required|',
    //         'ip_class' => 'required|',
    //     ]);
    //         $product = new Product($validatedData);
    //         $product->save();
    
    //         return redirect()->route('products.index')->with('success', 'Product created successfully!');
        

    // }


    public function index()
    {
        $products = Product::with('productType')->orderByDesc('created_at')->get();
        return view('Admin.product.index', compact('products'));
    }

    public function listing()
    {
        $products = Product::orderByDesc('created_at')->get();
        return view('product.data-table', compact('products'))->render();
    }

    public function getAllProductType()
    {
        
          
            $data = ProductType::orderBy('type_name')->get();
            return response()->json($data);
      

    }

    public function store(Request $request)
    {
        $data = $request->all();
    
        if ($request->hasFile('image_url')) {
            $brochure = FileUploadManager::uploadFile($request->file('image_url'), 'public/images/products/');
           dd($brochure);
            $data['image_url'] = $brochure['doc_name'];
        }
        return Product::updateOrCreate(['id' => $data['id']],$data);
    }

    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }
    public function delete($id)
    {
        $product =  Product::findOrFail($id);
        if($product){
            $product->delete();
            $products = Product::with('productType')->orderByDesc('created_at')->get();
            return view('Admin.product.data-table', compact('products'))->render();
        }
    }



    //user site 



    public function productList(Request $request , $id = null)
    {

        if ($id) {
            // Fetch products of the specific type
            $products = Product::with('productType')->where('product_type_id',$id)->get();
        } else {
            // Fetch all products
            $products = Product::with('productType')->get();
        }

        // If the request is AJAX, return a partial view or JSON response
        if ($request->ajax()) {
            return view('partials.product-data-table', compact('products'))->render();
        }

        // Otherwise, return the full view
        return view('partials.products-list', compact('products'));
    }

   
    public function professional()
    {
        $products = ProductType::where('product_category_id',ProductType::PROFESSIONAL_TYPE)->get();
        return view('Admin.partials.professional', compact('products'));
    }


    public function products()
    {
        return view('Admin.partials.products-consumer');
    }
    public function consumer()
    {
        $products = ProductType::where('product_category_id',ProductType::CONSUMER_TYPE)->get();
        return view('partials.products-consumer', compact('products'));
    }


}


