




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
                                    <button class="btn btn-primary" type="submit" name="submitproduct">Submit</button>
                                </form> 
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- DELETE -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="deleteModal" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>