@extends('master.master')
@section('title', 'Gallery')
@section('script')
<link rel="stylesheet" type="text/css" href="{!!asset('/css/gallery.css')!!}">
@section('content')

    <div class="container">

        <h2>STUDY TOUR IMAGES</h2>
		
            <div class="row">

                    <div class="col-md-5">
                        <div class="gallery_gellary">
                            <div class=" gallery_image">
							<img src="https://lh3.googleusercontent.com/-_PLMkO_J3xA/ViTxjXNoYvI/AAAAAAAAAD8/lZjUDbrJo7I/s800-Ic42/studytour.jpg" />
                            </div>
                             
                        </div>
					</div>
					
                    <div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
							<img src="https://lh3.googleusercontent.com/-Rb0zGMiWyjA/ViTxkKeDELI/AAAAAAAAAEM/mZSFOp8pTio/s800-Ic42/studytour2.jpg" />
                            </div>
                             
                        </div>
                    </div>
					
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
							<img src="https://lh3.googleusercontent.com/-83lF3mdVaWw/ViTxkdSKDtI/AAAAAAAAAEY/E_p46chYxsE/s800-Ic42/studytour3.jpg"   />
                            </div>
                             
                        </div>
                    </div>
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								
								<img src="https://lh3.googleusercontent.com/-X4UcIkK_4FU/ViTxknIgSCI/AAAAAAAAAEc/x2twEzNI2-w/s144-Ic42/studytour4.jpg" />
                            </div>
                             
                        </div>
                    </div>
            </div>


    </div>

@endsection