@extends('frontend.master')


@section('title')

KBR- Register Here

@stop


@section('content')

<section class="pt-100 pb-100 bg-gray">
    <div class="container">
        <div class="row ">

            <div class="col-lg-8 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                <h2 class="mb-4">Register Here</h2>
                <form action="#" method="post" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Customer Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}"   placeholder="Enter Your Name">
                            @error('name') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror

                        </div>
                        <div class="col-md-6">
                            <label for="image">Customer Photo</label>
                            <input type="file" class="form-control" id="image"  name="image" value="{{old('name')}}" >


                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="name" email="{{old('email')}}"  placeholder="Enter email">
                            @error('email') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror

                          </div>

                          <div class="col-md-12">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control  @error('dob') is-invalid @enderror" id="dob"name="dob" value="{{old('dob')}}"  placeholder=" ">
                            @error('dob') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror

                          </div>

                          <div class="col-md-12">
                            <label for="dl">Driving Lisence or Temporary DL No</label>
                            <input type="text" class="form-control  @error('dl') is-invalid @enderror" id="dl" name="dl" value="{{old('dl')}}"  placeholder="Enter your DL number">
                            @error('dl') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror

                          </div>

                          <div class="col-md-12">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" value="{{old('contact')}}"  placeholder="Enter your contact">
                            @error('name') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror

                          </div>

                          <div class="col-md-12">
                            <label for="address">Address</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" name="name" value="{{old('address')}}"  placeholder="Enter your address">
                            @error('name') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror

                          </div>
                          <button class="btn btn-danger"> Create</button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



@stop
