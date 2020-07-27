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
                                            <img src="assets/images/categories.png" alt="Categories" width="40"/>
                                        </a>
                                    </div>
                                    <div>Categories
                                        <div class="page-title-subheading">Here display the categories from store ID <q>ijpxNJLM732vm8AeajMR</q>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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

                        <div class="main-card mb-12 card">

                        
                            <div class="card-header">Categories
                                    <div class="search-wrapper" style="margin-left: 30px;">
                                            <div class="input-holder">
                                                <input type="text"  onkeyup="filterFunction()" id="searchcateg" class="search-input" placeholder="Search for specific category">
                                                <button class="search-icon"><span></span></button>
                                            </div>
                                            <button class="close"></button>
                                    </div>
                                </div>
                        
                            <!-- TABLE  -->
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-panel" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                                <div class="main-card mb-3 card">
                                                    <div class="table-responsive">
                                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="table-categories">
                                                            <thead>
                                                            <tr>
                                                                <th class="text-center">Name of category</th>
                                                                <th class="text-center">Number of products</th>
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


                        </div>
                    </div>
                    <div class="app-main__inner" id="charts">
                        <div class="main-card mb-12 card">

                        
                            <div class="card-header">Charts</div>
                        
                            <!-- CHARTS  -->
                            <div class="col-md-6" style="margin-top:25px;">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Polar Chart</h5>
                                                <canvas id="polar"></canvas>
                                            </div>
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

    <!-- SCRIPT LISTENER -->
    <script>
            //first add an event listener for page load
            document.addEventListener( "DOMContentLoaded", get_json_data, false ); // get_json_data is the function name that will fire on page load
    
            //this function is in the event listener and will execute on page load
            function get_json_data(){
                // Relative URL of external json file
                var json_categ = 'http://us-central1-test-b7665.cloudfunctions.net/api/stores/ijpxNJLM732vm8AeajMR/stats/categories';

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
            function append_json_categ(data){
                var table = document.getElementById('table-categories');
                var c = [];
                var n = [];
                var random = [];
                data.forEach(function(object) {
                    var tr = document.createElement('tr');
                    tr.innerHTML = '<td class=\"text-center\">' + object.category + '</td>' +
                    '<td class=\"text-center\">' + object.numberOfProducts + '</td>';
                    table.appendChild(tr);

                    // increasin polar chart data
                    c.push("'"+object.category+"'");
                    n.push(""+object.numberOfProducts+"");

                    // random colors
                    var randomR = Math.floor((Math.random() * 130) + 100);
                    var randomG = Math.floor((Math.random() * 130) + 100);
                    var randomB = Math.floor((Math.random() * 130) + 100);
                    var randomn = "rgba(" 
                        + randomR + ", " 
                        + randomG + ", " 
                        + randomB + ", 0.9)";
                    random.push(randomn);
                });
                
                var ctx = document.getElementById('polar').getContext('2d');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'polarArea',

                    // The data for our dataset
                    data: {
                        labels : c,
                        datasets: [{
                            label: "Categories Chart",
                            backgroundColor: random,
                            borderColor: '#fff',
                            data : n,
                        }]
                    },

                    // Configuration options go here
                    options: {
                        responsive: !0,
                        legend: {
                            position: "right"
                        },
                        title: {
                            display: !1,
                            text: "Polar Chart for Categories"
                        },
                        scale: {
                            ticks: {
                                beginAtZero: !0
                            },
                            reverse: !1
                        },
                        animation: {
                            animateRotate: !1,
                            animateScale: !0
                        }
                    }
                });
                // END POLAR CHART

                //filling the categories counter
                var div = document.getElementById('count_categories');
                var count = document.createElement('span');
                count.innerHTML = Object.keys(data).length;
                div.appendChild(count);
            }
        </script>

        <!-- END SCRIPT LISTENER -->
        
        <!-- FILTER ON SEARCH  -->
        <script>
                function filterFunction() {
                  var input, filter, table, tr, td, i, txtValue, rowgrid, divs, h5;
                  input = document.getElementById("searchcateg");
                  filter = input.value.toUpperCase();
                    
                    //   for table
                  table = document.getElementById("table-categories");
                  tr = table.getElementsByTagName("tr");
                  for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                      txtValue = td.textContent || td.innerText;
                      if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                      } else {
                        tr[i].style.display = "none";
                      }
                    }       
                  }

                }
                </script>
        <!-- END FILTER ON SEARCH -->
    <?php require_once 'modals.php'; ?>
</body>
</html>