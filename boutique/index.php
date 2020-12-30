    <?php
    
    
    include_once('../bdd.php');
    
    ?>



 <?php
    if(isset($_GET['produit'])){

        $produit = $_GET['produit'];
        $reponse = $bdd->prepare("SELECT * FROM produit WHERE nom='$produit'");
        $reponse->execute();
        $s = $reponse->fetch(PDO::FETCH_OBJ);
        ?>

        <div class="details_produit">
            <div class="nom_du_produit">
                <h2><?php echo $s->nom; ?></h2>
            </div>
            <div class="image_du_produit">
                <img src="<?php echo $s->images; ?>" alt="<?php echo $s->nom;?>">
            </div>
            <div class="desc">
                Description <br> <?php echo $s->description; ?>
            </div>
        </div>



        <?php
        
    }else{



            ?>


            <!DOCTYPE html>
            <html lang="fr">
            <head>
             
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Boutique</title>
            </head>
            <body>
            <?php require_once("../includes/header.php"); ?>

            <div class="all_page">
                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-4 mb-4">

                      <!-- Card -->
                      <div class="">

                        <div class="view zoom overlay z-depth-2 rounded">
                          <img class="img-fluid w-100"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                          <a href="#!">
                            <div class="mask">
                              <img class="img-fluid w-100"
                              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                              <div class="mask rgba-black-slight"></div>
                          </div>
                      </a>
                  </div>

                  <div class="text-center pt-4">

                      <h5>Fantasy T-shirt</h5>
                      <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                      <ul class="rating">
                        <li>
                          <i class="fas fa-star fa-sm text-primary"></i>
                      </li>
                      <li>
                          <i class="fas fa-star fa-sm text-primary"></i>
                      </li>
                      <li>
                          <i class="fas fa-star fa-sm text-primary"></i>
                      </li>
                      <li>
                          <i class="fas fa-star fa-sm text-primary"></i>
                      </li>
                      <li>
                          <i class="fas fa-star fa-sm text-primary"></i>
                      </li>
                  </ul>
                  <hr>
                  <h6 class="mb-3">12.99 $</h6>
                  <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                      class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                      <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                          class="fas fa-info-circle pr-2"></i>Details</button>
                          <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                          data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                          class="far fa-heart"></i></button>

                      </div>

                  </div>
                  <!-- Card -->

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 mb-4">

                  <!-- Card -->
                  <div class="">

                    <div class="view zoom overlay z-depth-2 rounded">
                      <img class="img-fluid w-100"
                      src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                      <h4 class="mb-0"><span class="badge badge-dark badge-pill badge-news">Sold out</span></h4>
                      <a href="#!">
                        <div class="mask">
                          <img class="img-fluid w-100"
                          src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                          <div class="mask rgba-black-slight"></div>
                      </div>
                  </a>
              </div>

              <div class="text-center pt-4">

                  <h5>Fantasy T-shirt</h5>
                  <p class="mb-2 text-muted text-uppercase small">Shirts</p>
                  <ul class="rating">
                    <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                  </li>
                  <li>
                      <i class="far fa-star fa-sm text-primary"></i>
                  </li>
              </ul>
              <hr>
              <h6 class="mb-3">12.99 $</h6>
              <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                  class="fas fa-info-circle pr-2"></i>Details</button>
                  <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
                  data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                  class="far fa-heart"></i></button>

              </div>

          </div>
          <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 mb-4">

          <!-- Card -->
          <div class="">

            <div class="view zoom overlay z-depth-2 rounded">
              <img class="img-fluid w-100"
              src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg" alt="Sample">
              <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>
              <a href="#!">
                <div class="mask">
                  <img class="img-fluid w-100"
                  src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg">
                  <div class="mask rgba-black-slight"></div>
              </div>
          </a>
      </div>

      <div class="text-center pt-4">

          <h5>Fantasy T-shirt</h5>
          <p class="mb-2 text-muted text-uppercase small">Shirts</p>
          <ul class="rating">
            <li>
              <i class="fas fa-star fa-sm text-primary"></i>
          </li>
          <li>
              <i class="fas fa-star fa-sm text-primary"></i>
          </li>
          <li>
              <i class="fas fa-star fa-sm text-primary"></i>
          </li>
          <li>
              <i class="fas fa-star fa-sm text-primary"></i>
          </li>
          <li>
              <i class="fas fa-star fa-sm text-primary"></i>
          </li>
      </ul>
      <hr>
      <h6 class="mb-3">
        <span class="text-danger mr-1">$12.99</span>
        <span class="text-grey"><s>$36.99</s></span>
    </h6>
    <button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
      class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
      <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
          class="fas fa-info-circle pr-2"></i>Details</button>
          <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
          data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
          class="far fa-heart"></i></button>

      </div>

  </div>
  <!-- Card -->

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->


<!--Section: Block Content-->







<?php 


}

?>
            </div>

<script type="text/javascript" src="http://127.0.0.1/site/includes/js/popper.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/mdb.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/site/includes/js/mdb.ecommerce.min.js"></script>

<script type="text/javascript">
    $('#multi').mdbRange({
      single: {
        active: true,
        multi: {
          active: true,
          rangeLength: 1
      },
  }
});

    $(document).ready(function () {
      $('.mdb-select').materialSelect();
      $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
        $(this).closest('.select-outline').find('label').toggleClass('active');
        $(this).closest('.select-outline').find('.caret').toggleClass('active');
    });
  });
</script>

</body>
</html>
<!--Section: Block Content-->
<section>

  

