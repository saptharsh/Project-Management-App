<?php
Session::init();
class Formm extends Controller {

    function __construct() {
        parent::__construct();
    }

    //default page
    public function index() {

        $this->view->msg = "Fill out the Form:";
        $this->view->render('form/index');
        //$form = new Form();
    }

    public function validate() {

        if(isset($_SESSION['data'])){
            
            $data = array();
            $data = $_SESSION['data'];
            
            $status = $this->model->RunInsert($data);
        }
        
        if($status){
            Session::destroy();
            header("Location: ../formm?msg=Successfully submitted");
        }
    }

}
