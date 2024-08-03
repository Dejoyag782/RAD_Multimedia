<!-- Add Modal -->
<div class="modal fade" id="ServiceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-light">
                <h5 class="modal-title" id="serviceModalLabel"><b>Service Details</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="ServiceForm" method="POST" enctype="multipart/form-data" action="{{ route('service.storeOrUpdate') }}">
                @csrf
                <div class="modal-body">                    
                    <input type="hidden" name="id" id="id">
                    
                    {{-- Favicon Selector --}}
                    <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary justify-center"></i>
                    <i id="faviconPreview" class="fa fa-question-circle fa-stack-1x fa-inverse"></i>
                    </span>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#faviconModal">
                        Select Favicon
                    </button>                    
                    <!-- Input to store selected favicon -->
                    <input type="hidden" id="selectedFavicon" name="icon">

                    <div class="mb-3">
                        <label for="name" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
                    </div>

                    <div class="container">
                        <input type="hidden" name="roles[]" id="rolesInput">
                        <input type="text" class="form-control" id="roleInput" placeholder="Add role to service" />
                        <button type="button" class="btn btn-primary" id="addRoleBtn">Add Role</button>
                        <div id="roleContainer"></div>
                    </div>

                <div class="modal-footer">
                    <button type="submit" id='submitBtn' class="btn btn-primary">Add Timeline</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
