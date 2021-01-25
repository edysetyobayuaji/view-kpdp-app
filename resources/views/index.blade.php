
@extends('layouts.app_web')

@section('content')   
<main id="main"> 
	<div class="tp-banner-container">
		<div class="tp-banner" >
			<ul class="tp-revslider-mainul" style="visibility: visible; display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">	<!-- SLIDE  -->
				<!-- SLIDE  -->
								<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
					<!-- MAIN IMAGE -->
					<img src="{{url('public/web/images/slide/hrc.jpg')}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
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
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Hot Rolled Coil/Plate
					</div>

					<!-- LAYER NR. 2 -->
					<!--
					<div class="tp-caption whitedivider3px customin customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="800"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="4000"
						data-endspeed="500"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>
					
					
					<div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="30"
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
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">BRAND NEW FEATURES
					</div>
					
					<div class="tp-caption boldwide_small_white customin customout tp-resizeme"
						data-x="240"
						data-y="120"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>animate</strong>
					</div>
					


					<div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
						data-x="420"
						data-y="110"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>

					<div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
						data-x="460"
						data-y="120"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="6400"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">CHARACTERS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="160"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="7200"
						data-easing="Power3.easeInOut"
						data-splitin="words"
						data-splitout="words"
						data-elementdelay="0.12"
						data-endelementdelay="0.12"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">SINGLE WORDS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="200"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="8000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LINES
					</div>
					-->
					<!-- 
						LAYER NR. 9 
						data-x="460"
						data-y="250"
					-->
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
						style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Build the Nation with the Best Quality of Steel
					</div>


				</li>
								<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
					<!-- MAIN IMAGE -->
					<img src="{{url('public/web/images/slide/crc.jpg')}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
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
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Cold Rolled Coil/Sheet
					</div>

					<!-- LAYER NR. 2 -->
					<!--
					<div class="tp-caption whitedivider3px customin customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="800"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="4000"
						data-endspeed="500"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>
					
					
					<div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="30"
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
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">BRAND NEW FEATURES
					</div>
					
					<div class="tp-caption boldwide_small_white customin customout tp-resizeme"
						data-x="240"
						data-y="120"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>animate</strong>
					</div>
					


					<div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
						data-x="420"
						data-y="110"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>

					<div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
						data-x="460"
						data-y="120"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="6400"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">CHARACTERS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="160"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="7200"
						data-easing="Power3.easeInOut"
						data-splitin="words"
						data-splitout="words"
						data-elementdelay="0.12"
						data-endelementdelay="0.12"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">SINGLE WORDS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="200"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="8000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LINES
					</div>
					-->
					<!-- 
						LAYER NR. 9 
						data-x="460"
						data-y="250"
					-->
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
						style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">We Provide Steel for your specific needs
					</div>


				</li>
								<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
					<!-- MAIN IMAGE -->
					<img src="{{url('public/web/images/slide/wirerod.jpg')}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
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
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Wire Rod
					</div>

					<!-- LAYER NR. 2 -->
					<!--
					<div class="tp-caption whitedivider3px customin customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="800"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="4000"
						data-endspeed="500"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>
					
					
					<div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="30"
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
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">BRAND NEW FEATURES
					</div>
					
					<div class="tp-caption boldwide_small_white customin customout tp-resizeme"
						data-x="240"
						data-y="120"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>animate</strong>
					</div>
					


					<div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
						data-x="420"
						data-y="110"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>

					<div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
						data-x="460"
						data-y="120"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="6400"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">CHARACTERS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="160"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="7200"
						data-easing="Power3.easeInOut"
						data-splitin="words"
						data-splitout="words"
						data-elementdelay="0.12"
						data-endelementdelay="0.12"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">SINGLE WORDS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="200"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="8000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LINES
					</div>
					-->
					<!-- 
						LAYER NR. 9 
						data-x="460"
						data-y="250"
					-->
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
						style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Towards a better tomorrow
					</div>


				</li>
								<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
					<!-- MAIN IMAGE -->
					<img src="{{url('public/web/images/slide/downstream.jpg')}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
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
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Downstream Products
					</div>

					<!-- LAYER NR. 2 -->
					<!--
					<div class="tp-caption whitedivider3px customin customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="800"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="4000"
						data-endspeed="500"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>
					
					
					<div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="30"
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
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">BRAND NEW FEATURES
					</div>
					
					<div class="tp-caption boldwide_small_white customin customout tp-resizeme"
						data-x="240"
						data-y="120"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>animate</strong>
					</div>
					


					<div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
						data-x="420"
						data-y="110"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>

					<div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
						data-x="460"
						data-y="120"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="6400"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">CHARACTERS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="160"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="7200"
						data-easing="Power3.easeInOut"
						data-splitin="words"
						data-splitout="words"
						data-elementdelay="0.12"
						data-endelementdelay="0.12"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">SINGLE WORDS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="200"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="8000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LINES
					</div>
					-->
					<!-- 
						LAYER NR. 9 
						data-x="460"
						data-y="250"
					-->
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
						style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">We Innovate by Growing together with the Industry
					</div>


				</li>
								<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-delay="13000" >
					<!-- MAIN IMAGE -->
					<img src="{{url('public/web/images/slide/calibration.jpg')}}"  alt="newslide2014_1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
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
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Non Core &amp; Side Services 
					</div>

					<!-- LAYER NR. 2 -->
					<!--
					<div class="tp-caption whitedivider3px customin customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="700"
						data-start="800"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-end="4000"
						data-endspeed="500"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>
					
					
					<div class="tp-caption finewide_medium_white randomrotate customout tp-resizeme"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="30"
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
						style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">BRAND NEW FEATURES
					</div>
					
					<div class="tp-caption boldwide_small_white customin customout tp-resizeme"
						data-x="240"
						data-y="120"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><strong>animate</strong>
					</div>
					


					<div class="tp-caption whitedivider3px_vertical customin tp-resizeme"
						data-x="420"
						data-y="110"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="300"
						data-start="5500"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">&nbsp;
					</div>

					<div class="tp-caption finewide_small_white randomrotate customout tp-resizeme"
						data-x="460"
						data-y="120"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="6400"
						data-easing="Power3.easeInOut"
						data-splitin="chars"
						data-splitout="chars"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">CHARACTERS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="160"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="7200"
						data-easing="Power3.easeInOut"
						data-splitin="words"
						data-splitout="words"
						data-elementdelay="0.12"
						data-endelementdelay="0.12"
						data-endspeed="300"
						style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">SINGLE WORDS
					</div>

					<div class="tp-caption finewide_small_white customin customout tp-resizeme"
						data-x="460"
						data-y="200"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="500"
						data-start="8000"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.08"
						data-endelementdelay="0.08"
						data-endspeed="300"
						style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">LINES
					</div>
					-->
					<!-- 
						LAYER NR. 9 
						data-x="460"
						data-y="250"
					-->
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
						style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">We are constantly moving and maximizing our other side products and services
					</div>


				</li>
								
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
                                     
                                        Semangat Baru Krakatau Steel
                                                                        
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a class="img-box img-box-caption btn-video lightbox" href="https://www.youtube.com/watch?v=ZYZOFRA7NhI" data-lightbox-anima="fade-top">
                                    <img src="{{url('public/web/images/ksuntung.jpg')}}" alt="">
                                    <span>
                                     
                                        Krakatau Steel Untung
                                                                        
                                    </span>
                                </a>
                            </li>
                                                </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>We Explore to Empower</h2>
                            <p>
                             
                                Tentang Kami
                                                        </p>
                        </div>
                        <p>
                             
                                PT Krakatau Steel (Persero) Tbk tidak lagi hadir hanya sebagai perusahaan baja, tetapi sebagai partner yang memiliki kemampuan dalam memberikan dorongan kekuatan tambahan bagi para partner, melalui setiap asset yang dimiliki oleh Krakatau Steel  (baik dari kapabilitas SDM maupun infrastruktur)
                                                    </p>
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color" id="section">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                             
                            <h2>Berita Krakatau Steel</h2>
                            <p>Berita</p>
                                                        
                        </div>
                    </div>
                    <div class="col-lg-6 align-right align-left-md">
                        <hr class="space-sm hidden-md" />
                         
                        <a href="#" class="btn-text active">Semua Berita</a>
                                                
                    </div>
                </div>
                <hr class="space" />
                <div class="grid-list" data-columns="3" data-columns-md="2" data-columns-sm="1" data-anima="fade-bottom" data-time="1000">
                    <div class="grid-box">
                                                    
                            
                            <div class="grid-item">
                                <div class="cnt-box cnt-box-blog-top" data-href="viewnews/2410.html">
                                    <a href="#" class="img-box">
                                        <div class="blog-date">
                                            <span>29</span>
                                            <span>AUG 2020</span>
                                        </div>
                                        <img src="{{url('public/web/images/news/semangatbaru.jpg')}}" alt="" />
                                    </a>
                                    <div class="caption">
                                        <h2>Ganti Logo, Krakatau Steel Mengusung Semangat Baru Untuk Kinerja Lebih ...</h2>
                                        <ul class="icon-list icon-list-horizontal">
                                            <li><i class="icon-bookmark"></i><a href="#">Krakatau Steel</a></li>
                                            <li class="icon-links">
                                                <a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
                                                <a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
                                                <a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                        <p>
                                            Jakarta, (28/8) – Memasuki usia 50 tahun, Krakatau Steel memberikan semangat baru dalam meningkatkan kinerja positif. Setelah sekian lama menggunakan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                                                    
                            
                            <div class="grid-item">
                                <div class="cnt-box cnt-box-blog-top" data-href="viewnews/2409.html">
                                    <a href="#" class="img-box">
                                        <div class="blog-date">
                                            <span>27</span>
                                            <span>AUG 2020</span>
                                        </div>
                                        <img src="{{url('public/web/images/news/newsbaru-01.jpg')}}" alt="" />
                                    </a>
                                    <div class="caption">
                                        <h2>Anak Perusahaan Group Krakatau Steel Raih Laba Positif ...</h2>
                                        <ul class="icon-list icon-list-horizontal">
                                            <li><i class="icon-bookmark"></i><a href="#">Krakatau Steel</a></li>
                                            <li class="icon-links">
                                                <a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
                                                <a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
                                                <a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                        <p>
                                            Jakarta (26/8) – Selain induk perusahaan yang tetap berusaha mempertahankan kinerja positif, Anak Perusahaan Krakatau Steel menunjukkan kontribusi menggembirakan dengan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                                                    
                            
                            <div class="grid-item">
                                <div class="cnt-box cnt-box-blog-top" data-href="viewnews/2408.html">
                                    <a href="#" class="img-box">
                                        <div class="blog-date">
                                            <span>06</span>
                                            <span>AUG 2020</span>
                                        </div>
                                        <img src="{{url('public/web/images/news/news1-01.jpg')}}" alt="" />
                                    </a>
                                    <div class="caption">
                                        <h2>Asosiasi Industri Besi Dan Baja Nasional Resmi Luncurkan Situs Web ...</h2>
                                        <ul class="icon-list icon-list-horizontal">
                                            <li><i class="icon-bookmark"></i><a href="#">Krakatau Steel</a></li>
                                            <li class="icon-links">
                                                <a href="#" data-social="share-fadebook" data-social-url=""><i class="icon-facebook"></i></a>
                                                <a href="#" data-social="share-twitter" data-social-url=""><i class="icon-twitter"></i></a>
                                                <a href="#" data-social="share-linkedin" data-social-url=""><i class="icon-linkedin"></i></a>
                                            </li>
                                        </ul>
                                        <p>
                                             Jakarta (05/08) â€“ Asosiasi Industri Besi dan Baja Nasional/The Indonesian Iron and Steel Industry Association (IISIA) resmi meluncurkan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                                                
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section-base section-color" id="section">
            <div class="container">
                <div class="row" data-anima="fade-bottom" data-time="1000">
                    <div class="col-lg-6">
                        <div class="title">
                             
                            <h2>Pengumuman Krakatau Steel</h2>
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