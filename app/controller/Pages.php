<?php
class Pages extends Controller
{
  private $productModel;
  public function __construct()
  {
    $this->productModel = $this->model('Product');
  }

  public function index()
  {
    $products= $this->productModel->getProduct();
    $data = [
      'products' => $products 
    ];
    $this->view('pages/index', $data);
  }
  
}
