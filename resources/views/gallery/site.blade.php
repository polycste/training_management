@extends('master.master')
@section('title', 'Gallery')
@section('script')
<link rel="stylesheet" type="text/css" href="{!!asset('/css/gallery.css')!!}">
@section('content')



    <div class="container">

        <h2>SITE SEEING IMAGES</h2>
		
            <div class="row">

                    <div class="col-md-5">
                        <div class="gallery_gellary">
                            <div class=" gallery_image">
                                
								<img src="https://lh3.googleusercontent.com/-CYfBkMJ-n3M/ViTxiVZVIlI/AAAAAAAAADo/LV9Btaqku-M/s144-Ic42/site2.jpg"  />
                            </div>
                             
                        </div>
					</div>
					
                    <div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-zjrGtxN11Ok/ViTxi9koCcI/AAAAAAAAAD0/SZuUf9XL4QY/s144-Ic42/site3.jpg"  />
							</div>
                             
                        </div>
                    </div>
					
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-UUT8Zm_Tokw/ViTxiDNzfyI/AAAAAAAAADc/EfQzbdcJB9c/s144-Ic42/site.jpg" />
                            </div>
                             
                        </div>
                    </div>
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-n3S0vEndltY/ViTxibCyRtI/AAAAAAAAAE4/VGLo1Qufsy8/s800-Ic42/site1.jpg" />
                            </div>
                             
                        </div>
                    </div>
            </div>


    </div>

@endsection