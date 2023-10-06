<?php 
require_once APP_ROOT.'/app/services/sachServicers.php';
class HomeController{
    public function index(){
        
        $sachs = $sachServicers->getAllSach();

        include APP_ROOT.'/app/viewst/index.php';
    }
    public function delete()
    {
        if(isset($_POST['id'])) {
            $id = $_POST['id'];
            PatientService::delete($id);
            header('Location:' . DOMAIN . "/public/index.php");
        }
    }
    public function create(){
        include APP_ROOT . "/app/views/add.php";
    }



    public function store()
    {
        if(isset($_POST['id']) && isset($_POST['tensach']) && isset($_POST['namXuatBan']) && isset($_POST['idTacGia'])) {
            $name = $_POST['id'];
            $gender = $_POST['tenSach'];
            $city = $_POST['namXuatBan'];
            $mobile = $_POST['idTacGia'];
            PatientService::create($id, $tenSach, $namXuatBan, $idTacGia);
            header('Location:' . DOMAIN . "/public/index.php");
        }

    }
}

?>
