@extends('layouts.restapplayout')
@section('title','CampusEats - Profile')
@section('content')

<div class="container-fluid">
				
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">App</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
					</ol>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>

                                <div class="profile-info">
                              
									<div class="profile-photo">
                                        

                                    <img src="{{ asset('storage/'.$user->image) }}" class="img-fluid rounded-circle" alt="Restaurant Image">

									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">{{$user['name']}}</h4>
											
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{$user['email']}}</h4>
											<p>Email</p>
										</div>
										
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

				<div class="row">
                   

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="profile#about-me" data-bs-toggle="tab" class="nav-link active show">About Me</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            									                                           
											
											<div id="about-me" class="tab-pane fade active show">
                                                
                                                
                                               
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Restaurant Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{$user['name']}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{$user['email']}}</span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Location <span class="pull-end">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>{{$user['address']}}</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                           
											
                                        </div>
                                    </div>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection