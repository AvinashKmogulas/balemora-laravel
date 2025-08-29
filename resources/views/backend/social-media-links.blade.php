@extends('backend.common.mainlayout')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-12">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">Social Media /</span> Links Management
                    </h4>
                </div>
            </div>

            <div class="row gy-4">
                <!-- Left Column - Form -->
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">
                                <i class="fas fa-plus-circle me-2 text-primary"></i>
                                Add New Social Media Link
                            </h5>
                        </div>
                        <div class="card-body">
                            <form id="socialMediaForm" method="POST" action="{{ route('socialMediaLinks.store') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="platform_name" class="form-label fw-semibold">
                                        <i class="fas fa-tag me-1"></i>Platform Name
                                    </label>
                                    <input type="text" class="form-control" id="platform_name" name="platform_name"
                                        placeholder="e.g., Facebook, Twitter, Instagram" required>
                                </div>

                                <div class="mb-3">
                                    <label for="platform_url" class="form-label fw-semibold">
                                        <i class="fas fa-link me-1"></i>URL
                                    </label>
                                    <input type="url" class="form-control" id="platform_url" name="platform_url"
                                        placeholder="https://example.com" required>
                                </div>

                                <div class="mb-3">
                                    <label for="platform_icon" class="form-label fw-semibold">
                                        <i class="fas fa-icons me-1"></i>Icon Class
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                        <input type="text" class="form-control" id="platform_icon" name="platform_icon"
                                            placeholder="fab fa-facebook" required>
                                    </div>
                                    <small class="form-text text-muted">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Use FontAwesome icon classes (e.g., fab fa-facebook, fab fa-twitter)
                                    </small>
                                </div>

                                <div class="mb-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="status" name="status"
                                            value="1" checked>
                                        <label class="form-check-label fw-semibold" for="status">
                                            <i class="fas fa-toggle-on me-1"></i>Active
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-save me-2"></i>Save Link
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                                        <i class="fas fa-undo me-2"></i>Reset Form
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Table -->
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">
                                <i class="fas fa-list me-2 text-success"></i>
                                Social Media Links
                            </h5>
                            <span class="badge bg-primary">{{ $socialDetails->count() }} Links</span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="fw-semibold">Platform</th>
                                            <th class="fw-semibold">URL</th>
                                            <th class="fw-semibold text-center">Icon</th>
                                            <th class="fw-semibold text-center">Status</th>
                                            <th class="fw-semibold text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($socialDetails as $link)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="{{ $link->platform_icon }} me-3"
                                                            style="font-size: 1.5em; color: #6c757d;"></i>
                                                        <div>
                                                            <span class="fw-semibold">{{ $link->platform_name }}</span>
                                                            <br>
                                                            <small class="text-muted">ID: {{ $link->id }}</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ $link->platform_url }}" target="_blank"
                                                        class="text-decoration-none">
                                                        <div class="text-truncate" style="max-width: 200px;"
                                                            title="{{ $link->platform_url }}">
                                                            {{ $link->platform_url }}
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <i class="{{ $link->platform_icon }}"
                                                        style="font-size: 2em; color: #6c757d;"></i>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check form-switch d-flex justify-content-center">
                                                        <input class="form-check-input status-toggle" type="checkbox"
                                                            data-id="{{ $link->id }}"
                                                            {{ $link->status ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-sm btn-outline-primary"
                                                            onclick="editLink({{ $link->id }}, '{{ $link->platform_name }}', '{{ $link->platform_url }}', '{{ $link->platform_icon }}', {{ $link->status ? 'true' : 'false' }})"
                                                            title="Edit Link">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                                            onclick="deleteLink({{ $link->id }}, '{{ $link->platform_name }}')"
                                                            title="Delete Link">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center py-4">
                                                    <div class="text-muted">
                                                        <i class="fas fa-inbox fa-3x mb-3"></i>
                                                        <br>
                                                        <h6>No social media links found</h6>
                                                        <p class="mb-0">Start by adding your first social media link
                                                            using the form on the left.</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2 text-primary"></i>
                        Edit Social Media Link
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_platform_name" class="form-label fw-semibold">Platform Name</label>
                            <input type="text" class="form-control" id="edit_platform_name" name="platform_name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="edit_platform_url" class="form-label fw-semibold">URL</label>
                            <input type="url" class="form-control" id="edit_platform_url" name="platform_url"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="edit_platform_icon" class="form-label fw-semibold">Icon Class</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                <input type="text" class="form-control" id="edit_platform_icon" name="platform_icon"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="edit_status" name="status"
                                    value="1">
                                <label class="form-check-label fw-semibold" for="edit_status">Active</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Update Link
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        // Status toggle functionality
        $('.status-toggle').on('change', function() {
            const linkId = $(this).data('id');
            const status = $(this).is(':checked') ? 1 : 0;
            const $toggle = $(this);

            // Disable toggle temporarily
            $toggle.prop('disabled', true);

            $.ajax({
                url: `/admin/social-media-links/${linkId}/toggle-status`,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: 'Status updated successfully!',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        title: 'Failed to update status!',
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                    // Revert the toggle
                    $toggle.prop('checked', !status);
                },
                complete: function() {
                    // Re-enable toggle
                    $toggle.prop('disabled', false);
                }
            });
        });

        // Edit link functionality
        function editLink(id, name, url, icon, status) {
            $('#edit_platform_name').val(name);
            $('#edit_platform_url').val(url);
            $('#edit_platform_icon').val(icon);
            $('#edit_status').prop('checked', status);

            $('#editForm').attr('action', `/admin/social-media-links/${id}`);
            $('#editModal').modal('show');
        }

        // Delete link functionality
        function deleteLink(id, name) {
            Swal.fire({
                title: 'Are you sure?',
                text: `Do you want to delete "${name}"?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/social-media-links/${id}`,
                        method: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    toast: true,
                                    icon: 'success',
                                    title: 'Link deleted successfully!',
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true
                                }).then(() => {
                                    location.reload();
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                toast: true,
                                icon: 'error',
                                title: 'Failed to delete link!',
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true
                            });
                        }
                    });
                }
            });
        }

        // Reset form functionality
        function resetForm() {
            document.getElementById('socialMediaForm').reset();
            $('#status').prop('checked', true);

            // Show success message
            Swal.fire({
                toast: true,
                icon: 'info',
                title: 'Form reset successfully!',
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true
            });
        }

        // Form submission with SweetAlert
        $('#socialMediaForm').on('submit', function(e) {
            e.preventDefault();

            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');

            // Disable submit button and show loading
            $submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Saving...');

            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: $form.serialize(),
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: 'Social media link added successfully!',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        }).then(() => {
                            location.reload();
                        });
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'An error occurred!';
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        errorMessage = Object.values(xhr.responseJSON.errors)[0][0];
                    }

                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        title: errorMessage,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                },
                complete: function() {
                    // Re-enable submit button
                    $submitBtn.prop('disabled', false).html(
                        '<i class="fas fa-save me-2"></i>Save Link');
                }
            });
        });

        // Edit form submission
        $('#editForm').on('submit', function(e) {
            e.preventDefault();

            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');

            // Disable submit button and show loading
            $submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Updating...');

            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: $form.serialize(),
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: 'Link updated successfully!',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        }).then(() => {
                            location.reload();
                        });
                    }
                },
                error: function(xhr) {
                    let errorMessage = 'An error occurred!';
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        errorMessage = Object.values(xhr.responseJSON.errors)[0][0];
                    }

                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        title: errorMessage,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                },
                complete: function() {
                    // Re-enable submit button
                    $submitBtn.prop('disabled', false).html(
                        '<i class="fas fa-save me-2"></i>Update Link');
                }
            });
        });

        // Auto-close modal after successful edit
        $('#editModal').on('hidden.bs.modal', function() {
            $('#editForm')[0].reset();
        });
    </script>
@endpush
