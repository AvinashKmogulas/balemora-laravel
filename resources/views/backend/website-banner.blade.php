@extends('backend.common.mainlayout')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            Website Banners
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Image</th>
                                        <th>Page</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sn = 1;
                                        @endphp
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td>{{ $sn++ }}</td>
                                                <td>{{ $banner->title }}</td>
                                                <td>{{ $banner->subtitle }}</td>
                                                <td>
                                                    @if ($banner->mediaType === 'video')
                                                        <video src="{{ $banner->image }}" width="160" controls
                                                            class="rounded"></video>
                                                    @else
                                                        <img src="{{ $banner->image }}" width="160" class="rounded" />
                                                    @endif
                                                </td>
                                                <td>{{ $banner->page }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input js-toggle-status" type="checkbox"
                                                            role="switch" data-id="{{ $banner->id }}"
                                                            {{ $banner->status ? 'checked' : '' }}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-primary js-edit-banner"
                                                        data-id="{{ $banner->id }}" data-title="{{ $banner->title }}"
                                                        data-subtitle="{{ $banner->subtitle }}"
                                                        data-page="{{ $banner->page }}">
                                                        Edit
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            Banner Form
                        </div>
                        <div class="card-body">
                            <div class="col-sm-12">
                                <form id="bannerForm" action="{{ route('websiteBanner.save') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" id="banner_id" value="" />
                                    <div class="form-group mb-2">
                                        <label for="title" class="form-label">Banner Title</label>
                                        <input type="text" name="title" id="title" class="form-control"
                                            value="{{ old('title') }}" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="sub_title" class="form-label">Banner Sub Title</label>
                                        <input type="text" name="sub_title" id="sub_title" class="form-control"
                                            value="{{ old('sub_title') }}" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="banner" class="form-label">Banner Media (Image or Video)</label>
                                        <input type="file" name="banner" id="banner" class="form-control"
                                            accept="image/*,video/*" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="page" class="form-label">Page Name</label>
                                        <input type="text" name="page" id="page" class="form-control"
                                            value="{{ old('page') }}" />
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="submit" id="submitBtn" class="btn btn-gradient-purple"
                                            value="Save Banner" name="save_banner" />
                                        <button type="button" id="cancelEditBtn"
                                            class="btn btn-secondary ms-2 d-none">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.js-toggle-status').forEach(function(el) {
                    el.addEventListener('change', function() {
                        const bannerId = this.dataset.id;
                        const status = this.checked ? 1 : 0;
                        fetch("{{ route('websiteBanner.update') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                id: bannerId,
                                status
                            })
                        }).then(r => r.json()).then(res => {
                            if (!res.success) {
                                throw new Error('Failed to update');
                            }
                        }).catch(() => {
                            this.checked = !status;
                        });
                    });
                });

                // Edit banner: prefill form and switch to update mode
                const form = document.getElementById('bannerForm');
                const submitBtn = document.getElementById('submitBtn');
                const cancelBtn = document.getElementById('cancelEditBtn');
                const idInput = document.getElementById('banner_id');
                const titleInput = document.getElementById('title');
                const subTitleInput = document.getElementById('sub_title');
                const pageInput = document.getElementById('page');

                const originalAction = form.getAttribute('action');
                document.querySelectorAll('.js-edit-banner').forEach(function(btn) {
                    btn.addEventListener('click', function() {
                        const id = this.dataset.id;
                        const title = this.dataset.title || '';
                        const subtitle = this.dataset.subtitle || '';
                        const page = this.dataset.page || '';

                        idInput.value = id;
                        titleInput.value = title;
                        subTitleInput.value = subtitle;
                        pageInput.value = page;

                        form.setAttribute('action', "{{ route('websiteBanner.update') }}");
                        submitBtn.value = 'Update Banner';
                        cancelBtn.classList.remove('d-none');
                    });
                });

                cancelBtn.addEventListener('click', function() {
                    idInput.value = '';
                    titleInput.value = '';
                    subTitleInput.value = '';
                    pageInput.value = '';
                    form.setAttribute('action', originalAction);
                    submitBtn.value = 'Save Banner';
                    cancelBtn.classList.add('d-none');
                });
            });
        </script>
    @endpush
@endsection
