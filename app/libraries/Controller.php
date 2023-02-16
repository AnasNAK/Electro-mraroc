    <?php


    //base controller 
    //this load the model and views
    class Controller
    {
        
        //load model
        public function model($model)
        {
            // require model fille 
            require_once '../app/models/' . $model. '.php';
            // instaatiate model 
            return new $model();
        }

        //load view
        public function view($view, $data = [])
        {
            //check for the view file 
            // require view fille
            if (file_exists('../app/views/' . $view . '.php')) {
                require_once '../app/views/' . $view . '.php';
            } else {
                //view does not exist
                die('view does not exist');
            }
        }
    }
