<?php
if (!$this -> session -> userdata('user_id')) {
  redirect("user");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>HCMP | <?php echo $title;?> </title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url().'assets/img/coat_of_arms.png'?>" type="image/x-icon" />
    <link href="<?php echo base_url().'assets/css/style.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap.min.css'?>" type="text/css" rel="stylesheet"/>
	<link href="<?php echo base_url().'assets/boot-strap3/css/bootstrap-responsive.css'?>" type="text/css" rel="stylesheet"/>
	<link href="<?php echo base_url().'assets/css/normalize.css'?>" type="text/css" rel="stylesheet"/>
	<link href="<?php echo base_url().'assets/css/dashboard.css'?>" type="text/css" rel="stylesheet"/>
	<link href="<?php echo base_url().'assets/css/jquery-ui-1.10.4.custom.min.css'?>" type="text/css" rel="stylesheet"/>
	<link href="<?php echo base_url().'assets/css/font-awesome.min.css'?>" type="text/css" rel="stylesheet"/>
  <script src="<?php echo base_url().'assets/scripts/jquery.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/boot-strap3/js/bootstrap.min.js'?>" type="text/javascript"></script>
	
	<!-- <link href="<?php echo base_url().'assets/metro-bootstrap/docs/font-awesome.css'?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url().'assets/metro-bootstrap/css/metro-bootstrap.css'?>" type="text/css" rel="stylesheet"/>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
    </script>
    <style>

	
	.panel-success>.panel-heading {
color: white;
background-color: #528f42;
border-color: #528f42;
border-radius:0;

}
.navbar-default {
background-color: white;
border-color: #e7e7e7;
}
</style>
  </head>  
  <body style="" screen_capture_injected="true" onload="set_interval()" onmouseover="reset_interval()" onclick="reset_interval()">
    <!-- Fixed navbar -->
   <div class="navbar navbar-default navbar-fixed-top" id="">
   <div class="container" style="width: 100%;">
        <div class="navbar-header " > 
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo base_url().'Home';?>">
          	<img style="display:inline-block;"  src="<?php echo base_url();?>assets/img/coat_of_arms-resized1.png" class="img-responsive " alt="Responsive image" id="logo" >
          	</a>
          
				<div id="logo_text" style="display:inline-block;">
					<span style="font-size: 0.95em;font-weight: bold; ">Ministry of Health</span><br />
					<span style="font-size: 0.85em;">Health Commodities Management Platform (HCMP)</span>	
				</div>
        </div>
        <div class="navbar-collapse collapse" style="font-weight: bold" id="navigate">
          <ul class="nav navbar-nav navbar-right" >
       <li><a href="<?php echo site_url().'Home';?>" class=" ">HOME</a> </li>   
<?php
//Retrieve all accessible menus/submenus from the session
$menus= $this -> session -> userdata('menus');
$sub_menus= $this -> session -> userdata('sub_menus');
//Loop through all menus to display them in the top panel menu section
foreach($menus as $menu){?>
	<li class="" >
            	
            	
            	
            	
            	<a id="sub" href="<?php
            	
            	
					
					 echo site_url($menu['menu_url']);
            	 
				
            	 
            	 ?>" class=""><?php echo $menu['menu_text']?></a>
            	
            	<ul class="dropdown-menu" style="min-width: 0" >
            	<?php 
            	foreach($sub_menus as $sub_menu){
            		if ($menu['menu_id']==$sub_menu['menu_id']) {?>
						
		<li><a style="background: whitesmoke;color: black !important" href="<?php echo base_url().$sub_menu['submenu_url']?>"><?php echo $sub_menu['submenu_text']?></a></li>
					<?php
					
            	} 
				}
            	?>
            	
            </ul>
	</li>
	 
<?php
					}
	?>


            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" ></span><?php echo $this -> session -> userdata('full_name');?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                
                <li><a style="background: whitesmoke;color: black !important" href="<?php echo site_url("user/change_password");?>"><span class="glyphicon glyphicon-pencil" style="margin-right: 2%; "></span>Change password</a></li>
                
                <li><a style="background: whitesmoke;color: black !important" href="<?php echo site_url("user/logout");?>" ><span class="glyphicon glyphicon-off" style="margin-right: 2%;"></span>Log out</a></li>
                
              </ul>
            </li>
          </ul>
         </div><!--/.nav-collapse -->
      </div>
      

      <div class="container-fluid" style="/*border: 1px solid #036; */ height: 30px;" id="extras-bar">
      	<div class="row">
      		
      		<div class="col-md-4" style="font-weight:bold; ">
      		<span style="margin-left:2%;">  <?php echo $banner_text;?> </span>
      		 	
      		</div>
      		<div class="col-md-4">
      			
      		</div>
      		<div class="col-md-4"  style="text-align: right;">
      			<?php  echo date('l, dS F Y'); ?>
             <span id="clock" style="font-size:0.85em; " ></span>
      		</div>
      	</div>
      	
      </div>	
      	
      </div>
      
   
    <div class="container-fluid" style="" id="main-content">
<!----------- HCMP MODAL dialog Box for all uses--------->
<div class="modal fade" id="communication_dialog" tabindex="-1" role="dialog"
 aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">HCMP: Notification Message</h4>
      </div>
      <div class="modal-body">   
      </div>
      <div class="modal-footer">         
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
     
    <?php $this -> load -> view($content_view);?>
    </div> <!-- /container -->
   <div id="footer">
      <div class="container">
        <p class="text-muted"> Government of Kenya &copy <?php echo date('Y');?>. All Rights Reserved</p>
      </div>
    </div>

    <script type="text/javascript">

/*
 * Auto logout
 */
var timer = 0;
function set_interval() {
  showTime()
  // the interval 'timer' is set as soon as the page loads
  timer = setInterval("auto_logout()", 3600000);
  // the figure '1801000' above indicates how many milliseconds the timer be set to.
  // Eg: to set it to 5 mins, calculate 3min = 3x60 = 180 sec = 180,000 millisec.
  // So set it to 180000
}

function reset_interval() {
  showTime()
  //resets the timer. The timer is reset on each of the below events:
  // 1. mousemove   2. mouseclick   3. key press 4. scroliing
  //first step: clear the existing timer

  if(timer != 0) {
    clearInterval(timer);
    timer = 0;
    // second step: implement the timer again
    timer = setInterval("auto_logout()", 3600000);
    // completed the reset of the timer
  }
}

function auto_logout() {

  // this function will redirect the user to the logout script
  window.location = "<?php echo base_url(); ?>user/logout";
}

/*
* Auto logout end
*/
  function showTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
h=checkTime(h);
m=checkTime(m);
s=checkTime(s);
$("#clock").text(h+":"+m);
t=setTimeout('showTime()',1000);



}
function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}

  
</script>
    <!-- Bootstrap core JavaScript===================== -->
	
  <script src="<?php echo base_url().'assets/scripts/jquery-ui-1.10.4.custom.min.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/scripts/highcharts.js'?>" type="text/javascript"></script>
   <script src="<?php echo base_url().'assets/scripts/exporting.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url().'assets/scripts/jquery.floatThead.min.js'?>" type="text/javascript"></script>
	
    <!-- Placed at the end of the document so the pages load faster -->

 <script src="<?php echo base_url().'assets/scripts/hcmp_shared_functions.js'?>" type="text/javascript"></script>
  <!----------Datatables==========================  -->
  <script src="<?php echo base_url().'assets/datatable/jquery.dataTables.js'?>" type="text/javascript"></script>
 <script src="<?php echo base_url().'assets/datatable/dataTables.bootstrap.js'?>" type="text/javascript"></script>
 <script src="<?php echo base_url().'assets/datatable/TableTools.js'?>" type="text/javascript"></script>
 <script src="<?php echo base_url().'assets/datatable/ZeroClipboard.js'?>" type="text/javascript"></script>
 <script src="<?php echo base_url().'assets/datatable/dataTables.bootstrapPagination.js'?>" type="text/javascript"></script>
  <!-- validation ===================== -->
  <script src="<?php echo base_url().'assets/scripts/jquery.validate.min.js'?>" type="text/javascript"></script>
</html>
