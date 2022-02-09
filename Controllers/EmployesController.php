<?php 
class EmployesController{
    public function s(){
        include('Views/'.$page.'.php');
    }
    public function getAllEmployers(){
        $employes=Employer::gitAll();
        return $employes;
    }
}


?>