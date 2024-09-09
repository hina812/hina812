
@extends('layouts.main')
@section('css')
    
@endsection
@section('content')     
   
    <!-----Reservation section---->

    <section class="reservation">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2>Book Table</h2>
                    <p class="intro">Book Table come and Enjoy delicious Food</p>
                </div>
                <div class="col-8 form">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="row g-3">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" class="form-control" placeholder="Your email*" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="form-control" placeholder="Number of person" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="form-control" placeholder="Your number" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="time" class="form-control" placeholder="Whats time" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="date" class="form-control" placeholder="What is the date.." required>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="text-center pb-5">
                                        <button type="submit" class="btn Btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----footer section--->
    extends('layouts.main')
    @section('css')
        
    @endsection
    @section('content')