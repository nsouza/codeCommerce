<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce;


class ProductsController extends Controller
{
    
	private $productModel;

	
	public function __construct(Product $productModel) {
		$this->ProductModel = $productModel;
	}
	
	public function index(){
	
		$products = $this->ProductModel->paginate(10);
	
		return view('products.index',  compact('products'));
	}
	
	
	public function create(Category $category){
		 
		$categories = $category->lists('name', 'id');
		
		return view('products.create', compact('categories'));
	}
	
	
	public function store(Requests\ProductRequest $request){
		 
		$input = $request->all();
		 
		$Product =$this->ProductModel->fill($input);
		 
		$Product->save();
		 
		return redirect()->route('products');
	
	}
	
	public function edit($id, Category $category){
		
		$categories = $category->lists('name', 'id');
		
		$product = $this->ProductModel->find($id);
		return view('products.edit', compact('product','categories'));
	}
	
	public function update(Requests\ProductRequest $request, $id){
		$this->ProductModel->find($id)->update($request->all());
		return redirect()->route('products');
		 
	}
	
	public function destroy($id){
		 
		$this->ProductModel->find($id)->delete();
		return redirect()->route('products');
		 
	}
        
        public function images($id){               	             	
            $product = Product::findOrNew($id);        
            return view('products.images',compact('product'));
        }
   
	
}