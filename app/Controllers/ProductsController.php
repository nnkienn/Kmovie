<?php

namespace App\Controllers;
use System\Src\Controller;

use App\Models\ProductModel;

class ProductsController extends Controller{
  
    protected $productModel;
    public function __construct(){
        
        $this->productModel = new ProductModel;
    }
    public function index($slug = '', $id = 0)
    {
        $products= $this->productModel->getProductById($id);
        return view('main',[
            'title' =>$products['title'] . '- Kmovie',
            'template' => 'products/watch',
            'products' => $this->productModel->getProductById($id)
        ]);
    }
}