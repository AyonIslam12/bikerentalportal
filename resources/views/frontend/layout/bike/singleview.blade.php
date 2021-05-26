@extends('frontend.master')

@section('content')

					<section class="pt-30 pb-100 bg-gray">
						<div class="container pr-30 pl-30 pb-30 bg-white">
							<div class="row h-100">
								<div class="col-lg-3 my-auto">
									<div class="product-gallery">
										<div class="">
											<img class="img-fluid" style="width: 300px;"  src="{{ asset('uploads/bikes/'.$bike->image) }}" alt="Image">

										</div>

									</div>
                                    <h3 class="mt-3"> {{ $bike->brand }} & {{ $bike->model }}</h3>

									<p class=" mb-40">
                                          @if($bike->discount_offer <= 0)
                                         Price/Day:
                                            <span> {{ $bike->price_per_day }}.TK</span>

                                        @else
                                       Price/Day :
                                        <span> <span><del class="text-danger">{{ $bike->price_per_day }}.00TK</del></span> {{ $bike->price_per_day - $bike->discount_offer }}.00 Tk</span>

                                        @endif</p>
								</div>



								{{-- 	<form class="cart mt-50 mb-20" action="#" method="post">

										<button type="submit" name="add-to-cart" value="94" class="button"> Book Now</button>
									</form> --}}


                                <div class="col-lg-9 my-auto border mt-3">
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Please Rent From Here</h3>
                                        <form action="#" method="post" class="comment-form row">
                                        <div class="col-lg-6 form-group">
                                            <label for="">Form Date</label>
                                        <input id="author" name="author" type="date" value={{ date("Y-m-d") }} min={{ date("Y-m-d") }} class="form-control" aria-required="true">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label for="">To Date</label>
                                            <input id="author" name="author" type="date" value={{ date("Y-m-d") }} class="form-control" aria-required="true">
                                        </div>
                                        <div class="col-xl-12">
                                        <textarea id="comment" name="comment" placeholder="Type your comment...." aria-required="true"></textarea>
                                        </div>
                                        <div class="custom-control custom-checkbox mx-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                            <label class="custom-control-label" for="customCheck">Priamry Medical Insurance</label>
                                          </div>
                                        <div class="col-lg-12 text-right">
                                        <button type="submit" class="my-2">Book Now</button>
                                        </div>
                                        </form>
                                        </div>
                                </div>
							</div>
						</div>
						<div class="container bg-white pt-30 pb-30 pr-30 pl-30 mt-5">
							<div class="tabs-wrapper">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#description" role="tab" aria-selected="true">Bike Description</a>

								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">

                                        <table class="table">
											<tbody>

												<tr>
													<th> Bike Brand </th>
													<td>
														<p>{{ ucfirst($bike->brand) }}</p>
													</td>
												</tr>
												<tr>
													<th>Model </th>
													<td>
														<p>{{ ucfirst($bike->model) }}</p>
													</td>
												</tr>
												<tr>
													<th>Year</th>
													<td>
														<p>{{ date("Y-m-d",strtotime($bike->year)) }}</p>
													</td>
												</tr>

                                                <tr>
													<th>Color</th>
													<td>
														<p>{{ $bike->color }}</p>
													</td>
												</tr>

                                                <tr>
													<th>CC</th>
													<td>
														<p>{{$bike->cc }}</p>
													</td>
												</tr>

                                                <tr>
													<th>Max Powe (power in db table)</th>
													<td>
														<p>{{$bike->power}}</p>
													</td>
												</tr>
                                                <tr>
													<th>Torque</th>
													<td>
														<p>{{$bike->torque }}</p>
													</td>
												</tr>

                                                <tr>
													<th>Run KM (odo in DB)</th>
													<td>
														<p>{{ $bike->odo }}</p>
													</td>
												</tr>

                                                <tr>
													<th>Description</th>
													<td>
														<p>  {{ $bike->description }}</p>
													</td>
												</tr>


											</tbody>
										</table>

                                    </div>

								</div>
							</div>
						</div>

											</section>


@stop
