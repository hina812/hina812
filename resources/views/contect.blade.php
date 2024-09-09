
@extends('layouts.main')
@section('css')
    
@endsection
@section('content')    

    <!-----Contect section----->
    <section class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2>Get in Touch</h2>
                </div>
                <div class="col-12 form">
                    <div class="row">
                        <div class="col-md-8 mb-5">
                            <div class="row g-3">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" class="form-control" placeholder="Your email*" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="form-control" placeholder="Your Address" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="number" class="form-control" placeholder="Your number" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <textarea class="form-control">Your Message....</textarea>
                                </div>
                                <div class="col-12 mb-4">
                                    <button type="submit" class="btn Btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="content-box ms-sm-5">
                                <ul class="info-box clearfix">
                                    <li>
                                        <h4>we had love to hear from you!</h4>
                                        <i class="fas fa-phone-alt"></i>
                                        <p>Any Questions? Call us</p>
                                        <div>
                                            <a href="#">(+92) 2567 1234</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope-open"></i>
                                        <p>Any Questions? Email us</p>
                                        <div>
                                            <a href="#">info@foodpoint.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----footer section--->
    @extends('layouts.main')
@section('css')
    
@endsection
@section('content')
   