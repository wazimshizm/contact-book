<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eModalLabel">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="EditForm" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputFirstName">First Name</label>
                        <input type="text" class="form-control" id="InputFirstName" name="first_name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="InputLastName">Last Name</label>
                        <input type="text" class="form-control" id="InputLastName" name="last_name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" name="email">
                    </div>
                    <div class="form-group">
                        <label for="InputMobile">Mobile</label>
                        <input type="text" class="form-control" id="InputMobile" name="mobile" required="required">
                    </div>
                    <div class="form-group">
                        <label for="InputPostCode">Postcode</label>
                        <input type="text" class="form-control" id="InputPostCode" name="post_code" inputmode="numeric" maxlength="4">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                <input type="hidden" id="InputID" name="id">
            </form>
        </div>
    </div>
</div>
