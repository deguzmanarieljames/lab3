<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $products;
    private $category;
    public function __construct()
    {
        $this->products = new \App\Models\ProductModel();
        $this->category = new \App\Models\CategoryModel();
    }
    public function details()
    {
        $data = [
            'products' => $this->products->findAll(),
            'category' => $this->category->findAll()
        ];
        return view('details', $data);
    }

    public function index()
    {
        $data = [
            'products' => $this->products->findAll(),
            'category' => $this->category->findAll()
        ];
        return view('index', $data);
    }

    public function admin(){
        $data = [
            'products' => $this->products->findAll(),
            'category' => $this->category->findAll()
        ];
        return view('admin', $data);
    }

    public function save(){
        $id = $_POST['id'];
        $data = [
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'image' => $this->request->getVar('image'),
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'quantity' => $this->request->getVar('quantity'),
        ];
        if($id != null){
            $this->products->set($data)->where('id', $id)->update();
        }else{
            $this->products->save($data);
        }  
        return redirect()->to('/admin');
    }

    public function delete($id){
        $this->products->delete($id);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $data = [
            'products' => $this->products->FindAll(),
            'prod' => $this->products->where('id', $id)->first(),
            'category' => $this->category->distinct()->FindAll(),
        ];
        return view('admin', $data);
    }
}