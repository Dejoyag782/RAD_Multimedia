<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-dark" style="color:#fed136;">
          <h5 class="modal-title" id="messageModalLabel"><b>User Details</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="rounded-circle mx-auto" id="profile_pic" 
            style="no-repeat, #ffffff; background-size: cover, auto; min-height: 220px!important; min-width: 200px!important; max-width: 220px!important; max-height: 250px!important;"></div>
            
            <h4 style="padding-top:30px; text-align:center;"><span id="name"></span></h4>
            <h5 style="text-align:center;"><span id="email"></span></h5>
            <hr style="margin-top:20px; margin-bottom:20px;">
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>