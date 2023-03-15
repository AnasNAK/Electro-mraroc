<?php

class Categories extends Controller
{

    private $CategorieModel ;

    public function __construct()
    {
        if (!isLoggedIn()) {

            redirect('users/login');
        }
        $this->CategorieModel = $this->model('Categorie');
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
                    'description' => $_POST['description'],
                    'image' => $_FILES['image']['name']
                ];


                //make sure no errors
                if ($this->CategorieModel->addCategorie($data)) {
                    redirect('Pages/dashboardcategorie');
                } else {
                    //load view with errors
                    $this->view('categorie/addCategorie', $data);
                }
            
        } else {
            $data = [
                'name' => '',
                'description' => '',
                'image' => '',

            ];
            $this->view('categorie/addCategorie', $data);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            move_uploaded_file($_FILES['image']['tmp_name'], 'img/upload/' . $_FILES['image']['name']);

            $Categorie = $this->CategorieModel->findCategorieById($id);

            if (empty($_FILES['image']['name'])) {
                $data = [
                    'id' => $Categorie->id,
                    'name' => trim($_POST['name']),
                    'description' => trim($_POST['description']),
                    'image' => $Categorie->image,
                    'name_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            } else {
                $data = [
                    'id' => $Categorie->id,
                    'name' => trim($_POST['name']),
                    'description' => trim($_POST['description']),
                    'image' => $_FILES['image']['name'],
                    'name_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            }

            //validate form
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter description ';
            }

            //make sure no errors
            if (empty($data['name_err']) && empty($data['description_err'])) {
                if ($this->CategorieModel->edit($data)) {
                    redirect('Pages/dashboardcategorie');
                } else {
                    die('something went wrong');
                }
            } else {
                //load view with errors
                $this->view('categorie/editCategorie', $data);
            }
        } else {
            $Categorie = $this->CategorieModel->findCategorieById($id);
        }
        $data = [
            'id' => $Categorie->id,
            'name' => $Categorie->name,
            'description' => $Categorie->description,
            'image' => $Categorie->image,
            'name_err' => '',
            'description_err' => '',
            'image_err' => ''

        ];
        $this->view('categorie/editCategories', $data);

    }
   
    public function delete($id)
    {
        // get response from data if deleted or not return true or false
        if ($this->CategorieModel->delet($id)) {
            redirect('Pages/dashboardcategorie');
        } else {
            die('ops');
        }
    }
    public function details($id){
    $result = $this->CategorieModel->findCategorieById($id);

    $data = [
        'product' => $result ,
    ] ;
    $this->view('pages/product_details',$data);


    }

}
