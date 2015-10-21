@extends('master.master')
@section('title', 'Gallery')
@section('script')
<link rel="stylesheet" type="text/css" href="{!!asset('/css/gallery.css')!!}">
@section('content')

    <div class="container">

        <h2>TRAINING GALLERY</h2>
		
            <div class="row">

                    <div class="col-md-5">
                        <div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-fLNLch93o-8/ViTxlPG0idI/AAAAAAAAAEo/Phf_Yoo1pDI/s144-Ic42/training.gif"  />
                            </div>
                             
                        </div>
					</div>
					
                    <div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-hqMaisexaSA/ViTxlYlsL1I/AAAAAAAAAEs/A7pwMeYzRG0/s144-Ic42/training1.jpg" />
							</div>
                             
                        </div>
                    </div>
					
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-5KRp0g-J-nY/ViTxlYfE4DI/AAAAAAAAAEw/mE3R6zS6CoU/s144-Ic42/training2.jpg" />
							</div>
                             
                        </div>
                    </div>
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-_8i8AlJJ7uw/ViTxmCV7RGI/AAAAAAAAAE0/u6KX9sk-zPg/s144-Ic42/training3.jpg" />
							</div>
                             
                        </div>
                    </div>
            </div>


    </div>

@endsection