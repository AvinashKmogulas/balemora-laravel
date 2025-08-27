@extends('backend.common.mainlayout')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--multiple {
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            min-height: 38px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #8c57ff;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 4px 8px;
            margin: 2px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: white;
            margin-right: 5px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover {
            color: #f8f9fa;
        }

        .select2-container--default .select2-search--inline .select2-search__field {
            margin-top: 0;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Offer</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('offers.update', $offer->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="offer_name" class="form-label">Offer Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="offer_name" name="offer_name"
                                                value="{{ $offer->offer_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="discount_percentage" class="form-label">Discount (%)</label>
                                            <input type="number" class="form-control" id="discount_percentage"
                                                name="discount_percentage" min="0" max="100" step="0.01"
                                                value="{{ $offer->discount_percentage }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="properties" class="form-label">Properties<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="properties[]" multiple required>
                                                <option value="Balemora NH27, Lucknow"
                                                    {{ in_array('Balemora NH27, Lucknow', explode(',', $offer->properties)) ? 'selected' : '' }}>
                                                    Balemora NH27, Lucknow</option>
                                                <option value="Balemora Almora"
                                                    {{ in_array('Balemora Almora', explode(',', $offer->properties)) ? 'selected' : '' }}>
                                                    Balemora Almora</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="start_date" class="form-label">Start Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="start_date" name="start_date"
                                                value="{{ $offer->start_date }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="end_date" class="form-label">End Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="end_date" name="end_date"
                                                value="{{ $offer->end_date }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="offer_description" class="form-label">Description</label>
                                    <textarea class="form-control" id="offer_description" name="offer_description" rows="6">{{ $offer->offer_description }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="terms" class="form-label">Terms & Conditions</label>
                                    <textarea class="form-control" id="terms" name="terms" rows="6">{{ $offer->terms }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="offer_image" class="form-label">Offer Image</label>
                                    <input type="file" class="form-control" id="offer_image" name="offer_image"
                                        accept="image/*">
                                    @if ($offer->offer_image)
                                        <div class="mt-2">
                                            <img src="{{ $offer->offer_image }}" alt="Current Offer Image"
                                                class="img-thumbnail" style="max-width: 200px;">
                                            <p class="text-muted small mt-1">Current image. Upload a new image to replace
                                                it.</p>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status">
                                        <option value="active" {{ $offer->status == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive" {{ $offer->status == 'inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-gradient-purple">Update Offer</button>
                                    <a href="{{ route('offers') }}" class="btn btn-secondary rounded-pill">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // Initialize Select2
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select properties',
                allowClear: true,
                tags: false,
                tokenSeparators: [',', ' '],
                width: '100%'
            });
        });

        // TinyMCE Configuration
        const tinymceConfig = {
            height: 300,
            menubar: true,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount',
                'emoticons', 'template', 'paste', 'textpattern', 'nonbreaking',
                'directionality', 'visualchars', 'pagebreak', 'hr', 'noneditable',
                'save', 'print', 'searchreplace', 'spellchecker', 'contextmenu'
            ],
            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image media table | ' +
                'forecolor backcolor removeformat | code fullscreen preview |',
            toolbar_mode: 'wrap',
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; }',
            branding: false,
            promotion: false,
            elementpath: false,
            resize: true,
            paste_data_images: true,
            image_advtab: true,
            setup: function(editor) {
                // Add custom button for code view
                editor.ui.registry.addButton('codeview', {
                    text: 'Code',
                    tooltip: 'View HTML code',
                    onAction: function() {
                        const content = editor.getContent();
                        Swal.fire({
                            title: 'HTML Code',
                            html: '<textarea id="codeViewer" style="width: 100%; height: 300px; font-family: monospace;">' +
                                content + '</textarea>',
                            width: '80%',
                            showCancelButton: true,
                            confirmButtonText: 'Copy Code',
                            cancelButtonText: 'Close',
                            didOpen: function() {
                                document.getElementById('codeViewer').select();
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                navigator.clipboard.writeText(content);
                                Swal.fire({
                                    toast: true,
                                    icon: 'success',
                                    title: 'Code copied to clipboard!',
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            }
                        });
                    }
                });
            }
        };

        // Initialize TinyMCE when page loads
        $(document).ready(function() {
            if (typeof tinymce !== 'undefined') {
                // Initialize description editor
                tinymce.init({
                    ...tinymceConfig,
                    selector: '#offer_description',
                    toolbar: tinymceConfig.toolbar + ' | codeview'
                });

                // Initialize terms editor
                tinymce.init({
                    ...tinymceConfig,
                    selector: '#terms',
                    toolbar: tinymceConfig.toolbar + ' | codeview'
                });
            }
        });
    </script>
@endpush
