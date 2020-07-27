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

    <!-- STYLISH CONFIRM AND ALERTS -->
    <link rel="stylesheet" href="./assets/scripts/sweetalert.css">
    <script src="./assets/scripts/sweetalert.min.js"></script>

    <link rel="icon" type="image/x-icon" href="https://www.euris.it/dist/images/favicon/favicon.ico">
    <link rel="Shortcut Icon" type="image/x-icon" href="https://www.euris.it/dist/images/favicon/favicon.ico">
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
                                            <img src="assets/images/products.png" alt="Products" width="40"/>
                                        </a>
                                    </div>
                                    <div>Employees Dashboard
                                        <div class="page-title-subheading">Here you can create, display and delete products from store ID <q>ijpxNJLM732vm8AeajMR</q>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 cezoom widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Products on this shop</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white" id="count"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-xl-4">
                                    <div class="card mb-3 cezoom widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Categories</div>
                                                <div class="widget-subheading">Total of product's categories</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-primary" id="count_categories"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        


                        <!-- PRODUCTS GRID AND PANEL -->
                        <div class="main-card mb-12 card">
                            <div class="card-header">DISPLAY LAYOUT
                                <div class="btn-actions-pane-right">
                                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-panel">
                                                    <span>PANEL</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-grid">
                                                    <span>GRID</span>
                                                </a>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-header">Products
                                    <div class="search-wrapper" style="margin-left: 30px;">
                                            <div class="input-holder">
                                                <input type="text"  onkeyup="filterFunction()" id="searchproduct" class="search-input" placeholder="Search for specific product">
                                                <button class="search-icon"><span></span></button>
                                            </div>
                                            <button class="close"></button>
                                    </div>
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="btn btn-success cezoom" data-toggle="modal" data-target="#addnew_product"><i class="metismenu-icon pe-7s-plus"></i> Add new</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- TAB CONTENT  -->


                        <div class="tab-content">

                                <!-- PANEL  -->
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-panel" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="main-card mb-3 card">
                                                    <div class="table-responsive">
                                                        <table class="align-middle mb-0 table table-bordered table-striped table-hover " id="table-products">
                                                            <thead>
                                                            <tr>
                                                                <th class="text-center">#ID</th>
                                                                <th>Title</th>
                                                                <th class="text-center">Category</th>
                                                                <th class="text-center">Description</th>
                                                                <th class="text-center">Employee</th>
                                                                <th class="text-center">Reviews</th>
                                                                <th class="text-center">Actions</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <!-- GRID  -->
                                <div class="tab-pane tabs-animation fade" id="tab-content-grid" role="tabpanel">
                                    <div class="row" style="margin-top: 30px;" id="rowgrid">
                                        
                                    </div>
                                </div>
                            </div>

                        <!-- END TAB CONTENT -->
                        
                    </div>





                    <!-- FOOTER -->
                    <?php
                        require_once 'footer.php';
                    ?>
                    <!-- END FOOTER -->


                    
            </div>
        </div>
    </div>




    <!-- SCRIPT LISTENER -->
        <script>
            //first add an event listener for page load
            document.addEventListener( "DOMContentLoaded", get_json_data, false ); // get_json_data is the function name that will fire on page load
    
            //this function is in the event listener and will execute on page load
            function get_json_data(){
                // Relative URL of external json file
                var json_url = 'http://us-central1-test-b7665.cloudfunctions.net/api/stores/ijpxNJLM732vm8AeajMR/products';
                var json_categ = 'http://us-central1-test-b7665.cloudfunctions.net/api/stores/ijpxNJLM732vm8AeajMR/stats/categories';

                //Build the XMLHttpRequest (aka AJAX Request)
                    xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() { 
                        if (this.readyState == 4 && this.status == 200) {//when a good response is given do this
        
                            var data = JSON.parse(this.responseText); // convert the response to a json object
                            append_json(data);// pass the json object to the append_json function
                        }
                    }
                    //set the request destination and type
                    xmlhttp.open("GET", json_url, true);
                    //set required headers for the request
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    // send the request
                    xmlhttp.send(); // when the request completes it will execute the code in onreadystatechange section

                //Build the XMLHttpRequest (aka AJAX Request)
                    xmlhttpcateg = new XMLHttpRequest();
                    xmlhttpcateg.onreadystatechange = function() { 
                        if (this.readyState == 4 && this.status == 200) {//when a good response is given do this
        
                            var datacateg = JSON.parse(this.responseText); // convert the response to a json object
                            append_json_categ(datacateg);// pass the json object to the append_json function
                        }
                    }
                    //set the request destination and type
                    xmlhttpcateg.open("GET", json_categ, true);
                    //set required headers for the request
                    xmlhttpcateg.setRequestHeader("Content-type", "application/json");
                    // send the request
                    xmlhttpcateg.send(); // when the request completes it will execute the code in onreadystatechange section
            }
    
            //this function appends the json data to the table and the grid
            function append_json(data){
                var table = document.getElementById('table-products');
                var rowgrid = document.getElementById('rowgrid');
                
                data.forEach(function(object) {
                    if (typeof object.data.reviews == 'undefined'){
                        object.data.reviews = "0";
                    }
                    var tr = document.createElement('tr');
                    tr.innerHTML = '<td class=\"text-center\">' + object.id + '</td>' +
                    '<td class=\"text-left\">' + object.data.title + '</td>' +
                    '<td class=\"text-center\">' + object.data.category + '</td>' +
                    '<td class=\"text-center\">' + object.data.description.substr(0,25) + '...</td>' +
                    '<td class=\"text-center\">' + object.data.employee + '</td>' +
                    '<td class=\"text-center\">' + object.data.reviews + '</td>' +
                    '<td class=\"text-center\"><button class=\"mb-2 cezoom mr-2 btn-transition btn btn-outline-danger\" onclick=\"JSconfirm(\''+ object.id + '\')\">Delete</button></td>';
                    table.appendChild(tr);

                    var col = document.createElement('div');
                    col.className = "col-md-4";
                    col.innerHTML = '<div class=\"card-shadow-primary border mb-3 card card-body border-primary\"><h5 class=\"card-title\">' + object.data.title + '</h5>'+ 
                        '<span><strong>Category:</strong> '+ object.data.category +'</span><br>' +
                        '<span><strong>Description:</strong> '+ object.data.description.substr(0,100) +'...</span><br>' +
                        '<span><strong>Employee:</strong> '+ object.data.employee +'</span><br>' +
                        '<span><strong>Reviews: <i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i></strong> '+ object.data.reviews +'</span><br>' +
                        '<span><button class=\"mb-2 mr-2 btn-transition cezoom btn btn-outline-danger\" onclick=\"JSconfirm(\''+ object.id +'\')\">Delete</button></span>' +
                        '</div>';
                    rowgrid.appendChild(col);
                });
                

                //filling the product counter
                var div = document.getElementById('count');
                var count = document.createElement('span');
                count.innerHTML = Object.keys(data).length;
                div.appendChild(count);
                
            }


            //this function returns categories
            function append_json_categ(data){

                //filling the categories counter
                var div = document.getElementById('count_categories');
                var count = document.createElement('span');
                count.innerHTML = Object.keys(data).length;
                div.appendChild(count);
                
            }
        </script>

        <!-- END SCRIPT LISTENER -->


        <!-- SCRIPT ADD PRODUCT -->
        <?php

            if(isset($_POST['submitproduct'])){
                ?>
                     <script>

                        // USING FETCH TO SEND A REQUEST 
                        var myHeaders = new Headers();
                        myHeaders.append("Content-Type", "application/json");

                        var raw = JSON.stringify({"title":<?php echo json_encode($_POST['title']) ?>,"category":<?php echo json_encode($_POST['category']) ?>,"price":<?php echo json_encode($_POST['price']) ?>,"employee":<?php echo json_encode($_POST['employee']) ?>,"description":<?php echo json_encode($_POST['description']) ?>});

                        var requestOptions = {
                        method: 'POST',
                        headers: myHeaders,
                        body: raw,
                        redirect: 'follow'
                        };

                        fetch("http://us-central1-test-b7665.cloudfunctions.net/api/stores/ijpxNJLM732vm8AeajMR/products", requestOptions)
                        .then(response => response.text())
                        .then(result => {
                            console.log(result);
                            alert('Product added with Success');
                            window.location.replace('index.php');
                        })
                        .catch(error => console.log('error', error));

                    </script>
                <?php
            }
        ?>
       
        
        <!-- END SCRIPT ADD PRODUCT -->
        
        <!-- FILTER ON SEARCH  -->
        <script>
                function filterFunction() {
                  var input, filter, table, tr, td, i, txtValue, rowgrid, divs, h5;
                  input = document.getElementById("searchproduct");
                  filter = input.value.toUpperCase();
                    
                //   for table
                  table = document.getElementById("table-products");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                      txtValue = td.textContent || td.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                      } else {
                        tr[i].style.display = "none";
                      }
                    }       
                  }

                //   for grid 
                rowgrid = document.getElementById('rowgrid');
                divs = rowgrid.getElementsByClassName("col-md-4");
                for (i = 0; i < divs.length; i++) {
                    h5 = divs[i].getElementsByClassName("card-title")[0];
                    if (h5) {
                      txtValue = h5.textContent || h5.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        divs[i].style.display = "";
                      } else {
                        divs[i].style.display = "none";
                      }
                    }       
                  }
                
                }
                </script>
        <!-- END FILTER ON SEARCH -->

<?php
    require_once 'modals.php';
?>


    <!-- Main JS -->
    <script type="text/javascript" src="./assets/scripts/main.js"></script>


</body>
</html>
