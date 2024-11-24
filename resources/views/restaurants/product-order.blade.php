@extends('layouts.restapplayout')
@section('title','CampusEats - Order')
@section('content')

<div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Shop</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Product Order</a></li>
					</ol>
                </div>
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                               
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr>
                                      
                                                <th class="align-middle">Order</th>
                                                <th class="align-middle pe-7">Date</th>
                                                <th class="align-middle" style="min-width: 12.5rem;">Ship To</th>
                                                <th class="align-middle text-end">Status</th>
                                                <th class="align-middle text-end">Menu Name</th>
                                                <th class="align-middle text-end">Quantity</th>
                                                <th class="align-middle text-end">Amount</th>
                                                <th class="align-middle text-end">Select Status</th>
                                            </tr>
                                        </thead>
                   

                                        <tbody id="orders">
                                            @foreach($orders as $order)
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <strong>#{{ $order->orderid }}</strong> by <strong>{{ $order->customer_name }}</strong><br />
                                                    <a href="mailto:{{ $order->customer_email }}">{{ $order->customer_email }}</a><br />
                                                    <a href="tel:{{ $order->customer_mobile }}">{{ $order->customer_mobile }}</a>
                                                </td>
                                                <td class="py-2">{{ \Carbon\Carbon::parse($order->date)->format('d/m/Y') }}</td>
                                                <td class="py-2">{{ $order->customer_address }}</td>
                                                <td class="py-2 text-end">
                                                    @if($order->status == 'completed')
                                                        <span class="badge badge-success">Completed<span class="ms-1 fa fa-check"></span></span>
                                                    @elseif($order->status == 'processing')
                                                        <span class="badge badge-warning">Processing<span class="ms-1 fa fa-spinner fa-spin"></span></span>
                                                    @elseif($order->status == 'pending')
                                                        <span class="badge badge-danger">Pending<span class="ms-1 fa fa-clock"></span></span>
                                                    @endif
                                                </td>
                                                <td class="py-2 text-end">{{ $order->menu_name }}</td>
                                                <td class="py-2 text-end">{{ $order->qty }}</td>
                                                <td class="py-2 text-end">Rs. {{ $order->amount }}</td>
                                                <!-- <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif">
                                                        <button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-{{ $order->orderid }}" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">
                                                            <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-{{ $order->orderid }}">
                                                            <div class="py-2">
                                                                <a class="dropdown-item status-option" href="javascript:void(0);" data-order-id="{{ $order->orderid }}" data-status="completed">Completed</a>
                                                                <a class="dropdown-item status-option" href="javascript:void(0);" data-order-id="{{ $order->orderid }}" data-status="processing">Processing</a>
                                                                <a class="dropdown-item status-option" href="javascript:void(0);" data-order-id="{{ $order->orderid }}" data-status="pending">Pending</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td> -->

                                                <td class="py-2 text-end">
                                                    @if($order->status === 'completed')
                                                        <button class="btn btn-success tp-btn-light sharp" type="button" disabled>
                                                            {{ ucfirst($order->status) }}
                                                        </button>
                                                    @else
                                                        <div class="dropdown text-sans-serif">
                                                            <button class="btn btn-primary tp-btn-light sharp dropdown-toggle" type="button" id="order-dropdown-{{ $order->orderid }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                {{ ucfirst($order->status) }}
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-{{ $order->orderid }}">
                                                                <div class="py-2">
                                                                    @if($order->status !== 'completed')
                                                                        <a class="dropdown-item update-status" href="javascript:void(0);" data-orderid="{{ $order->orderid }}" data-status="completed">Completed</a>
                                                                    @endif
                                                                    @if($order->status !== 'processing')
                                                                        <a class="dropdown-item update-status" href="javascript:void(0);" data-orderid="{{ $order->orderid }}" data-status="processing">Processing</a>
                                                                    @endif
                                                                    @if($order->status !== 'pending')
                                                                        <a class="dropdown-item update-status" href="javascript:void(0);" data-orderid="{{ $order->orderid }}" data-status="pending">Pending</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </td>


                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const updateStatusLinks = document.querySelectorAll('.update-status');

        updateStatusLinks.forEach(link => {
            link.addEventListener('click', function () {
                const orderId = this.getAttribute('data-orderid');
                const newStatus = this.getAttribute('data-status');

                fetch(`/update-order-status/${orderId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ status: newStatus }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Reload the page to reflect changes
                        location.reload();
                    } else {
                        alert('Error updating status. Please try again.');
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
</script>



@endsection