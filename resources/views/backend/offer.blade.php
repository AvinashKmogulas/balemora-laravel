@extends('backend.common.mainlayout')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row gy-6">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Offers List</h4>
                            <div class="button">
                                <a href="{{ route('offers.add') }}" type="button" class="btn btn-gradient-purple">
                                    <i class="iconify" data-icon="mdi:plus"></i> Add Offer
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if ($offers->isNotEmpty())
                                    @foreach ($offers as $offer)
                                        <div class="col-sm-4">
                                            <div class="card h-100 position-relative">
                                                <button type="button"
                                                    class="badge border-0 position-absolute top-0 start-0 m-2 offer-toggle-status {{ $offer->status == 'active' || $offer->status == 1 ? 'bg-success' : 'bg-danger' }}"
                                                    data-offer-id="{{ $offer->id }}" title="Toggle status">
                                                    {{ ucfirst($offer->status) }}
                                                </button>
                                                <form action="{{ route('offers.destroy', $offer->id) }}" method="POST"
                                                    class="position-absolute top-0 end-0 m-2 offer-delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger rounded-circle"
                                                        title="Delete">
                                                        &times;
                                                    </button>
                                                </form>
                                                <img src="{{ $offer->offer_image }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ ucfirst($offer->offer_name) }}</h5>
                                                </div>
                                                <div class="card-footer d-flex justify-content-start">
                                                    <button type="button" class="btn btn-sm btn-gradient-purple me-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#offerViewModal-{{ $offer->id }}">View</button>
                                                    <a href="{{ route('offers.edit', $offer->id) }}"
                                                        class="btn btn-sm btn-gradient-purple">Edit</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- View Modal -->
                                        <div class="modal fade" id="offerViewModal-{{ $offer->id }}" tabindex="-1"
                                            aria-labelledby="offerViewModalLabel-{{ $offer->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="offerViewModalLabel-{{ $offer->id }}">
                                                            {{ ucfirst($offer->offer_name) }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if ($offer->offer_image)
                                                            <img src="{{ $offer->offer_image }}" alt="Offer Image"
                                                                class="img-fluid mb-3 rounded">
                                                        @endif
                                                        <div class="row g-3 mb-3">
                                                            <div class="col-md-3">
                                                                <div><strong>Status:</strong> <span
                                                                        class="badge {{ $offer->status == 'active' || $offer->status == 1 ? 'bg-success' : 'bg-danger' }}">{{ ucfirst($offer->status) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div><strong>Properties:</strong> {{ $offer->properties }}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div><strong>Discount:</strong>
                                                                    {{ $offer->discount_percentage ? $offer->discount_percentage + 0 . '%' : 'N/A' }}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div><strong>Start Date:</strong>
                                                                    {{ optional($offer->start_date)->format('Y-m-d') ?? $offer->start_date }}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div><strong>End Date:</strong>
                                                                    {{ optional($offer->end_date)->format('Y-m-d') ?? $offer->end_date }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if (!empty($offer->offer_description))
                                                            <div class="mb-3">
                                                                <h6>Description</h6>
                                                                <div class="border rounded p-2">{!! $offer->offer_description !!}
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($offer->terms))
                                                            <div>
                                                                <h6>Terms & Conditions</h6>
                                                                <div class="border rounded p-2">{!! $offer->terms !!}
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary rounded-pill"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('offers.edit', $offer->id) }}"
                                                            class="btn btn-gradient-purple">Edit Offer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h4>No Data Found</h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.offer-delete-form');
            forms.forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Delete this offer?',
                        text: 'This action cannot be undone.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Yes, delete it',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });

            // Toggle status via AJAX
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            document.querySelectorAll('.offer-toggle-status').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-offer-id');
                    const self = this;
                    fetch(`{{ url('admin/offers') }}/${id}/toggle-status`, {
                        method: 'PATCH',
                        headers: {
                            'X-CSRF-TOKEN': token,
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }).then(res => res.json()).then(data => {
                        if (data.success) {
                            const isActive = data.status === 'active' || data.status === 1;
                            self.classList.toggle('bg-success', isActive);
                            self.classList.toggle('bg-danger', !isActive);
                            self.textContent = data.status.charAt(0).toUpperCase() + data
                                .status.slice(1);
                            Swal.fire({
                                toast: true,
                                icon: 'success',
                                title: 'Status updated',
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        } else {
                            Swal.fire('Error', data.message || 'Failed to toggle status',
                                'error');
                        }
                    }).catch(() => Swal.fire('Error', 'Failed to toggle status', 'error'));
                });
            });
        });
    </script>
@endsection
