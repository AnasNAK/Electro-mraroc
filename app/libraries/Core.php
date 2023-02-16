<?php
/*main app core class */
class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        // print_r($this->getUrl());
        $url = $this->getUrl();
        if (is_array($url) && file_exists('../app/controller/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/controller/' . $this->currentController . '.php';


        $this->currentController = new $this->currentController;

        //check for second part of url
        if (isset($url[1])) {
            //check to see method exist in controller
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                //unset 1 index
                unset($url[1]);
            }
        }
        //get params
        $this->params = $url ? array_values($url) : [];

        //call back with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url =  explode('/', $url);
            return $url;
        }
    }
}
