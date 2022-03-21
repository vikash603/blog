

@extends('frontend.layout.app')
@section('content')



    <!-- Breadcrumb  -->
    <section style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{url('/')}}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="{{url('/')}}" class="breadcrumbs__url">News</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            World
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  -->


    <!-- Form contact -->
    <section class="wrap__contact-form" style="background-color: whitesmoke;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>contact us</h5>
                    <form method="post" class="contactForm" action="{{url('/')}}/contact" enctype="multipart/form-data">
                    	@csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your name <span class="text-danger">@error('name'){{$message}} @enderror</span></label>
                                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                             <label>Your Email <span class="text-danger">@error('email'){{$message}} @enderror</span></label>

                                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                            <label>Your Phone Number <span class="text-danger">@error('phone'){{$message}} @enderror</span></label>

                                <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')}}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                             <label>Your Subject <span class="text-danger">@error('subject'){{$message}} @enderror</span></label>

                                <input type="text" class="form-control" name="subject" id="subject" value="{{old('subject')}}">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                             <label>Your Message <span class="text-danger">@error('message'){{$message}} @enderror</span></label>

                                <textarea class="form-control" rows="8" name="message" id="message" value="{{old('message')}}" ></textarea>
                            </div>

                            <div class="form-group float-right mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>



                    </div>
                </form>
                </div>


                <div class="col-md-4">
                    <h5>Info location</h5>
                    <div class="wrap__contact-form-office">
                        <ul class="list-unstyled">
                            <li>
                                <span>
                                    <i class="fa fa-home"></i>
                                </span>

                                Pvt is a hindi news channel based at broadcast patel nagar patna


                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:">(+91) 93046 58175</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:">info@indiabignew.in</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-globe"></i>
                                    <a href="#" target="_blank"> www.indiabignews.com</a>
                                </span>
                            </li>
                        </ul>

                        <div class="social__media">
                            <h5>find us</h5>
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white telegram">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form contact  -->



				


@endsection



@section('js')

<script>
$(".contactForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);

    var formData = new FormData(this);
    $.ajax({
            type: "POST",
            url: "{{url('/')}}/contact",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
           success: function(data)
           {
            $(".contactForm")[0].reset();
             swal("Success!", "Your request is successfully sent !!", "success");
           }
         });

    
});

</script>

@endsection

		