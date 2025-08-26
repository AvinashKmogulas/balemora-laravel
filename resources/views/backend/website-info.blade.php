@extends('backend.common.mainlayout')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <!-- Website Name -->
                <div class="col-md-6">
                    <div class="card h-100 position-relative">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Website Name</h6>
                            <button class="btn btn-sm btn-link text-primary p-0 toggle-edit" data-target="#edit-name">
                                <i class="ri ri-edit-2-line"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">{{ $info->website_name ?? '-' }}</p>
                            <div id="edit-name" class="mt-3 d-none">
                                <form method="POST" action="{{ route('websiteInfo.update') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Website Name</label>
                                        <input type="text" class="form-control" name="website_name"
                                            value="{{ old('website_name', $info->website_name) }}" />
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Website Logo -->
                <div class="col-md-6">
                    <div class="card h-100 position-relative">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Website Logo</h6>
                            <button class="btn btn-sm btn-link text-primary p-0 toggle-edit" data-target="#edit-logo">
                                <i class="ri ri-edit-2-line"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            @if (!empty($info->website_logo))
                                <img src="{{ $info->website_logo }}" alt="Logo" style="height:50px" />
                            @else
                                <p class="mb-0">No logo uploaded.</p>
                            @endif
                            <div id="edit-logo" class="mt-3 d-none">
                                <form method="POST" action="{{ route('websiteInfo.update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Upload Logo</label>
                                        <input type="file" class="form-control" name="website_logo" accept="image/*" />
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- website while ogo --}}
                <div class="col-md-6">
                    <div class="card h-100 position-relative bg-secondary">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0 text-white">Website White Logo</h6>
                            <button class="btn btn-sm btn-link text-primary p-0 toggle-edit" data-target="#edit-white-logo">
                                <i class="ri ri-edit-2-line text-white"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            @if (!empty($info->website_white_logo))
                                <img src="{{ $info->website_white_logo }}" alt="Logo" style="height:50px" />
                            @else
                                <p class="mb-0">No logo uploaded.</p>
                            @endif
                            <div id="edit-white-logo" class="mt-3 d-none">
                                <form method="POST" action="{{ route('websiteInfo.update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Upload Logo</label>
                                        <input type="file" class="form-control" name="website_white_logo"
                                            accept="image/*" />
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Website Favicon -->
                <div class="col-md-6">
                    <div class="card h-100 position-relative">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Website Favicon</h6>
                            <button class="btn btn-sm btn-link text-primary p-0 toggle-edit" data-target="#edit-favicon">
                                <i class="ri ri-edit-2-line"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            @if (!empty($info->website_favicon))
                                <img src="{{ $info->website_favicon }}" alt="Favicon" style="height:32px" />
                            @else
                                <p class="mb-0">No favicon uploaded.</p>
                            @endif
                            <div id="edit-favicon" class="mt-3 d-none">
                                <form method="POST" action="{{ route('websiteInfo.update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Upload Favicon</label>
                                        <input type="file" class="form-control" name="website_favicon"
                                            accept="image/*" />
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Apple Touch Icon -->
                <div class="col-md-6">
                    <div class="card h-100 position-relative">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Apple Touch Icon</h6>
                            <button class="btn btn-sm btn-link text-primary p-0 toggle-edit" data-target="#edit-apple">
                                <i class="ri ri-edit-2-line"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            @if (!empty($info->apple_touch_icon))
                                <img src="{{ $info->apple_touch_icon }}" alt="Apple Touch Icon" style="height:60px" />
                            @else
                                <p class="mb-0">No apple touch icon uploaded.</p>
                            @endif
                            <div id="edit-apple" class="mt-3 d-none">
                                <form method="POST" action="{{ route('websiteInfo.update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Upload Apple Touch Icon</label>
                                        <input type="file" class="form-control" name="apple_touch_icon"
                                            accept="image/*" />
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div
                    class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        &#169;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href="https://z1iinnovation.com" target="_blank" class="footer-link fw-medium">Z1I
                            Innovations</a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="content-backdrop fade"></div>
    </div>
    @push('script')
        <script>
            document.querySelectorAll('.toggle-edit').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var target = document.querySelector(this.dataset.target);
                    if (target) {
                        target.classList.toggle('d-none');
                    }
                });
            });
        </script>
    @endpush
@endsection
