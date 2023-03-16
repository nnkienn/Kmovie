<?php

namespace App\Controllers;
use System\Src\Controller;
use App\Models\SliderModel;
use App\Models\MenuModel;
use App\Models\ProductModel;
use System\Src\Paginate;
use App\Models\SearchModel;
class MainController extends Controller{
    protected $sliderModel;
    protected $menuModel;
    protected $productModel;

    protected $search;
    
    public function __construct(){
        $this->sliderModel = new SliderModel;
        $this->menuModel = new MenuModel;
        $this->productModel = new ProductModel;
        $this->search= new SearchModel;
    }
    public function search()
{
    $keyword = $this->input('keyword');
    $results = $this->search->search($keyword);
    return view('main', [
        'title' => 'Search Results',
        'template' => 'search',
        'menus' => $this->menuModel->getAllMenuIsActiveParent(),
        'results' => $results,
        'keyword' => $keyword
    ]);
}

    public function index(){
        ;
        $page = (int)$this->input('page');
        $page = $page > 1 ? $page : 1;
        $limit = 12;
        $offset = ($page - 1) * $limit;
        $numRows = $this->productModel->countRows();
        return view('main',[
                'title' => 'KFLIX – Online Movies, TV Shows & Cinema',
                'template' => 'home',
                'sliders' => $this->sliderModel->getActive(),
                'menus' => $this->menuModel->getAllMenuIsActiveParent(),
                'content1' => $this->productModel->getByMenuId(4,12),
                'content2' => $this->productModel->getByMenuId(6,12),
                'products' => $this->productModel->getByIsActive($limit,$offset),
                'pages' => Paginate::view($numRows,$limit,$page)
            
        ]
    );
    }
}