<?php
    include('./generator.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Name generator</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Adhirsaurio" />
    <meta name="description" content="Name generator" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <script src="assets/js/fontawesome.js"></script>
</head>

<body id="page-top" class="d-flex flex-column min-vh-100">
    
    <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger text-center" href="#page-top">Name generator</a>
        </div>
    </nav>

    <section class="parallax">
        <div class="page-section text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Name generator</h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <div class="p-4 p-md-5 border rounded bg-dark">
                            
                            <div class="control-group mb-5 text-center">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <h2><?php echo $newName; ?></h2>
                                </div>
                            </div>
                            
                            <div class="form-group text-center">
                                <button name="submit" class="btn btn-primary btn-xl" onClick="generateName();">Generate name</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-center mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="lead mb-0">Name generator <a href="https://github.com/adhirsaurio?tab=repositories"><i class="fab fa-github-alt"></i></a></p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Name generator © 2023</small></div>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <script type="text/javascript">
        function generateName() {
            reload = location.reload();
        }
    </script>
</body>
</html>