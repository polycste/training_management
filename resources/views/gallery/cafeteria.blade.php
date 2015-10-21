@extends('master.master')
@section('title', 'Gallery')
@section('script')
<link rel="stylesheet" type="text/css" href="{!!asset('/css/gallery.css')!!}">
@section('content')

    <div class="container">

        <h2>CAFETERIA IMAGES </h2>
		
            <div class="row">

                    <div class="col-md-5 col-md-5">
                        <div class="gallery_gellary">
                            <div class=" gallery_image">
								<img src="https://lh3.googleusercontent.com/-ZlJytbRsKp8/ViTrBMSFxPI/AAAAAAAAABw/77OHXyZkRug/s144-Ic42/cafitaria.jpg" />
							</div>
                             
                        </div>
					</div>
					
                    <div class="col-md-5 col-md-5">
						<div class="gallery_gellary">
                            <div class="gallery_image">
								<img src="https://lh3.googleusercontent.com/-uE-onpiUHjo/ViTxgCuB77I/AAAAAAAAACs/YraaatpkUow/s144-Ic42/cafitaria1.jpg" />
							</div>
                             
                        </div>
                    </div>

            </div>


    </div>

@endsection