<!-- Add Modal -->
<div class="modal fade" id="HistoryModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-light">
                <h5 class="modal-title" id="historyModalLabel"><b>History Details</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="HistoryForm" method="POST" enctype="multipart/form-data" action="{{ route('timeline.storeOrUpdate') }}">
                @csrf
                <div class="modal-body">                    
                    <input type="hidden" name="id" id="id">
                    
                    <div class="mb-3">
                        <label for="timeline" class="form-label">Timeline</label>
                        <input type="text" class="form-control" id="timeline" name="timeline" required>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
                    </div>

                    <div>

                <x-input-label for="photo" :value="__('Photo')" />
                <div class="mb-4 d-flex justify-content-left" style="display: flex; justify-content:left !important; max-height: 200px!important; min-width:200px!important; max-width:250px!important; ">
                    <div id="selectedImage" class="rounded-circle mx-auto" style="background-size: cover, auto; 
                    no-repeat; min-height: 200px!important; min-width:200px!important; max-width:250px!important; max-height:250px!important; background-image: url('https://static.vecteezy.com/system/resources/previews/021/277/888/original/picture-icon-in-flat-design-style-gallery-symbol-illustration-png.png');">
                    </div>
                </div>
                <div class="d-flex justify-content-right">
                <div data-mdb-ripple-init class="btn btn-primary btn-rounded" >
                        <label class="form-label text-white m-1" for="customFile1">Choose Photo</label>
                        <input type="file" name="photo" class="form-control d-none"
                        type='file' accept=".png, .jpg, .jpeg," id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id='submitBtn' class="btn btn-primary">Add Timeline</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
