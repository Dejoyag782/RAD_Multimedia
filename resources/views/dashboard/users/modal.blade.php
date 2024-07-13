<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-dark" style="color:#fed136;">
          <h5 class="modal-title" id="userModalLabel"><b>User Details</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="editUserForm" method="POST">
        <div class="modal-body">
          @csrf
            <div class="rounded-circle mx-auto" id="profile_pic" 
            style="no-repeat, #ffffff; background-size: cover, auto; min-height: 220px!important; min-width: 200px!important; max-width: 220px!important; max-height: 250px!important;"></div>
            
            <h4 style="padding-top:30px; text-align:center;"><span id="name"></span></h4>
            <h5 style="text-align:center;"><span id="email"></span></h5>
            <hr style="margin-top:20px; margin-bottom:20px;">          
            
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                <label for="user_type">User Type</label>
                <select class="form-select" name="user_type" id="user_type">
                  <option value="mod">Moderator</option>
                  <option value="ad">Admin</option>                  
                </select>
            </div>
            

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>