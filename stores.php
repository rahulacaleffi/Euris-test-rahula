<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>GRUPPO EURIS TEST RAHULA.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <link rel="Shortcut Icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        
        <!-- HEADER  -->
        <?php
            require_once 'header.php';
        ?>
        <!-- END HEADER -->
        <div class="app-main__outer">
            <div class="app-main__inner">

                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <a href="index.php">
                                            <img src="assets/images/categories.png" alt="Categories" width="40"/>
                                        </a>
                                    </div>
                                    <div>Stores
                                        <div class="page-title-subheading">Here display the stores available
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 cezoom text-center card card-body">
                                    <h5 class="card-title">Store Number/ID: </h5><q>ijpxNJLM732vm8AeajMR</q><br>
                                    <button class="btn btn-info" onclick="window.location.replace('index.php')">Show Products</button><br>
                                    <button class="btn btn-danger" onclick="window.location.replace('categories.php')">Show Categories</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- FOOTER -->
            <?php
                require_once 'footer.php';
            ?>
            <!-- END FOOTER -->


        </div>
        
    </div>

    
    <!-- MAIN JS -->
    <script type="text/javascript" src="./assets/scripts/main.js"></script>

    <?php require_once 'modals.php'; ?>
</body>
</html>