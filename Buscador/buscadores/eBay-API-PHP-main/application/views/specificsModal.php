<!-- Start of Modal -->
<div id="itemSpecifics" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="titleLabel">Item Specifics</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div> <!-- End header -->
            <div class="modal-body">
            <!-- Code from php controller is dynamically generated here -->
            </div><!-- End Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" id="catbtn_ok" class="btn btn-primary" onclick=checkSubmit()>OK</button>
            </div>
        </div><!-- End Content -->
    </div>
</div>
<script>
// Display only the currently selected field
function showField(index)
{
    // Hide all fields
    $('#specificForm div.form-group').hide();
    // Show the field we want to see
    showID = 'div#row-' + index;
    $(showID).show();
    // Set the title 
    $('#formTitle').text($('#specMaster :selected').text());
}
function checkSubmit()
{
    // If we pass validity checks, submit the form
    $('#specificForm').submit();
    return true;
}
</script>