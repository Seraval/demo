<?php
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        if($action == "success") {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>LOG IN SUCCESSFULY!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else if ($action == "primary"){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ERROR!</strong> Account registration failed.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else if ($action == "danger") {
          echo '<div class="alert alert-'.$action.' alert-dismissible fade show" role="alert"><strong>
          LOG IN FAILED!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } else if ($action == "warning") {
          echo '<div class="alert alert-'.$action.' alert-dismissible fade show" role="alert">
          Email Already Exist!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        } else if ($action == "secondary") {
            echo '<div class="alert alert-'.$action.' alert-dismissible fade show" role="alert">
            Data updated successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          
        }else if ($action == "assesment") {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>ASSESMENT SUBMITTED SUCCESSFULY!</strong> <a href="result.php" class="alert-link">View Result</a>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }  else if ($action == "assesment2") {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>ASSESMENT SUBMITTED SUCCESSFULY!</strong> <a href="result2.php" class="alert-link">View Result</a>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }  else if ($action == "assesment3") {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong> REGISTRATION SUCCESS!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }  

    }
    

?>