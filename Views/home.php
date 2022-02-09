<?php 
echo "home page";
require_once '../Controllers/EmployesController.php';
$data=new EmployesController();
$employes=$data->gitAllEmployer();
print_r($employes);

?>
<div class="container">
 <div class="row">
  <div class="col-md-8 mx-auto">

</div>
</div>
</div>