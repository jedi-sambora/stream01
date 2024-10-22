
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steaming ... </title>        
    <title>Basic CheckBox - jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="./lib/jqeui110/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="./lib/jqeui110/themes/icon.css">
	 <link rel="stylesheet" type="text/css" href="./lib/jqeui110/demo/demo.css"> 
	<script type="text/javascript" src="./lib/jqeui110/jquery.min.js"></script>
	<script type="text/javascript" src="./lib/jqeui110/jquery.easyui.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.3.0/shaka-player.compiled.min.js"></script>
	<link rel="shortcut icon" href="./image/wa_ico.png" type="image/x-icon" />
  <script type="text/javascript">
  function open_panel(plugin,judul,folder){  
  
                $('#p').panel({  
                              <!-- href: './'+folder+'/'+plugin+'.php' -->
							  href: plugin+'.php' 

                });
                  $('#p').panel(refresh);   
            }   
      function open_panelx(file,title){  
          
                $('#p').panel({  
   		  href: file+'.php',
   		  title:title 

                });
       }        
            
            
        </script>
</head>
<body>
 <?php
   include('./lib/koneksi.inc.php'); 
			 $conn = new mysqli($server, $user, $pwd, $dbx);
  $nm_usr_login = 'MSG WA';
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
 ?>
 <table align="center"><tr><td>
    <div class="demo-info">
        <div class="demo-tip icon-tip"></div>
       
    </div>
    <div style="margin:10px 0;"></div>
    <div class="easyui-layout" style="width:1100px;height:550px;">
  <!--      <div data-options="region:'north'" style="height:100px"></div> -->
        <div data-options="region:'west',split:true" title="Menu User " style="width:250px;">
  <div style="margin:20px 0">
        <a href="#" class="easyui-linkbutton" style="width:242px" onclick="open_panelx('bs1','Bein Sport 1 v+')" data-options="plain:false">Bein Sport 1 V+</a>
        <a href="#" class="easyui-linkbutton" style="width:242px" onclick="open_panelx('bs2','Bein Sport 2 v+')" data-options="plain:false">Bein Sport 2 V+</a>
        <a href="#" class="easyui-linkbutton" style="width:242px" onclick="open_panelx('bs3','Bein Sport 3 v+')" data-options="plain:false">Bein Sport 3 V+</a>
        <a href="#" class="easyui-linkbutton" style="width:242px" onclick="open_panelx('bs4','Bein Sport 4 v+')" data-options="plain:false">Bein Sport 4 V+</a>
        <a href="#" class="easyui-linkbutton" style="width:242px" onclick="open_panelx('spotv','SPOTV')" data-options="plain:false">SPOTV </a>
        <a href="#" class="easyui-linkbutton" style="width:242px" onclick="open_panelx('spotv2','SPOTV 2')" data-options="plain:false">SPOTV 2</a>
         </div>
        </div>
       <div region="center" border="true">
 <div id="p" class="easyui-panel" style="width:auto;height:auto;padding:10px;background:#fafafa;"
             data-options="fit:true,border:false" > 
             <div style="padding:50px 0 50px 60px">
             
         </div>
</div> 

        </div>
          
        </div>
    </div>
    </td></tr>
 </table> 
     <script>
       
/*        $('#filenya').filebox({
	onChange: function(value){
		var id = $(this).filebox('options').fileboxId;
		var files = $('#'+id)[0].files;
		if (files.length){
			var url = window.URL.createObjectURL(files[0]);
			$('#myImg').attr('src', url);
		}
	} */
	
	$('#filenya').filebox({
		onChange: function(value){
		//	$('#imagePack').attr('src', value);
		//alert('okeeeeeeeeeee');
		}
	});

    </script>  
</body>
</html>
