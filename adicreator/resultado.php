<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <link rel="stylesheet" href="css/style.css" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    	<link rel="shortcut icon" type="image/x-icon" href="ico/logo.png">
    	<!-- Description web Meta -->
    	<meta name="description" content="formulario para crear los xml de VOD">
		<!-- Compatible Meta -->
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">    	
    	<!-- Autor Meta -->
    	<meta name="author" content="AO Diseño / Contacto a: alexander.osses@gmail.com">
    	<!-- Mobile Meta -->
    	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	    <title>ADICREATOR</title>
	</head>
	<body>
		<div class="titulo">
			<h2> <img src="ico/logo.png" class="imagen"> ADICREATOR - Resultado</h2>
			<H4><strong class="strong">IMPORTANTE, Para obtener el archivo final siga las siguientes instrucciones:</strong><br>
Seleccione el código obtenido y cópielo <strong >(Presione las teclas Control + C)</strong>, abra el block de notas y pegue el código copiado<strong > (Presione las teclas Control + V)</strong> y guárdelo con la opción guardar como escriba el nombre del archivo con extensión XML ejemplo: archivo.xml y presione guardar.
</H4>
		</div>
		<div id="DDD" class="container">
 			<?php
 				// VARIABLES Package Metadata
				$providerp = $_POST['providerp'];
				$productp = $_POST['productp'];
				$assetnamep = $_POST['assetnamep'];
				$descriptionp = $_POST['descriptionp'];
				$creationdatep = $_POST['creationdatep'];
				$provideridp = $_POST['provideridp'];
				$assetidp = $_POST['assetidp'];
				$assetclassp = $_POST['assetclassp'];			

				// VARIABLES Title Metadata	
				$providert = $_POST['providert'];
				$productt = $_POST['productt'];		
				$assetnamet = $_POST['assetnamet'];
				$descriptiont = $_POST['descriptiont'];		
				$creationdatet = $_POST['creationdatet'];		
				$provideridt = $_POST['provideridt'];																					
				$assetidt = $_POST['assetidt'];
				$assetclasst = $_POST['assetclasst'];		
				$typet = $_POST['typet'];
				$titlebrieft = $_POST['titlebrieft'];		
				$titlet = $_POST['titlet'];		
				$summaryshortt = $_POST['summaryshortt'];																					
				$rentalperiodt = $_POST['rentalperiodt'];	
				$summarylongt = $_POST['summarylongt'];		
				$ratingt = $_POST['ratingt'];
				$studiocodet = $_POST['studiocodet'];		
				$runtimet = $_POST['runtimet'];		
				$displayruntimet = $_POST['displayruntimet'];																					
				$yeart = $_POST['yeart'];															
				$categoryt = $_POST['categoryt'];		
				$genret = $_POST['genret'];
				$distributornamet = $_POST['distributornamet'];		
				$licensewindowstartt = $_POST['licensewindowstartt'];		
				$licensewindowendt = $_POST['licensewindowendt'];																					
				$audiencet = $_POST['audiencet'];	
				$billingIDt = $_POST['billingIDt'];		
				$actorsdisplayt = $_POST['actorsdisplayt'];
				$studiot = $_POST['studiot'];		
				$contractnamet = $_POST['contractnamet'];		
				$actorst2 = $_POST['actorst2'];																					
				$actorst3 = $_POST['actorst3'];	
				$actorst4 = $_POST['actorst4'];		
				$studionamet = $_POST['studionamet'];
				$directort = $_POST['directort'];	

				// VARIABLES Movie Metadata
				$providerm = $_POST['providerm'];	
				$productm = $_POST['productm'];					
				$assetnamem = $_POST['assetnamem'];	
				$descriptionm = $_POST['descriptionm'];	
				$creationdatem = $_POST['creationdatem'];	
				$provideridm = $_POST['provideridm'];	
				$assetidm = $_POST['assetidm'];	
				$assetclassm = $_POST['assetclassm'];	
				$typem = $_POST['typem'];	
				$audiotypem = $_POST['audiotypem'];	
				$contentfilesizem = $_POST['contentfilesizem'];	
				$screenformatm = $_POST['screenformatm'];	
				$encodingtypem = $_POST['encodingtypem'];	
				$hdcontentm = $_POST['hdcontentm'];	
				$languagesm = $_POST['languagesm'];	
				//$subtitlelanguagesm = $_POST['subtitlelanguagesm'];	
				$copyprotectionm = $_POST['copyprotectionm'];	
				$contentm = $_POST['contentm'];	

				// VARIABLES Box Metadata	
				$providerb = $_POST['providerb'];	
				$productb = $_POST['productb'];	
				$assetnameb = $_POST['assetnameb'];	
				$descriptionb = $_POST['descriptionb'];	
				$creationdateb = $_POST['creationdateb'];									
				$provideridb = $_POST['provideridb'];
				$assetidb = $_POST['assetidb'];
				$assetclassb = $_POST['assetclassb'];
				$typeb = $_POST['typeb'];
				$contentfilesizeb = $_POST['contentfilesizeb'];	
				$contentb = $_POST['contentb'];							

				// HTML ENTITIES Package Metadata
				echo htmlentities('<?xml version="1.0" encoding="utf-8"?>')."<br>";
				echo htmlentities('<ADI xmlns="http://www.eventis.nl/PRODIS/ADI">')."<br>";
				echo htmlentities('<Metadata>')."<br>";
				echo htmlentities('<AMS Provider="'.$providerp.'" Product="'.$productp.'" Asset_Name="'.$assetnamep.'_package" Version_Major="1" Version_Minor="0" Description="'.$descriptionp.'" Creation_Date="'.$creationdatep.'" Provider_ID="'.$provideridp.'" Asset_ID="TVIP0201900000'.$assetidp.'" Asset_Class="'.$assetclassp.'" Verb="" />   ')."<br>";		
				echo htmlentities('  <App_Data App="TVOD" Name="Metadata_Spec_Version" Value="CableLabsVOD1.1" /> ')."<br>";
				echo htmlentities('  </Metadata>  ')."<br>";

				// HTML ENTITIES Title Metadata
				echo htmlentities('  <Asset> ')."<br>";
				echo htmlentities(' <Metadata>  ')."<br>";
				echo htmlentities('  <AMS Provider="'.$providerp.'" Product="'.$productt.'" Asset_Name="'.$assetnamet.'_title" Version_Major="1" Version_Minor="0" Description="'.$descriptiont.'" Creation_Date="'.$creationdatet.'" Provider_ID="'.$provideridt.'" Asset_ID="TVIT0201900000'.$assetidt.'" Asset_Class="'.$assetclasst.'" Verb="" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Type" Value="'.$typet.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Title_Brief" Value="'.$titlebrieft.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Title" Value="'.$titlet.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Summary_Short" Value="'.$summaryshortt.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Rental_Period" Value="'.$rentalperiodt.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Summary_Long" Value="'.$summarylongt.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Rating" Value="'.$ratingt.'" />  ')."<br>";
				echo htmlentities('  <App_Data App="TVOD" Name="Studio_Code" Value="'.$studiocodet.'" /> ')."<br>";
				echo htmlentities('  <App_Data App="TVOD" Name="Run_Time" Value="'.$runtimet.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Display_Run_Time" Value="'.$displayruntimet.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Year" Value="'.$yeart.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Category" Value="'.$categoryt.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Genre" Value="'.$genret.'" />   ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Distributor_Name" Value="'.$distributornamet.'" />  ')."<br>";
				echo htmlentities('  <App_Data App="TVOD" Name="Licensing_Window_Start" Value="'.$licensewindowstartt.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Licensing_Window_End" Value="'.$licensewindowendt.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Audience" Value="'.$audiencet.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Billing_ID" Value="'.$billingIDt.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Country_of_Origin" Value="CL" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Actors_Display" Value="'.$actorsdisplayt.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Studio" Value="'.$studiot.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Contract_Name" Value="'.$contractnamet.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Actors" Value="'.$actorst2.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Actors" Value="'.$actorst3.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Actors" Value="'.$actorst4.'" />  ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Studio_Name" Value="'.$studionamet.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Director" Value="'.$directort.'" /> ')."<br>";
				echo htmlentities(' </Metadata> ')."<br>";

				// HTML ENTITIES Movie Metadata
				echo htmlentities(' <Asset> ')."<br>";
				echo htmlentities(' <Metadata> ')."<br>";
				echo htmlentities('  <AMS Provider="'.$providerp.'" Product="'.$productm.'" Asset_Name="'.$assetnamem.'_movie" Version_Major="1" Version_Minor="0" Description="'.$descriptionm.'" Creation_Date="'.$creationdatem.'" Provider_ID="'.$provideridm.'" Asset_ID="TVIM0201900000'.$assetidm.'" Asset_Class="'.$assetclassm.'" Verb="" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Type" Value="'.$typem.'" /> ')."<br>";
				echo htmlentities('  <App_Data App="TVOD" Name="Audio_Type" Value="'.$audiotypem.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Content_FileSize" Value="'.$contentfilesizem.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Screen_Format" Value="'.$screenformatm.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Encoding_Type" Value="'.$encodingtypem.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="HDContent" Value="'.$hdcontentm.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Languages" Value="'.$languagesm.'" /> ')."<br>";
				//echo htmlentities(' <App_Data App="SVOD" Name="Subtitle_Languages" Value="'.$subtitlelanguagesm.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Copy_Protection" Value="'.$copyprotectionm.'" /> ')."<br>";
				echo htmlentities(' </Metadata> ')."<br>";
				echo htmlentities(' <Content Value="'.$contentm.'" /> ')."<br>";
				echo htmlentities(' </Asset> ')."<br>";

				// HTML ENTITIES Boxcover Metadata
				echo htmlentities(' <Asset> ')."<br>";
				echo htmlentities(' <Metadata> ')."<br>";
				echo htmlentities('  <AMS Provider="'.$providerb.'" Product="'.$productb.'" Asset_Name="'.$assetnameb.'_boxcover" Version_Major="1" Version_Minor="0" Description="'.$descriptionb.'" Creation_Date="'.$creationdateb.'" Provider_ID="'.$provideridb.'" Asset_ID="TVIB0201900000'.$assetidb.'" Asset_Class="'.$assetclassb.'" Verb="" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Type" Value="'.$typeb.'" /> ')."<br>";
				echo htmlentities(' <App_Data App="TVOD" Name="Content_FileSize" Value="'.$contentfilesizeb.'" /> ')."<br>";
				echo htmlentities(' </Metadata> ')."<br>";
				echo htmlentities(' <Content Value="'.$contentb.'" /> ')."<br>";
				echo htmlentities('  </Asset> ')."<br>";
				echo htmlentities(' </Asset> ')."<br>";
				echo htmlentities(' </ADI>');

?>
			
			<div class="btn-block">
			 	<a href="index.html"> <button type="volver" class="btn-send" >CREAR NUEVO XML</button></a>
			</div>

			<small>Creado por: <strong>AO diseño | AODISENO.COM</strong></small>
</div>


</body>

</html>
