<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Star Admin2</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css" />
    <link
      rel="stylesheet"
      href="../vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/typicons/typicons.css" />
    <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css" />
    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />

    <!-- Drop Zone css -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_navbar.html -->
      <?php include "_navbar.php" ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_sidebar.html -->
        <?php include "_sidebar.php" ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              <nav style="--bs-breadcrumb-divider: '>';">
              
                <ol class="breadcrumb d-flex justify-content-between border-0">
                  <h3 >Home</h3>
                  <div class="d-flex align-items-center mr-2">
                  <li class="breadcrumb-item" style="font-size: 1rem">Home</li>
                  <li class="breadcrumb-item active" aria-current="page" style="font-size: 1rem">Library</li>
                  </div>
                </ol>
              </nav>

              <!-- content-body -->
              <?php // include "../pages/user-list.php" ?>
              <?php // include "../pages/user-view.php" ?>
              <?php // include "../pages/product-add.php" ?>
              <?php // include "../pages/product-list.php" ?>
              <?php  include "../pages/settings.php" ?>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../partials/_footer.html -->
          <?php include "_footer.php" ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    
    <!-- add jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/hoverable-collapse.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/todolist.js"></script>
    <script src="../js/tinymce/tinymce.min.js"></script>
    <script src="../js/tinymce/init-tinymce.js"></script>
    
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <script>
      var myDropzone = new Dropzone("#mainImage", { 
        url: "/file/upload.php",
        parallelUploads: 5,
        uploadMultiple : true,
        maxFiles : 5,
        addRemoveLinks : true,
        acceptedFiles : ".png, .jpg, .jpeg"
      })
    </script>

      <script>
        $(function(){$(document).on('click', '.btn-add', function(e){
              e.preventDefault();
              
              var controlForm = $('#tableForm'),
                  currentEntry = controlForm.find('.attControls:first'),
                  newEntry = $(currentEntry.clone()).appendTo(controlForm);

              newEntry.find('.form-control').val('');
              

          }).on('click', '.btn-remove', function(e)
          {
              var thisControl = $(this).parents('.attControls');
              if(thisControl.siblings().length > 0)
                  thisControl.remove();
              else
                  alert('Cannot remove the default attribute field');

          e.preventDefault();
          return false;
        });
      });
      </script>


    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>
