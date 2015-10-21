@extends('master.master')
@section('title', 'Gallery')
@section('script')
<link rel="stylesheet" type="text/css" href="{!!asset('/css/gallery.css')!!}">
@section('content')

    <div class="container">

        <h2>BARD IMAGES</h2>
		
            <div class="row">

                    <div class="col-md-5">
                        <div class="gallery_gellary">
                            <div class=" gallery_image">
                                
								<img src="https://lh3.googleusercontent.com/-92GXbanSCQ4/ViTxfa5p4kI/AAAAAAAAACg/iihpN41AM-0/s144-Ic42/bard1.jpg"  />
						
                            </div>
                             
                        </div>
					</div>
					
                    <div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-QmmWx--CHic/ViTxfNpK6lI/AAAAAAAAACU/t8Zfenp_g4w/s144-Ic42/bard2.jpg"/>
                            </div>
                             
                        </div>
                    </div>
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								
								<img src="https://lh3.googleusercontent.com/-bldLDRp36FE/ViTxfZVEFBI/AAAAAAAAACk/UkwmRP1r5YI/s144-Ic42/bard3.jpg"  />
							</div>
                             
                        </div>
                    </div>
					
					<div class="col-md-5">
						<div class="gallery_gellary">
                            <div class=" gallery_image">
								
								<img src="https://lh3.googleusercontent.com/-dGQaYngzNc8/ViTxf83pocI/AAAAAAAAACw/bHfOmfCaVsw/s144-Ic42/bard4.jpg" />
							</div>
                             
                        </div>
                    </div>

            </div>


    </div>

@endsection