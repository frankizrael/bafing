<?php /* Template Name: contact */
set_query_var('ENTRY', 'contact');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="banner flex align-items-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="x-container titlePrincipal">
		<div class="title title--white ">
			<h1><?php the_title();?></h1>
		</div>		
	</div>
</section>
<section class="ss_banner">
	<div class="x-container">
		<div class="flex justify-content-between">
			<div class="left">
				<div class="content">
					<?php
					if ( have_posts() ) : ?>
					<?php
					// Start the loop.
					while ( have_posts() ) :
						the_post();
						?>
					<?php the_content(); ?>
					<?php
							endwhile;
						endif;
					?>
				</div>
			</div>
			<div class="right">
				<div class="boxBorder box">
					<div class="boxBorder__title">
						<h3><?php the_field('title'); ?></h3>
					</div>
					<div class="boxBorder__content">
						<div class="form">
							<div id='crmWebToEntityForm'>
							   	<META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
							   	<form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads3710378000004933025 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory3710378000004933025()' accept-charset='UTF-8'>
							 	<input type='text' style='display:none;' name='xnQsjsdp' value='e41a6d28d174ee0bbf8b09dd8427c21826c3ff01932fd827328f7424ccc8bc51'></input> 
							 	<input type='hidden' name='zc_gad' id='zc_gad' value=''></input> 
							 	<input type='text' style='display:none;' name='xmIwtLD' value='8e33c0076bcf4a23821adc61ee6829b9cce96e3fa39b015058fb87a7d83cdfc9'></input> 
							 	<input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
							 	<input type='text' style='display:none;' name='returnURL' value='<?php echo site_url();?>/contactorsp' > </input>

							 	<div class="inputCrow">
									<label for="nombre">Nombre</label><br>
									<input type='text' style='width:100%;box-sizing:border-box;'  maxlength='40' name='First Name' />
								</div>
								<div class="inputCrow">
									<label for="apellidos">Apellidos</label><br>
									<input type='text' style='width:100%;box-sizing:border-box;'  maxlength='80' name='Last Name' />
								</div>
								<div class="inputCrow">
									<label for="empresa">Empresa</label><br>
									<input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Company' />
								</div>
								<div class="inputCrow">
									<label for="apellidos">Correo electrónico</label><br>
									<input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Email' ftype='email'/>
								</div>
								<div class="inputCrow">
									<label for="apellidos">Teléfono</label><br>
									<input type='text' style='width:100%;box-sizing:border-box;'  maxlength='30' name='Mobile' />
								</div>
								<div class="inputCrow">
									<label for="necesidad">Asunto Web</label><br>
									<select style='width:100%;box-sizing:border-box;' name='LEADCF19'>
										<option value='-None-'>-None-</option>
										<option value='Contacto'>Contacto</option>
										<option value='Cotizaci&oacute;n'>Cotizaci&oacute;n</option>
										<option value='Libro&#x20;de&#x20;reclamaciones'>Libro de reclamaciones</option>
										<option value='Otros'>Otros</option>
										<option value='Soporte&#x20;T&eacute;cnico'>Soporte T&eacute;cnico</option>
									</select>
								</div>
								<div class="inputCrow full">
									<label for="empresa">Descripci&oacute;n</label><br>
									<textarea name='Description' maxlength='32000' style='width:100%;'>&nbsp;</textarea>
								</div>
								<div class="inputCrow" style='display:none;'>
									<label for="empresa">Formulario web</label><br>
									<select style='width:100%;box-sizing:border-box;' name='LEADCF18'>
										<option value='-None-'>-None-</option>
										<option value='Campa&ntilde;a&#x20;1'>Campa&ntilde;a 1</option>
										<option value='Campa&ntilde;a&#x20;2'>Campa&ntilde;a 2</option>
										<option value='Campa&ntilde;a&#x20;3'>Campa&ntilde;a 3</option>
										<option value='Campa&ntilde;a&#x20;4'>Campa&ntilde;a 4</option>
										<option value='Campa&ntilde;a&#x20;5'>Campa&ntilde;a 5</option>
										<option value='Contacto&#x20;web'>Contacto web</option>
									<option selected value='Cotizaci&oacute;n'>Cotizaci&oacute;n</option>
									</select>
								</div>
								<div class="flexNotText">
									<button id='formsubmit' type='submit' class="btn">Enviar</button>
								</div>
								<script>
							 	  	var mndFileds=new Array('Company','First Name','Last Name','Email','Mobile','LEADCF19');
							 	  	var fldLangVal=new Array('Empresa','Nombre','Apellidos','Correo electrónico','Móvil','Asunto Web'); 
									var name='';
									var email='';
									function validateEmail()
									{
										var emailFld = document.querySelectorAll('[ftype=email]');
										var i;
										for (i = 0; i < emailFld.length; i++)
										{
											var emailVal = emailFld[i].value;
											if((emailVal.replace(/^\s+|\s+$/g, '')).length!=0 )
											{
												var atpos=emailVal.indexOf('@');
												var dotpos=emailVal.lastIndexOf('.');
												if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailVal.length)
												{
													alert('Introduzca una dirección de correo electrónico válida. ');
													emailFld[i].focus();
													return false;
												}
											}
										}
										return true;
									}

							 	  	function checkMandatory3710378000004933025() {
										for(i=0;i<mndFileds.length;i++) {
										  var fieldObj=document.forms['WebToLeads3710378000004933025'][mndFileds[i]];
										  if(fieldObj) {
											if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
											 if(fieldObj.type =='file')
												{ 
												 alert('Seleccione un archivo para cargar.'); 
												 fieldObj.focus(); 
												 return false;
												} 
											alert(fldLangVal[i] +' no puede estar vacío.'); 
								   	   	  	  fieldObj.focus();
								   	   	  	  return false;
											}  else if(fieldObj.nodeName=='SELECT') {
								  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
												alert(fldLangVal[i] +' no puede ser nulo.'); 
												fieldObj.focus();
												return false;
											   }
											} else if(fieldObj.type =='checkbox'){
								 	 	 	 if(fieldObj.checked == false){
												alert('Please accept  '+fldLangVal[i]);
												fieldObj.focus();
												return false;
											   } 
											 } 
											 try {
											     if(fieldObj.name == 'Last Name') {
												name = fieldObj.value;
								 	 	 	    }
											} catch (e) {}
										    }
										}
										if(!validateEmail()){return false;}
										
										document.getElementById('formsubmit').disabled=true;
									}
							</script>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="map_canvas"></div>
<?php
get_footer();
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIUoPmAtFVeqmsT2hd0pV3usTNAbRQ-a8&sensor=false&libraries=geometry,places,drawing&ext=.js" type="text/javascript"></script>
<script type="text/javascript">
	window.onload = function(){
	    var options = {
	        zoom: 17,
	        // center: new google.maps.LatLng(-12.103248051911464, -77.01072606859202)
	        center: new google.maps.LatLng(<?php the_field('lat');?>, <?php the_field('log');?>)
	    };
	    var map = new google.maps.Map(document.getElementById('map_canvas'), options);
	    new google.maps.Marker({
	        position: map.getCenter()
	        , map: map
	        , title: 'Bafing'
	        , icon: '<?php echo site_url(); ?>/wp-content/themes/bafing/pin.png'
	        , cursor: 'default'
	        , draggable: true
	    });
	};
</script>


