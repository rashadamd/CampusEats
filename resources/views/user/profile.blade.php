@extends('layouts.userproapplayout')
@section('title','CampusEats - Profile')
@section('content')

<div class="container-fluid">
				
				
				
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
										<img src="user/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">Mitchell C. Shay</h4>
											<p>UX / UI Designer</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">info@example.com</h4>
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
                                            <li class="nav-item"><a href="userprofile#about-me" data-bs-toggle="tab" class="nav-link">About Me</a>
                                            </li>
                                            <li class="nav-item"><a href="userprofile#profile-settings" data-bs-toggle="tab" class="nav-link">Setting</a>
                                            </li>
                                        </ul>



                                        <div class="tab-content">
                                            

                                            <div id="about-me" class="tab-pane fade active show">
                                              
												<BR></BR>

                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Mitchell C.Shay</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>example@examplel.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Availability <span class="pull-end">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Full Time (Free Lancer)</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Age <span class="pull-end">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>27</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Location <span class="pull-end">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Rosemont Avenue Melbourne,
                                                                Florida</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Year Experience <span class="pull-end">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>07 Year Experiences</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Account Setting</h4>
                                                        <form>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" placeholder="Email" class="form-control">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Password</label>
                                                                    <input type="password" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Address</label>
                                                                <input type="text" placeholder="1234 Main St" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Address 2</label>
                                                                <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                                                            </div>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">City</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="mb-3 col-md-4">
                                                                    <label class="form-label">State</label>
                                                                    <select class="form-control default-select wide" id="inputState">
                                                                        <option selected="">Choose...</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 col-md-2">
                                                                    <label class="form-label">Zip</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="form-check custom-checkbox">
																	<input type="checkbox" class="form-check-input" id="gridCheck">
																	<label class="form-check-label form-label" for="gridCheck"> Check me out</label>
																</div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Sign
                                                                in</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
													<button type="button" class="btn btn-primary">Reply</button>
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