@extends('backend.common.mainlayout')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <ul class="nav nav-tabs mb-3" id="galleryTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="lucknow-tab" data-bs-toggle="tab" href="#lucknow" role="tab"
                            aria-controls="lucknow" aria-selected="true">Lucknow</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="almora-tab" data-bs-toggle="tab" href="#almora" role="tab"
                            aria-controls="almora" aria-selected="false">Almora</a>
                    </li>
                </ul>
                <div class="tab-content" id="galleryTabContent">
                    <div class="tab-pane fade show active" id="lucknow" role="tabpanel" aria-labelledby="lucknow-tab">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card mb-4">
                                    <div class="card-header">Add to Lucknow Gallery</div>
                                    <div class="card-body">
                                        <form action="{{ route('gallery.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="property" value="Lucknow" />
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <input type="text" name="description" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <input type="file" name="image" class="form-control"
                                                    accept="image/*" />
                                            </div>
                                            <button type="submit" class="btn btn-gradient-purple">Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row g-3">
                                    @forelse($lucknow_gallery as $item)
                                        <div class="col-6 col-lg-4">
                                            <div class="card h-100 position-relative">
                                                <form method="POST" action="{{ route('gallery.destroy', $item->id) }}"
                                                    class="position-absolute js-delete-form"
                                                    style="top:8px; right:8px; z-index:2;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">&times;</button>
                                                </form>
                                                <img src="{{ $item->image }}" class="card-img-top"
                                                    alt="{{ $item->title }}" />
                                                <div class="card-body p-2">
                                                    <div class="small fw-medium mb-1">{{ $item->title }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <p class="text-muted mb-0">No items yet.</p>
                                        </div>
                                    @endforelse
                                </div>
                                <div class="mt-3">
                                    {{ $lucknow_gallery->appends(['almora_page' => request('almora_page')])->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="almora" role="tabpanel" aria-labelledby="almora-tab">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card mb-4">
                                    <div class="card-header">Add to Almora Gallery</div>
                                    <div class="card-body">
                                        <form action="{{ route('gallery.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="property" value="Almora" />
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" name="title" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <input type="text" name="description" class="form-control" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                <input type="file" name="image" class="form-control"
                                                    accept="image/*" />
                                            </div>
                                            <button type="submit" class="btn btn-gradient-purple">Add</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row g-3">
                                    @forelse($almora_gallery as $item)
                                        <div class="col-6 col-lg-4">
                                            <div class="card h-100 position-relative">
                                                <form method="POST" action="{{ route('gallery.destroy', $item->id) }}"
                                                    class="position-absolute js-delete-form"
                                                    style="top:8px; right:8px; z-index:2;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">&times;</button>
                                                </form>
                                                <img src="{{ $item->image }}" class="card-img-top"
                                                    alt="{{ $item->title }}" />
                                                <div class="card-body p-2">
                                                    <div class="small fw-medium mb-1">{{ $item->title }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <p class="text-muted mb-0">No items yet.</p>
                                        </div>
                                    @endforelse
                                </div>
                                <div class="mt-3">
                                    {{ $almora_gallery->appends(['lucknow_page' => request('lucknow_page')])->links() }}
                                </div>
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
                // Keep correct tab active on pagination
                const params = new URLSearchParams(window.location.search);
                const tabParam = params.get('tab');
                const hash = window.location.hash;
                if (tabParam === 'almora' || hash === '#almora') {
                    const trigger = document.querySelector('a[href="#almora"][data-bs-toggle="tab"]');
                    if (trigger) new bootstrap.Tab(trigger).show();
                }

                document.querySelectorAll('.pagination a').forEach(function(a) {
                    a.addEventListener('click', function(e) {
                        const url = new URL(this.href);
                        const activeTab = document.querySelector('#galleryTabs .nav-link.active');
                        const activeId = activeTab ? activeTab.getAttribute('href') : '#lucknow';
                        url.searchParams.set('tab', activeId.replace('#', ''));
                        this.href = url.toString();
                    });
                });

                document.querySelectorAll('.js-delete-form').forEach(function(form) {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        Swal.fire({
                            title: 'Delete this item?',
                            text: 'This action cannot be undone.',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            });
        </script>
    @endpush
@endsection
