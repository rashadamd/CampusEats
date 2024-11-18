@extends('layouts.restapplayout')
@section('title','CampusEats - Menu')
@section('content')




<div class="container-fluid">
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">Add Menu</h2>
					<div>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
						</ol>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xl-12">
                        <form class="checkout-form" action="{{ route('menupost') }}" method="POST" enctype="multipart/form-data">
							@csrf
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
								@if($errors->has('image'))
									<span class="error" style="color: red">
										<strong>{{$errors->first('image')}}</strong>
									</span>
								@endif
                            </div>
							
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" placeholder="Enter Menu Name" class="form-control" name="name">
								@if($errors->has('name'))
									<span class="error" style="color: red">
										<strong>{{$errors->first('name')}}</strong>
									</span>
								@endif
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" placeholder="Enter Price" class="form-control" name="price">
								@if($errors->has('price'))
									<span class="error" style="color: red">
										<strong>{{$errors->first('price')}}</strong>
									</span>
								@endif
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Add Menu</button>
                        </form>
					</div>
				</div>
				
</div>

@endsection