
@extends('layouts.app_web')

@section('content')   
<main id="main"> 
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul class="tp-revslider-mainul" style="visibility: visible; display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">	<!-- SLIDE  -->
			@foreach(barner() as $barner)
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
					<img src="{{link_barner($barner['gambar'])}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<div class="tp-caption finewide_large_white customin customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="-40"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="500"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-end="4000"
						data-endspeed="500"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">{{$barner['name']}}
					</div>

					
					<div class="tp-caption finewide_verysmall_white_mw customin customout tp-resizeme"
						
						data-x="40"
						data-y="120"
						data-customin="x:0;y:50;z:0;rotationX:-120;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="900"
						data-start="5000"
						data-easing="Power3.easeInOut"
						data-splitin="lines"
						data-splitout="lines"
						data-elementdelay="0.2"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">{!!$barner['isi']!!}
					</div>


				</li>
			@endforeach	
								
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
	
	<!-- END REVOLUTION SLIDER -->

        
        <section class="section-base section-overflow-top" id="section">
            <div class="container">
                
                <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <ul class="slider" data-options="arrows:true,nav:false">
                            
                            <li>
                                <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=6TR9EZzpm7o" data-lightbox-anima="fade-top">
                                    <img src="{{url('public/web/images/newlogo.jpg')}}" alt="">
                                    <span>
                                     
                                        Semangat Baru {{nama_perusahaan()}}
                                                                        
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=ZYZOFRA7NhI" data-lightbox-anima="fade-top">
                                    <img src="{{url('public/web/images/ksuntung.jpg')}}" alt="">
                                    <span>
                                     
                                        {{nama_perusahaan()}} Untung
                                                                        
                                    </span>
                                </a>
                            </li>
                                                </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <p>Tentang Kami</p>
                        </div>
                        <p>{!!tentang_kami()['name']!!}</p>
                        
                    </div>
                </div>
            </div>
        </section>

        @include('berita')
        
        <section class="section-base section-color" id="section">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                             
                            <h2>Pengumuman {{nama_perusahaan()}}</h2>
                            	<p>Pengumuman</p>
                            </div>
                    </div>
                    <div class="col-lg-6 align-right align-left-md">
                        <hr class="space-sm hidden-md" />
                         <a href="#" class="btn-text active">Semua Pengumuman</a>
                    </div>
                </div>
                <hr class="space" />
                <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                    <div class="grid-box">
                                                                                    <div class="grid-item">
                                    <div class="cnt-box cnt-box-info boxed" data-href="viewnews/2413.html">
                                        <div class="caption">
                                        <h2>Rekrutmen Rekanan Baru Periode Ii...</h2>
                                            <div class="cnt-info">
                                                <div><span>Date</span><span>22 OCT 2020</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                                                                    <div class="grid-item">
                                    <div class="cnt-box cnt-box-info boxed" data-href="viewnews/2412.html">
                                        <div class="caption">
                                        <h2>Pengumuman Pengadaan Ulang...</h2>
                                            <div class="cnt-info">
                                                <div><span>Date</span><span>05 OCT 2020</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                                                                    <div class="grid-item">
                                    <div class="cnt-box cnt-box-info boxed" data-href="viewnews/2411.html">
                                        <div class="caption">
                                        <h2>Pengumuman Pengadaan...</h2>
                                            <div class="cnt-info">
                                                <div><span>Date</span><span>01 SEP 2020</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                                
                    </div>
                </div>
            </div>
        </section>

        <section class="section-base" id="section">
            <div class="container">
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <img src="{{url('public/web/images/calibration-pic-blue-005.jpg')}}" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Callibration Service</h2>
                            
                        </div>
                        <p>
                         
                            Inilah salah satu inovasi kami!
                            Hubungi kami untuk mendapatkan layanan pengukuran (kalibrasi) dan sewa beban yang akurat.
                                                </p>
                        <a href="https://www.krakataucalibration.com/" target="_blank" class="btn btn-xs">Learn more</a>
                    </div>
                </div>
                <hr class="space-sm" />
                <hr class="space visible-md" />
                <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Krasmart</h2>
                           
                        </div>
                        <p>
                         
                            Hadir lebih dekat dengan layanan e-commerce kami.  Jelajahi produk dan layanan lainnya serta dapatkan penawaran terbaik dari kami!
                                                </p>
                        <a href="https://www.krasmart.com/" target="_blank" class="btn btn-border btn-xs">Learn more</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{url('public/web/images/krasmart.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </section>
      <!--
        <section class="section-base">
            <div class="container">
                <table class="table table-grid table-border table-logos table-full-sm" data-anima="fade-bottom" data-time="1000">
                    <tbody>
                        <tr>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                            <td><img src="http://via.placeholder.com/374x103" alt="" /></td>
                        </tr>
                    </tbody>
                </table>      
            </div>
        </section>
     -->
</main>
@endsection   