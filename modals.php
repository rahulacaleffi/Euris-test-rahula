




<!-- ADD NEW PRODUCT modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="addnew_product" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add new product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="main-card mb-3 card">
                            <div class="card-body">
                                <form action="index.php#create" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Title" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label>Category</label>
                                            <input type="text" name="category" class="form-control" placeholder="Category" required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label>Price</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="number" name="price" class="form-control" placeholder="Price" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label>Employee</label>
                                            <input type="text" name="employee" class="form-control" placeholder="Employee" required>
                                        </div>
                                        <div class="col-md-9 mb-3">
                                            <label>Description</label>
                                            <input type="text" name="description" class="form-control" placeholder="Description" required>
                                        </div>
                                    </div>
                                    <div class="widget-content-right">
                                        <button class="btn btn-success" type="submit" name="submitproduct" style="float:right;">Create Product</button>
                                    </div>
                                    
                                </form> 
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

<!-- DELETE PRODUCT CONFIRMATION -->
<script type="text/javascript">
function JSconfirm(id){
	swal({ 
    title: "Are you sure!",   
    text: "Are you sure to delete this product?",   
    type: "warning",   
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes",   
    cancelButtonText: "No",   
    closeOnConfirm: false,   
    closeOnCancel: false }, 
    function(isConfirm){   
        if (isConfirm) 
        {   
            // START SCRIPT DELETE
            var myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            var raw = "";

            var requestOptions = {
            method: 'DELETE',
            headers: myHeaders,
            body: raw,
            redirect: 'follow'
            };

            fetch("http://us-central1-test-b7665.cloudfunctions.net/api/stores/ijpxNJLM732vm8AeajMR/products/"+id, requestOptions)
            .then(response => response.text())
            .then(result => {
                            console.log(result);
                            alert('Product deleted');
                            window.location.replace('index.php');
                        })
            .catch(error => {
                console.log('error', error);
                swal("Not deleted. Error:"+error);
                });
            // END SCRIPT DELETE
            
            
        } 
        else {     
            swal("You canceled the operation.");   
        } 
    });
}
</script>