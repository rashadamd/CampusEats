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
						<!-- <div class="input-group search-area">
							<input type="text" class="form-control" placeholder="Search here......">
							<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
						</div> -->
					</div>
						
				</div>
				<div class="row">
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
									
									<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">Pending</span></td>
										
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
            </div>

@endsection