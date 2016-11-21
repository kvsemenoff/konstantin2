<section class="ah-slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ah-sbox1" id="ah-sbox1">
					<div class="item">
						<div>
							<div class="ab-img-box">
								<img  src="img/ab-slide-1-2.jpg" alt="">
							</div>
							<div class="slidetextbox-outer">
								<div class="slidetextbox">
									<span class="slidetextbox-span1 slidetextbox-span1_style">
										Immobilienscouting für bisher am Markt<br> 
										unbekannte Potentialimmobilien ist das<br>  
										Spezialgebiet von Konstantin Wettig.
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div>
							<div class="ab-img-box">
								<img  src="img/ab-slide-2-2.jpg" alt="">
							</div>
							<div class="slidetextbox-outer">
								<div class="slidetextbox slidetextbox-2">
									<span class="slidetextbox-span1 slidetextbox-span2">
										Personifizierte Immobilienprofessionalität<br> 
										verbunden mit einem umfassenden,<br> 
										persönlichen Netzwerk machen Konstantin<br> 
										Wettig zu einem ausgewiesenen Spezialisten<br>
										des deutschen Immobilienmarktes mit dem<br>
										Schwerpunkt auf München.<br>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div>
							<div class="ab-img-box">
								<img  src="img/ab-slide-3-2.jpg" alt="">
							</div>
							<div class="slidetextbox-outer">
								<div class="slidetextbox  slidetextbox-3">
									<span class="slidetextbox-span1 slidetextbox-span2">
										Das diskrete Vernetzen von Informations<span class="da-show-hide">-<br> </span>vorsprüngen im 
										Immobilienbereich stellt den<br> 
										Geschäftspartnern der KW Real
										Estate einen<br> besonderen Nutzen 
										in Aussicht.
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<script>
	var owl = $("#ah-sbox1");
	owl.on( 'initialized.owl.carousel', function(e) {
		// alert(e.item.index);
		$('.az-arrowright').html('<i class="fa fa-angle-right" aria-hidden="true"></i>')
        $('.az-arrowleft').html('<i class="fa fa-angle-left" aria-hidden="true"></i>')
        if(e.page.index == 1 || e.page.index == 2){
        	$('.owl-dot').addClass('white-dot');
        	$('.az-arrowleft').addClass('white-left');
        	$('.az-arrowright').addClass('white-right');
        }
    	else if(e.page.index == 0){
    		$('.owl-dot').removeClass('white-dot');
    		$('.az-arrowleft').removeClass('white-left');
        	$('.az-arrowright').removeClass('white-right');
    	}
    });
    owl.on( 'translated.owl.carousel', function(e) {
		// alert(e.page.index);
        if(e.page.index == 1 || e.page.index == 2){
        	$('.owl-dot').addClass('white-dot');
        	$('.az-arrowleft').addClass('white-left');
        	$('.az-arrowright').addClass('white-right');
        }
    	else if(e.page.index == 0){
    		$('.owl-dot').removeClass('white-dot');
    		$('.az-arrowleft').removeClass('white-left');
        	$('.az-arrowright').removeClass('white-right');
    	}
    });
	owl.owlCarousel({
		lazyLoad: true,
	    loop: true,
	    margin:0,
	    items: 1,
	    autoplay: true,
	    smartSpeed:500,
	    autoplayTimeout:7000,
	    nav: true,
	    navText:['<span class="az-arrowleft"></span>','<span class="az-arrowright"></span>']
	});
	

</script>




