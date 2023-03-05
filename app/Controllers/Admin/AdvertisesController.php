<?php

namespace App\Controllers\Admin;

use App\Middleware\Auth;
use System\Src\Session;
use App\Models\AdvertisesModel;

class AdvertisesController extends Auth{
    protected $advertisModel;
    public function __construct()
    {
        parent::__construct();
        $this->advertisModel = new AdvertisesModel;
    }
    public function create(){
        return view('admin/main',[
            'title' => 'Thêm quảng cáo',
            'template' => 'advertises/add'
        ]);
    }
    public function store()
    {
        if (! $this->isMethod('post')) {
            Session::flash('errors', 'Phương thức không chính xác');
            return redirect('/admin/advertiser/add');
        }

        if ($this->input('title') == null || $this->input('thumb') == null) {
            Session::flash('errors', 'Tiêu đề và ảnh không được trống');
            return redirect('/admin/advertiser/add');
        }

        $slider = $this->advertisModel->insert($this->input());
        if ($slider) {
            Session::flash('success', 'Thêm thành công quảng cáo mới');
            return redirect('/admin/advertiser/add');
        }

        Session::flash('errors', 'Có lỗi vui lòng thử lại sau');
        return redirect('/admin/advertiser/add');
    }

    public function index()
    {
        return view('admin/main', [
            'title' => 'Danh Sách Slider',
            'template' => 'advertises/list',
            'sliders' => $this->advertisModel->get()
        ]);
    }
    public function remove()
    {
        if (! $this->isMethod('post')) {
            return json(['error' => true, 'message' => 'Phương thức không chính xác']);
        }

        $id = (int)$this->input('id');
        $menu = $this->advertisModel->show($id);
        if ($menu == null) {
            return json(['error' => true, 'message' => 'Id không tồn tại']);
        }

        //Xóa ảnh /uploads/2022/10/01/name.jpg_delete
        if (file_exists(__PUBLIC__ . $menu['thumb'])) {
            unlink(__PUBLIC__ . $menu['thumb']);
        }

        $result = $this->advertisModel->delete($id);

        return $result 
            ? json(['error' => false, 'message' => 'Xóa thành công'])
            : json(['error' => true, 'message' => 'Xóa lỗi']);
    }


}