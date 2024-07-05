<?php
require('logics/validation.php'); 
require('logics/closet-form.php');
require('logics/closet-show.php');
require('logics/closet-delete.php');
require('logics/functions.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/closet.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d84bfa7905.js" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/closet.js"></script>
    
</head>

<body>

    <div class="background">
        <div class="title">
            <p>Home / Closet</p>
            <h1>CLOSET</h1>
        </div>
    </div>

    <div class="clothes">
        <div class="buttons">

            <div class="upperbtn">
                <button type="button" class="stylebtn" data-bs-toggle="dropdown" aria-expanded="false">
                    <p>Type <i class="arrow down"></i></p>
                </button>
                <ul class="dropdown-menu dropdown-menu-start">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </div>

            <div class="upperbtn" style="margin-right: 0.3%;">
                <button type="button" class="stylebtn" data-bs-toggle="dropdown" aria-expanded="false">
                    <p>Color <i class="arrow down"></i></p>
                </button>
                <ul class="dropdown-menu dropdown-menu-start">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </div>

            <div class="upperbtn">
                <button type="button" class="stylebtn" data-bs-toggle="dropdown" aria-expanded="false">
                    <p>Brands <i class="arrow down"></i></p>
                </button>
                <ul class="dropdown-menu dropdown-menu-start">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                </ul>
            </div>
        </div>
        
        <div class="container-fluid cardscontainer">
            
                <div class="cards">
                    <div class="contents">
                        <div class="dotsbtn">
                            <button type="button" class="dotsbtn2" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="dotsbtn3">•••</p>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                            </ul>
                        </div>
                        <img src="https://placehold.co/300x400">
                        <p>Orange T-Shirt</p>
                    </div>
                </div>

                <div class="cards">
                    <div class="contents">
                        <div class="dotsbtn">
                            <button type="button" class="dotsbtn2" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="dotsbtn3">•••</p>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                            </ul>
                        </div>
                        <img src="https://placehold.co/300x400">
                        <p>Orange T-Shirt</p>
                    </div>
                </div>

                <div class="cards">
                    <div class="contents">
                        <div class="dotsbtn">
                            <button type="button" class="dotsbtn2" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="dotsbtn3">•••</p>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                            </ul>
                        </div>
                        <img src="https://placehold.co/300x400">
                        <p>Orange T-Shirt</p>
                    </div>
                </div>

                <div class="cards">
                    <div class="contents">
                        <div class="dotsbtn">
                            <button type="button" class="dotsbtn2" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="dotsbtn3">•••</p>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                            </ul>
                        </div>
                        <img src="https://placehold.co/300x400">
                        <p>Orange T-Shirt</p>
                    </div>
                </div>

                <div class="cards">
                    <div class="contents">
                        <div class="dotsbtn">
                            <button type="button" class="dotsbtn2" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="dotsbtn3">•••</p>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-start">
                                <li><button class="dropdown-item" type="button">Edit Item</button></li>
                                <li><button class="dropdown-item" type="button">Rename</button></li>
                                <li><button class="dropdown-item" type="button">Delete Item</button></li>
                            </ul>
                        </div>
                        <img src="https://placehold.co/300x400">
                        <p>Orange T-Shirt</p>
                    </div>
                </div>
        </div>
    </div>


    <!-- Button trigger modal -->
<div class="floating-container">
  <div class="floating-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+</div>
</div>
<!-- Modal -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><h2 class="login-text">Closet</h2></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
            <label>Picture Name:</label><br>
            <input type="text" name="filename" required><br>
            <label>Upload here:</label><br>
            <input type="file" name="image" id="image"><br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="closet_form" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>



</body>


</html>


<!--


<div style="display: flex">

            <?php foreach($datas as $data): ?>
                <div>
                    <img class="upload-imgs" src="<?php echo $data['path']; ?>" alt="Img-Upload"> <br>
                    <a href="?dvx=<?php echo link_okay($data['ID']); ?>&idshs=<?php echo link_okay($data['file_name']); ?>&pasdsf=<?php echo link_okay(link_set($data['path'])); ?>">Delete</a>
                </div>
            <?php endforeach; ?>

        </div>

        -->