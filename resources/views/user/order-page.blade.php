@extends('layouts.userproapplayout')
@section('title','CampusEats - OrderPage')
@section('content')

<div class="container-fluid">
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">Order Page List</h2>
					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">Oder List</a></li>
						</ol>
					</div>
				</div>
				<div class="mb-4 d-flex justify-content-between align-items-center flex-wrap">
					<div class="customer-search sm-mb-0 mb-3">
					
					</div>
						
				</div>
				<!-- <div class="row">
					<div class="col-xl-12">
						<div class="table-responsive">
							<table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black" id="example5">
								<thead>
									<tr>
										<th>
											
										</th>
										<th>Order ID</th>
										<th>Date</th>
										<th>Restaurant</th>
										<th>Address</th>
										<th>Amount</th>
										<th>Mobile No.</th>
										<th>Status Order</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="tbl-bx">
											
										</td>
										<td>#0001234</td>
										<td class="wspace-no">26 March 2020, 12:42 AM</td>
										<td>Olivia Shine</td>
										<td class="text-ov">35 Station Road London</td>
										<td class="text-ov">$82.46</td>
										<td class="text-ov">07111111111</td>
									
									<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">Pending</span></td>
										
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div> -->

				<!-- test -->
				
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive">
							<table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black" id="example5">
								<thead>
									<tr>
								
										<th>Order ID</th>
										<th>Date</th>
										<th>Restaurant</th>
										<th>Address</th>
										<th>Quantity</th>
										<th>Amount</th>
										<th>Mobile No.</th>
										<th>Status Order</th>
										
									</tr>
								</thead>


								<tbody>
								@foreach($orders as $order)
									<tr>
									
										<td>{{ $order->orderid }}</td>
										<td class="wspace-no">{{ $order->date }}</td>
										<td>{{ $order->restaurant }}</td>
										<td class="text-ov">{{ $order->address }}</td>
										<td class="text-ov">{{ $order->quantity }}</td> 
										<td class="text-ov">Rs. {{ $order->amount }}</td>
										<td class="text-ov">{{ $order->mobile_no }}</td>
									
									<td><span class="btn {{ $order->status === 'pending' ? 'bgl-danger text-danger' : 
												($order->status === 'processing' ? 'bgl-warning text-warning' : 'bgl-success text-success') }} 
												btn-rounded btn-sm">{{ ucfirst($order->status) }}</span></td>
										
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
	
				
            </div>

@endsection