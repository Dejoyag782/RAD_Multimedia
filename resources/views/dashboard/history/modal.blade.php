<div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-light">
                <h5 class="modal-title" id="historyModalLabel"><b>History Details</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editHistoryForm" method="POST" action="{{ route('history.store') }}" enctype="multipart/form-data">
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
                    <div id="selectedImage" class="rounded-circle mx-auto" style="background-image: url({{ $history->photo ? asset('storage/' . $history->photo) : 'https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-history-vector.jpg' }});
                    no-repeat, #ffffff;background-size: cover, auto;
                    min-height: 200px!important; min-width:200px!important; max-width:250px!important; max-height:250px!important;">
                    </div>
                    {{-- <img id="selectedImage" class="rounded-circle mx-auto"
                    style="min-height: 200px!important; min-width:200px!important; max-width:250px!important; max-height:250px!important;"
                    alt="example placeholder" /> --}}
                </div>
                <div class="d-flex justify-content-right">
                    <div data-mdb-ripple-init class="btn btn-primary btn-rounded" >
                        <label class="form-label text-white m-1" for="customFile1">Choose Photo</label>
                        <input type="file" id="photo" name="photo" class="form-control d-none"
                        type='file' accept=".png, .jpg, .jpeg," id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
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
