
          
     @extends('layouts.main')
     @section('css')
         
     @endsection
     @section('content')               
    <!---login---->
    <section class="login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2>Login</h2>
                </div>
                <div class="col-12 login-form">
                    <div class="row">
                        <div class="row justify-content-center">
                            <div class="col-lg-11  mb-5">
                                <div class="row g-3">
                                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="row g-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                    <div id="emailHelp" class="form-text">Forget Password</div>
                                </div>
                                <button type="submit" class="Btn">login</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    </section>
    <!----footer section--->
    @extends('layouts.main')
@section('css')
    
@endsection
@section('content')