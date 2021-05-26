@extends('frontend.master')

@section('content')

					<section class="pt-30 pb-100 bg-gray">
						<div class="container pr-30 pl-30 pb-30 bg-white">
							<div class="row h-100">
								<div class="col-lg-5 my-auto">
									<div class="product-gallery">
										<div class="product-image">
											<img src="{{ asset('frontend/assets/images/product-pic.jpg') }}" alt="Image">

										</div>

									</div>
								</div>
								<div class="col-lg-6 my-auto">
									<h1> Bike Brand & Model Name</h1>

									<p class="price-single mb-40">BDT. 800 (Rent)</p>

									<form class="cart mt-50 mb-20" action="#" method="post">

										<button type="submit" name="add-to-cart" value="94" class="button"> Book Now</button>
									</form>

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

                                        <table>
											<tbody>
												<tr>
													<th> Bike Image</th>
													<td>
														<p>4 Wheel Drive, Hatchback, Wagon</p>
													</td>
												</tr>
												<tr>
													<th> Bike Brand </th>
													<td>
														<p>Lexus, Volksvagen</p>
													</td>
												</tr>
												<tr>
													<th>Model </th>
													<td>
														<p>Custom Wheels</p>
													</td>
												</tr>
												<tr>
													<th>Year</th>
													<td>
														<p>Black, Red</p>
													</td>
												</tr>

                                                <tr>
													<th>Color</th>
													<td>
														<p>Black, Red</p>
													</td>
												</tr>

                                                <tr>
													<th>CC</th>
													<td>
														<p>Black, Red</p>
													</td>
												</tr>

                                                <tr>
													<th>Max Powe (power in db table)</th>
													<td>
														<p>Black, Red</p>
													</td>
												</tr>
                                                <tr>
													<th>Torque</th>
													<td>
														<p>Black, Red</p>
													</td>
												</tr>

                                                <tr>
													<th>Run KM (odo in DB)</th>
													<td>
														<p> 6900 Km</p>
													</td>
												</tr>

                                                <tr>
													<th>Description</th>
													<td>
														<p>  Ayon Is A Bad boy</p>
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
