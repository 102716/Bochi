@extends('layouts.app')

@section('content')

<section class="section-padding" id="booking">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <div class="booking-form">

                    <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>

                    <form role="form" action="#booking" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Your Email" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="col-lg-6 col-12">
                                <!-- <input type="text" name="name" id="name" class="form-control" placeholder="Select Service" required> -->
                                  <select class="form-control" name="select" id="">
                                    <option value="volvo">Select Service</option>
                                    <option value="saab">Radiologist</option>
                                    <option value="opel">Therapist</option>
                                    <option value="audi">Doctor</option>
                                  </select>  
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="date" name="date" id="date" value="" class="form-control">

                            </div>

                            <div class="col-12">
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Additional Message"></textarea>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                <button type="submit" class="form-control" id="submit-button">Book Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
