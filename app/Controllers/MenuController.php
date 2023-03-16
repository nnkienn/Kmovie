<?php

namespace App\Controllers;

use System\Src\Controller;
use App\Models\MenuModel;
use App\Models\ProductModel;
use System\Src\Session;
use System\Src\Paginate;
class MenuController extends Controller
{
    protected $menuModel;
    protected $productModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->productModel = new ProductModel();
    }

    public function index(string $slug, int $id)
    {
        $page = (int)$this->input('page');
        $page = $page > 1 ? $page : 1;
        $limit = 12;
        $offset = ($page - 1) * $limit;
        $numRows = $this->productModel->countRows();
        $menu = $this->menuModel->showIsActive($id);
        if ($menu == null) {
            Session::flash('error', 'ID không tồn tại hoặc chưa kích hoat');
            return redirect('/');
        }

        return view('main', [
            'title' => $menu['title'],
            'description' => $menu['description'],
            'template' => 'menus/list',
            'menu' => $menu,
            'products' => $this->productModel->getByIsActive($limit,$offset, $menu['id']),
            'pages' => Paginate::view($numRows,$limit,$page)

        ]);
    }

 

   
}