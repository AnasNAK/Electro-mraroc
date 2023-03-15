<?php
class Pages extends Controller
{
  private $productModel;
  private $categorieModel;
  public function __construct()
  {
    $this->productModel = $this->model('Product');
    $this->categorieModel = $this->model('Categorie');
  }

  public function index()
  {
    $categorie = $this->categorieModel->getCategorie();
    $products = $this->productModel->getProduct();
    $data = [
      'products' => $products,
      'categories' => $categorie 
    ];
    $this->view('pages/index', $data);
  }
  public function shop()
  {
    $products = $this->productModel->getProduct();
    $data = [
      'products' => $products
    ];
    $this->view('pages/shop', $data);
  }
  public function order()
  {
    $products = $this->productModel->getProduct();
    $data = [
      'products' => $products
    ];
    $this->view('pages/order', $data);
  }
  public function contact()
  {
    $products = $this->productModel->getProduct();
    $data = [
      'products' => $products
    ];
    $this->view('pages/contact', $data);
  }
  public function login()
  {
    $products = $this->productModel->getProduct();
    $data = [
      'products' => $products
    ];
    $this->view('users/login', $data);
  }
  public function register()
  {
    $products = $this->productModel->getProduct();
    $data = [
      'products' => $products
    ];
    $this->view('users/register', $data);
  }
  public function dashboard()
  {
    $products = $this->productModel->getProduct();
     $productsum=$this->productModel->getProductByStock();
    $data = [
        'products' => $products,
        'productsum' =>$productsum,
    ];
    $this->view('pages/dashboardAdmin', $data);
}
public function product()
{
  $products = $this->productModel->getProduct();
  $data = [
    'products' => $products
  ];
  $this->view('pages/product_details', $data);
}
public function cart()
{
  $products = $this->productModel->getProduct();
  $data = [
    'products' => $products
  ];
  $this->view('pages/cart', $data);
}
public function dashboardcategorie()
{
  $categories = $this->categorieModel->getCategorie();
    $products = $this->productModel->getProduct();
     $productsum=$this->productModel->getProductByStock();
  $data = [
      'categories' => $categories,
      'products' => $products,
      'productsum' =>$productsum,
      // 'categoriesum' =>$categoriesum,
  ];
  $this->view('pages/dashboardCategorie', $data);
}
public function dashboardorder()
{
  $categories = $this->categorieModel->getCategorie();
    $products = $this->productModel->getProduct();
     $productsum=$this->productModel->getProductByStock();
  $data = [
      'categories' => $categories,
      'products' => $products,
      'productsum' =>$productsum,
      // 'categoriesum' =>$categoriesum,
  ];
  $this->view('pages/dashboardCategorie', $data);
}
 
}

// $init = new Pages;
// if($_SERVER['REQUEST_METHOD'] === 'GET') {
//   $init->categories();
// }
