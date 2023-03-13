<div class="modal fade" id="addemployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adding or Updating Employees</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method='post' id='addform' enctype='multipart/form-data'>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Name:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class='input-group-text bg-secondary'>
                                    <i class="fas fa-user-alt text-light"></i>
                                </span>
                            </div>
                            <input type="text" name='username' class='form-control' id='username' required
                                placeholder='Enter user Name'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">First Day In Job:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class='input-group-text bg-secondary'>
                                    <i class="fas fa-user-alt text-light"></i>
                                </span>
                            </div>
                            <input type="date" name='firstday' class='form-control' id='firstday' required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Mobile:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class='input-group-text bg-secondary'>
                                    <i class="fas fa-add text-light"></i>
                                </span>
                            </div>
                            <input type="text" name='mobile' class='form-control' id='mobile' minLength='10'
                                maxLength='10' required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class='input-group-text bg-secondary'>
                                    <i class="fa fa-envelope text-light"></i>
                                </span>
                            </div>
                            <input type="text" name='email' class='form-control' id='email' required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Profile:</label>
                        <div class="input-group">
                            <label for="userphoto" class='custom-file-label'>Choose</label>
                            <input type="file" name="photo" class='custom-file-input' id='userphoto'>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>