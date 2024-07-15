@extends('layouts.restapplayout')
@section('title','CampusEats - Grid')
@section('content')

<div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Blank</a></li>
					</ol>
                </div>
				
                <div class="row">
                    
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-arrival-product">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="images/product/1.jpg" alt="">
                                    </div>
                                    <div class="new-arrival-content text-center mt-3">
                                        <h4><a href="">Margherita</a></h4>
                                        <ul class="star-rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <span class="price">$761.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
</div>

@endsection