@extends('layouts.restapplayout')
@section('title','CampusEats - Grid')
@section('content')

<div class="container-fluid">
				<!-- <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Blank</a></li>
					</ol>
                </div> -->
				
                <!-- <div class="row">

                
                    @foreach ($menus as $menu)
                        <div class="col-xl-3 col-lg-6 col-sm-6" style="margin: 10px;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="new-arrival-product">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ $menu->image ? asset('storage/' . $menu->image) : asset('images/default-product.jpg') }}" alt="{{ $menu->name }}">
                                        </div>
                                        <div class="new-arrival-content text-center mt-3">
                                            <h4>{{ $menu->name }}</h4>
                                            <ul class="star-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                                <li><i class="fa fa-star-half-empty"></i></li>
                                            </ul>
                                            <span class="price">${{ number_format($menu->price, 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div> -->

                <div class="row">
                    @foreach ($menus as $menu)
                        <div class="col-xl-3 col-lg-6 col-sm-6" style="margin: 10px;">
                            <div class="card">
                                <div class="card-body">
                                    <div class="new-arrival-product">
                                        <div class="new-arrivals-img-contnent">
                                            <img class="img-fluid" src="{{ $menu->image ? asset('storage/' . $menu->image) : asset('images/default-product.jpg') }}" alt="{{ $menu->name }}">
                                        </div>
                                        <div class="new-arrival-content text-center mt-3">
                                            <h4>{{ $menu->name }}</h4>
                                            
                                            <span class="price">${{ number_format($menu->price, 2) }}</span>
                                        </div>
                                    </div>
                                    <!-- Delete Button -->
                                    <form action="{{ route('menu.delete', $menu->menuid) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-block mt-3">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

</div>

@endsection