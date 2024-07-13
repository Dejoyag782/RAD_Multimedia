<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {

        // -----------------------------------------------------------start datatable display-----------------------------------------//

        $('#users_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('getUsers') }}",
                type: "POST",
                data: function (data) {
                    data.search = $('input[type="search"]').val();
                }
            },
            order: ['1', 'DESC'],
            pageLength: 10,
            searching: true,
            aoColumns: [
                {
                    data: 'profile_pic',
                    render: function (data, type, row) {
                        var profilePicUrl = data ? `{{ asset('storage/') }}/${data}` : 'https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg';
                        return `<div class="rounded-circle mx-auto" style="background-image: url('${profilePicUrl}'); no-repeat, #ffffff; background-size: cover, auto; min-height: 50px!important; min-width: 50px!important; max-width: 50px!important; max-height: 50px!important;"></div>`;
                    }
                },
                {
                    data: 'name',
                },
                {
                    data: 'email',
                },
                {
                    data: 'user_type',
                    render: function(data) {
                        if (data === 'ad') {
                            return 'Admin';
                        } else if (data === 'mod') {
                            return 'Moderator';
                        } else {
                            return ''; // Handle unexpected cases
                        }
                    }
                },
                {
                    data: null,
                    render: function (data, type, row) {
                            return '<button type="button" class="btn btn-secondary view-user-btn" data-bs-toggle="modal" data-id="' + row.id + '" data-bs-target="#userModal"><i class="fa fa-eye"></i></button>' + 
                            '<button style="margin-left:5px;" class="btn btn-danger delete-btn" data-id="' + row.id + '" data-name="' + row.name + '"><i class="fa fa-trash"></i></button>';
                        },
                    orderable: false
                }
            ]
        });
    });

        // -----------------------------------------------------------end datatable display-----------------------------------------//


        

        // -----------------------------------------------------------start view/delete/archive-----------------------------------------//

        // View Users Details
        $('#users_datatable').on('click', '.view-user-btn', function() {
            var id = $(this).data('id');

            // Fetch data using AJAX
            $.ajax({
                url: '/users/' + id,  // Adjust the URL to your route
                type: 'GET',
                success: function(response) {
                    // Populate modal fields
                    $('#editUserForm').attr('action', '/users/update/' + response.id); // Set form action dynamically
                    $('#userModal #id').val(response.id);
                    $('#userModal #name').text(response.name);
                    $('#userModal #email').text(response.email);
                    $('#userModal #edit_user_type').val(response.user_type);
                    // Assuming response.profile_pic contains the URL of the profile picture
                    var profilePicUrl = response.profile_pic ? response.profile_pic : 'https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg';
                    // Set the background image of the profile_pic div
                    $('#userModal #profile_pic').css('background-image', `url(storage/${profilePicUrl})`);
                },
                error: function(response) {
                    // alert('Error fetching user details.');
                    showNotification('Error fetching user details.');
                }
            });
        });

        // Delete Button using sweet alerts
        $('#users_datatable').on('click', '.delete-btn', function() {
            var id = $(this).data('id');
            var name = $(this).data('name'); // This should now return the correct name

            Swal.fire({
                title: 'Are you sure?',
                text: `Are you sure to remove "${name}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('deleteUser') }}",
                        type: "POST",
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            showNotification(response.success);
                            $('#users_datatable').DataTable().ajax.reload();
                        },
                        error: function(response) {
                            showNotification(response.responseJSON.error);
                        }
                    });
                }
            });
        });



        // -----------------------------------------------------------end view/delete/archive-----------------------------------------//

    
    $('#addUserForm').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#addUserModal').modal('hide');
                    $('#addUserForm')[0].reset();
                    // Optionally, refresh your datatable here
                    showNotification(response.success);
                    $('#user_datatable').DataTable().ajax.reload();
                    alert('User added successfully');
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            errorMessage += errors[key] + '\n';
                        }
                    }
                    alert(errorMessage);
                }
            });
        });

        // Submit Form via AJAX
        $('#editUserForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            var formData = $(this).serialize();

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle successful update
                    $('#userModal').modal('hide');

                    // refresh datatable
                    $('#user_datatable').DataTable().ajax.reload();
                    alert('User updated successfully');
                    showNotification(response.success);
                },
                error: function(response) {
                    // Handle errors
                    alert('Error Updating User');
                    showNotification(response.error);
                }
            });
        });


</script>