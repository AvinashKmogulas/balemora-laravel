@extends('backend.common.mainlayout')

@section('styles')
    <style>
        .is-invalid {
            border-color: #dc3545 !important;
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }

        .badge.bg-info {
            background-color: #0dcaf0 !important;
        }

        .badge.bg-success {
            background-color: #198754 !important;
        }

        .form-check-input:checked {
            background-color: #198754;
            border-color: #198754;
        }

        .contact-field {
            border: 1px solid #e4e6eb;
            border-radius: 8px;
            padding: 15px;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }

        .contact-field:hover {
            border-color: #a855f7;
            box-shadow: 0 2px 8px rgba(168, 85, 247, 0.1);
        }

        .remove-field {
            transition: all 0.3s ease;
        }

        .remove-field:hover {
            transform: scale(1.1);
        }

        #addField {
            transition: all 0.3s ease;
        }

        #addField:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(25, 135, 84, 0.2);
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <!-- Left Column - Form -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Contact Detail</h5>
                        </div>
                        <div class="card-body">
                            <form id="contactForm">
                                @csrf
                                <div id="contactFields">
                                    <div class="contact-field mb-3">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="form-label">Contact Type</label>
                                                <select class="form-select contact-type" name="contacts[0][type]" required>
                                                    <option value="">Select Type</option>
                                                    <option value="phone">Phone</option>
                                                    <option value="email">Email</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Contact Detail</label>
                                                <input type="text" class="form-control contact-detail"
                                                    name="contacts[0][detail]" placeholder="Enter contact detail" required>
                                                <div class="invalid-feedback contact-error"></div>
                                            </div>
                                            <div class="col-md-1 d-flex align-items-end">
                                                <button type="button" class="btn btn-danger btn-sm remove-field"
                                                    style="display: none;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="button" class="btn btn-success btn-sm" id="addField">
                                        <i class="fas fa-plus"></i> Add Another Contact
                                    </button>
                                </div>

                                <button type="submit" class="btn btn-gradient-purple">Add All Contact Details</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact Details List -->
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Contact Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="contactDetailsTable">
                                        @forelse($contactDetails as $contact)
                                            <tr data-id="{{ $contact->id }}">
                                                <td>
                                                    <span
                                                        class="badge bg-{{ $contact->contact_type == 'phone' ? 'info' : 'success' }}">
                                                        {{ ucfirst($contact->contact_type) }}
                                                    </span>
                                                </td>
                                                <td>{{ $contact->contact }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input status-toggle" type="checkbox"
                                                            data-id="{{ $contact->id }}"
                                                            {{ $contact->status ? 'checked' : '' }}>
                                                        <label class="form-check-label">
                                                            {{ $contact->status ? 'Active' : 'Inactive' }}
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning edit-btn"
                                                        data-id="{{ $contact->id }}"
                                                        data-type="{{ $contact->contact_type }}"
                                                        data-contact="{{ $contact->contact }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-danger delete-btn"
                                                        data-id="{{ $contact->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No contact details found</td>
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
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Contact Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_id" name="id">
                        <div class="mb-3">
                            <label for="edit_contact_type" class="form-label">Contact Type</label>
                            <select class="form-select" id="edit_contact_type" name="contact_type" required>
                                <option value="phone">Phone</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit_contact" class="form-label">Contact Detail</label>
                            <input type="text" class="form-control" id="edit_contact" name="contact" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="updateBtn">Update</button>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                let fieldCounter = 1;

                // Add new contact field
                $('#addField').on('click', function() {
                    const newField = `
                    <div class="contact-field mb-3">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="form-label">Contact Type</label>
                                <select class="form-select contact-type" name="contacts[${fieldCounter}][type]" required>
                                    <option value="">Select Type</option>
                                    <option value="phone">Phone</option>
                                    <option value="email">Email</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact Detail</label>
                                <input type="text" class="form-control contact-detail" name="contacts[${fieldCounter}][detail]"
                                    placeholder="Enter contact detail" required>
                                <div class="invalid-feedback contact-error"></div>
                            </div>
                            <div class="col-md-1 d-flex align-items-end">
                                <button type="button" class="btn btn-danger btn-sm remove-field">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;

                    $('#contactFields').append(newField);
                    fieldCounter++;

                    // Show remove button on first field if there are multiple fields
                    if ($('.contact-field').length > 1) {
                        $('.remove-field').show();
                    }
                });

                // Remove contact field
                $(document).on('click', '.remove-field', function() {
                    $(this).closest('.contact-field').remove();

                    // Hide remove button on first field if only one field remains
                    if ($('.contact-field').length === 1) {
                        $('.remove-field').hide();
                    }

                    // Reindex the remaining fields
                    reindexFields();
                });

                // Reindex fields after removal
                function reindexFields() {
                    $('.contact-field').each(function(index) {
                        $(this).find('.contact-type').attr('name', `contacts[${index}][type]`);
                        $(this).find('.contact-detail').attr('name', `contacts[${index}][detail]`);
                    });
                    fieldCounter = $('.contact-field').length;
                }

                // Client-side validation for a single field
                function validateContactField(field) {
                    const contactType = field.find('.contact-type').val();
                    const contact = field.find('.contact-detail').val();
                    let isValid = true;

                    // Clear previous errors
                    field.find('.contact-error').text('').hide();
                    field.find('.contact-detail').removeClass('is-invalid');

                    if (contactType === 'email') {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(contact)) {
                            field.find('.contact-error').text('Please enter a valid email address').show();
                            field.find('.contact-detail').addClass('is-invalid');
                            isValid = false;
                        }
                    } else if (contactType === 'phone') {
                        const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
                        if (!phoneRegex.test(contact)) {
                            field.find('.contact-error').text('Please enter a valid phone number').show();
                            field.find('.contact-detail').addClass('is-invalid');
                            isValid = false;
                        }
                    }

                    return isValid;
                }

                // Validate all fields
                function validateAllFields() {
                    let isValid = true;
                    $('.contact-field').each(function() {
                        if (!validateContactField($(this))) {
                            isValid = false;
                        }
                    });
                    return isValid;
                }

                // Validate on contact type change
                $(document).on('change', '.contact-type', function() {
                    const field = $(this).closest('.contact-field');
                    if (field.find('.contact-detail').val()) {
                        validateContactField(field);
                    }
                });

                // Validate on contact input
                $(document).on('input', '.contact-detail', function() {
                    const field = $(this).closest('.contact-field');
                    if (field.find('.contact-type').val()) {
                        validateContactField(field);
                    }
                });

                // Add Contact Details
                $('#contactForm').on('submit', function(e) {
                    e.preventDefault();

                    if (!validateAllFields()) {
                        return;
                    }

                    // Prepare data for multiple contacts
                    const formData = new FormData();
                    formData.append('_token', $('input[name="_token"]').val());

                    $('.contact-field').each(function(index) {
                        const type = $(this).find('.contact-type').val();
                        const detail = $(this).find('.contact-detail').val();
                        formData.append(`contacts[${index}][type]`, type);
                        formData.append(`contacts[${index}][detail]`, detail);
                    });

                    $.ajax({
                        url: '{{ route('contactDetails.store') }}',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.message,
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });

                                // Reset form
                                $('#contactForm')[0].reset();
                                $('.contact-error').text('').hide();
                                $('.contact-detail').removeClass('is-invalid');

                                // Remove all extra fields except the first one
                                $('.contact-field:not(:first)').remove();
                                fieldCounter = 1;
                                $('.remove-field').hide();

                                // Reload page to show new data
                                location.reload();
                            }
                        },
                        error: function(xhr) {
                            let errorMessage = 'An error occurred';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: errorMessage,
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                });

                // Edit Contact Detail
                $('.edit-btn').on('click', function() {
                    const id = $(this).data('id');
                    const type = $(this).data('type');
                    const contact = $(this).data('contact');

                    $('#edit_id').val(id);
                    $('#edit_contact_type').val(type);
                    $('#edit_contact').val(contact);

                    $('#editModal').modal('show');
                });

                // Update Contact Detail
                $('#updateBtn').on('click', function() {
                    const id = $('#edit_id').val();
                    const formData = $('#editForm').serialize();

                    $.ajax({
                        url: `/admin/contact-details/${id}`,
                        method: 'PUT',
                        data: formData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.message,
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });

                                $('#editModal').modal('hide');
                                location.reload();
                            }
                        },
                        error: function(xhr) {
                            let errorMessage = 'An error occurred';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: errorMessage,
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                });

                // Delete Contact Detail
                $('.delete-btn').on('click', function() {
                    const id = $(this).data('id');

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: `/admin/contact-details/${id}`,
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    if (response.success) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Deleted!',
                                            text: response.message,
                                            toast: true,
                                            position: 'top-end',
                                            showConfirmButton: false,
                                            timer: 3000
                                        });

                                        location.reload();
                                    }
                                },
                                error: function(xhr) {
                                    let errorMessage = 'An error occurred';
                                    if (xhr.responseJSON && xhr.responseJSON.message) {
                                        errorMessage = xhr.responseJSON.message;
                                    }

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: errorMessage,
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 3000
                                    });
                                }
                            });
                        }
                    });
                });

                // Toggle Status
                $('.status-toggle').on('change', function() {
                    const id = $(this).data('id');
                    const isChecked = $(this).is(':checked');

                    $.ajax({
                        url: `/admin/contact-details/${id}/toggle-status`,
                        method: 'PATCH',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: response.message,
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });

                                // Update the label
                                const label = $(`input[data-id="${id}"]`).siblings('label');
                                label.text(response.status ? 'Active' : 'Inactive');
                            }
                        },
                        error: function(xhr) {
                            // Revert the toggle if there's an error
                            $(`input[data-id="${id}"]`).prop('checked', !isChecked);

                            let errorMessage = 'An error occurred';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMessage = xhr.responseJSON.message;
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: errorMessage,
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
