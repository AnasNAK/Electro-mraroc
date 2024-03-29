<?php

class Products extends Controller
{

    private $productModel;
    protected $categorieModel;


    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $this->categorieModel = $this->model('Categorie');
        $this->productModel = $this->model('Product');
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            var_dump($_FILES);


            // sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            move_uploaded_file($_FILES['image']['tmp_name'], 'img/upload/' . $_FILES['image']['name']);

            $data = [
                'name' => $_POST['name'],
                'stock' => $_POST['stock'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'image' => $_FILES['image']['name'],
                'categorie' => $_POST['categorie'],


            ];


            //make sure no errors
            if ($this->productModel->addProduct($data)) {
                redirect('Products/dashboardAdmin');
            } else {
                //load view with errors                    
                $this->view('product/addProduct', $data);
            }
        } else {
            $categoryData = $this->categorieModel->getCategorie();
            $data = [
                'categorie'=> $categoryData,
                'name' => '',
                'stock' => '',
                'price' => '',
                'description' => '',
                'image' => '',

            ];
            $this->view('product/addProduct', $data);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            move_uploaded_file($_FILES['image']['tmp_name'], 'img/upload/' . $_FILES['image']['name']);

            $product = $this->productModel->findproductById($id);

            if (empty($_FILES['image']['name'])) {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'stock' => trim($_POST['stock']),
                    'price' => trim($_POST['price']),
                    'categorie' => trim($_POST['categorie']),
                    'description' => trim($_POST['description']),
                    'image' => $product->image,
                    'name_err' => '',
                    'stock_err' => '',
                    'price_err' => '',
                    'categorie_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            } else {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'stock' => trim($_POST['stock']),
                    'price' => trim($_POST['price']),
                    'categorie' => trim($_POST['categorie']),
                    'description' => trim($_POST['description']),
                    'image' => $_FILES['image']['name'],
                    'name_err' => '',
                    'stock_err' => '',
                    'price_err' => '',
                    'categorie_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            }

            //validate form
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['stock'])) {
                $data['stock_err'] = 'Please enter stock';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter description ';
            }

            //make sure no errors
            if (empty($data['name_err'])  && empty($data['stock_err']) && empty($data['price_err']) && empty($data['description_err'])) {
                if ($this->productModel->edit($data)) {
                    redirect('products/dashboardAdmin');
                } else {
                    die('something went wrong');
                }
            } else {
                //load view with errors
                $this->view('product/editProduct', $data);
            }
        } else {
            $product = $this->productModel->findproductById($id);
        }
        $categoryData = $this->categorieModel->getCategorie();
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'stock' => $product->stock,
            'price' => $product->price,
            'categorie' => $categoryData,
            'prevCategorie' =>  $product->categorie,
            'description' => $product->description,
            'image' => $product->image,
            'name_err' => '',
            'stock_err' => '',
            'price_err' => '',
            'categorie_err' => '',
            'description_err' => '',
            'image_err' => ''

        ];
        $this->view('product/editProduct', $data);
    }
    public function dashboardAdmin()
    {
        $products = $this->productModel->getProduct();
        $productsum = $this->productModel->getProductByStock();
        $data = [
            'products' => $products,
            'productsum' => $productsum,
        ];
        $this->view('pages/dashboardAdmin', $data);
    }
    public function delete($id)
    {
        // get response from data if deleted or not return true or false
        if ($this->productModel->delet($id)) {
            redirect('Products/dashboardAdmin');
        } else {
            die('ops');
        }
    }
    public function details($id)
    {
        $result = $this->productModel->findproductById($id);
        $categorie = $this->categorieModel->getCategorieById($result->categorie);

        $data = [
            'product' => $result,
            'categories' => $categorie 
        ];
        $this->view('pages/product_details', $data);
    }
}
