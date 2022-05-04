<!-- Start of Modal -->
<div id="categoryModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="titleLabel">Search Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div> <!-- End header -->
            <div class="modal-body">
                <!-- Form -->
                <form method='post' action=''>
                    <div class="form-group row py-2">
                        <div class='col-sm-9'>
                        <input type="text" class="form-control" id="searchWord" name="searchWord"
                        placeholder="Enter your category search terms" maxlength="50">
                        </div>
                        <div class='col-sm-3'>
                            <button type="button" class="btn btn-primary" id="btnSearch">Search</button>
                        </div>
                    </div>
                </form>
                <!-- Search results --->
                <div class="form-group row py-2">
                    <div class="col-sm-12">
                        <select name="catDesc" id="catDesc" class="selectpicker form-control" size="8">  
                        </select>  
                    </div>
                </div>
                <!-- Search Detail -->
                <div class="form-group row py-2">
                    <label for="categoryID" class="col-sm-3 col-form-label">Category ID:</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="categoryID" placeholder="Select a category above">
                    </div>
                </div>
            </div><!-- End Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="catbtn_ok" class="btn btn-primary">OK</button>
                <input type="hidden" id="selectedID">
                <input type="hidden" id="selectedDesc">
            </div>
        </div><!-- End Content -->
    </div>
</div>
