<?php

namespace App\Controllers\Admin;

use App\Middleware\Auth;
use System\Src\Session;
use App\Models\SliderModel;

class SliderController extends Auth
{
    protected $sliderModel;

    public function __construct()
    {
        parent::__construct();
        $this->sliderModel = new SliderModel;
    }

    public function create()
    {
        return view('admin/main', [
            'title' => 'Thêm Slider',
            'template' => 'sliders/add'
        ]);
    }

    public function store()
    {
        if (! $this->isMethod('post')) {
            Session::flash('errors', 'Phương thức không chính xác');
            return redirect('/admin/sliders/add');
        }

        if ($this->input('title') == null || $this->input('thumb') == null) {
            Session::flash('errors', 'Tiêu đề và ảnh không được trống');
            return redirect('/admin/sliders/add');
        }

        $slider = $this->sliderModel->insert($this->input());
        if ($slider) {
            Session::flash('success', 'Thêm thành công Slider mới');
            return redirect('/admin/sliders/add');
        }

        Session::flash('errors', 'Có lỗi vui lòng thử lại sau');
        return redirect('/admin/sliders/add');
    }

    public function index()
    {
        return view('admin/main', [
            'title' => 'Danh Sách Slider',
            'template' => 'sliders/list',
            'sliders' => $this->sliderModel->get()
        ]);
    }

    public function edit(int $id = 0)
    {
        //Lấy thông tin của id
        $sliders = $this->sliderModel->show($id);
        if ($sliders == null) {
            Session::flash('errors', 'Id không tồn tại');
            return redirect('/admin/sliders/lists');
        }

        return view('admin/main', [
            'title' => 'Chỉnh Sửa Slider: ' . $sliders['title'],
            'template' => 'sliders/edit',
            'slider' => $sliders,
            'menusParent' => $this->sliderModel->get(0)
        ]);
    }

    public function update(int $id = 0)
    {
        #kiểm tra phương thức
        if (! $this->isMethod('post')) {
            Session::flash('errors', 'Phương thức không chính xác');
            return redirect('/admin/sliders/lists');
        }

        if ($this->input('title') == null) {
            Session::flash('errors', 'Tiêu đề không được trống');
            return redirect('/admin/sliders/lists');
        }
     //Lấy thông tin của id
     $products = $this->sliderModel->show($id);
     if ($products == null) {
         Session::flash('errors', 'Id không tồn tại');
         return redirect('/admin/sliders/lists');
     }

        $data = $this->input();
        if ($this->input('thumb') == null) {
            unset($data['thumb']);//xóa đi
        }

        $result = $this->sliderModel->update($data, $id);
        if ($result) {
            Session::flash('success', 'Cập nhật thành công');
            return redirect('/admin/sliders/lists');
        }

        Session::flash('errors', 'Cập nhật lỗi');
        return redirect('/admin/sliders/lists');
    }

    public function remove()
    {
        if (! $this->isMethod('post')) {
            return json(['error' => true, 'message' => 'Phương thức không chính xác']);
        }

        $id = (int)$this->input('id');
        $menu = $this->sliderModel->show($id);
        if ($menu == null) {
            return json(['error' => true, 'message' => 'Id không tồn tại']);
        }

        //Xóa ảnh /uploads/2022/10/01/name.jpg_delete
        if (file_exists(__PUBLIC__ . $menu['thumb'])) {
            unlink(__PUBLIC__ . $menu['thumb']);
        }

        $result = $this->sliderModel->delete($id);

        return $result 
            ? json(['error' => false, 'message' => 'Xóa thành công'])
            : json(['error' => true, 'message' => 'Xóa lỗi']);
    }


}