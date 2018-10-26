<html> 

<head> 



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href= "{{Url('css')}}/lightbox.min.css"/>

<link rel="stylesheet" href= "{{Url('css')}}/fontawesome-stars.css"/>

 <link rel="stylesheet" href="{{Url('css')}}/jquery.SplashScreen.css" type="text/css" media="screen" />
 
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<a href="https://time.is/Jakarta" id="time_is_link" rel="nofollow" style="font-size:36px">Time in Jakarta:</a>
<span id="Jakarta_z41c" style="font-size:36px"></span>
<script src="//widget.time.is/t.js"></script>

  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
 
 <script type="text/javascript" src="{{Url('js')}}/jquery.SplashScreen.js"></script>
 
 <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>



<script>
time_is_widget.init({Jakarta_z41c:{}});
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


<script src= "{{Url('js')}}/lightbox.min.js"> 
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 


<script src= "{{Url('js')}}/jquery.barrating.min.js"> 
</script> 

<script type="text/javascript">
   $(function() {
      $('.example').barrating({
        theme: 'fontawesome-stars'
      });
	  
	  $('.example2').barrating({
        theme: 'fontawesome-stars',
		readonly:true
      });
	  
	  $("#b1").click(
		function()
		{
			
				//catatan
				//ambil dulu email dan password
				
				var x= $("#a").val();
				var y= $("#c").val();
				
			// kirim x dan y ke laravelnya melalui ajax
			
			$.ajax(
			{
						
				method:'POST',
				url: '{{Url("/proses_ajax_login")}} ',
				data:
				{
					//token
					//namenya dan variabel yang dikirim
					x1:x, 
					y1:y,
					_token:'{{csrf_token()}}'
				},
				//waktu sukses
				success:function(data)
				{
				  if(data ==0) 
				  {
					  swal("Pesan", "Login Salah", "error");
				  }
				  
				  else
				  {
					  location.href="{{ Url('/home')}}"; 
				  }
				}
				
			}
			);
		}
		);
	  
	  
	  
   });
</script>


   <script type="text/javascript">
         $(document).ready(function() {
            $.SplashScreen({	
                progressCount: true,
                progressBar: true
            });
			
		
        });
    </script>
	
	
	<script>
	$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
	
	

	
	


	

<script src="{{Url('js')}}/hideShowPassword.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>



<body> 



 <div id="splashscreen">
  <div id="progress">
        <div id="status">
	


</div>
</div>
</div>


<nav class="navbar navbar-default">
<ul class="nav navbar-nav"> 	
<li><a href ="{{Url('/')}}">Index</a></li>
<li><a href ="{{Url('/home')}}">
<span class = "fa fa-home"></span>
Home</a></li>

<li><a href ="{{Url('/about')}}">
<span class = "fa fa-address-book" ></span>
{{Lang::get('register.label_about')}}</a></li>

@guest 

<li> <a target="_blank" href ="{{Url('/register')}}">  
<span class =" fa fa-registered"> </span>
Register</a></li>

@endguest

<li> <a href ="{{Url('/calculator')}}">  
<span class =" fa fa-calculator"> </span>
Calculator</a></li>


@guest 
<li> <a  href ="{{Url('/login')}}">  
<span class =" fa fa-angellist"> </span>
Login</a></li>

<li> <a data-toggle="modal" data-target="#modal1" href ="">  
<span class =" fa fa-user"> </span>
Login Modal</a></li>

@endguest

@auth
<li> <a href ="{{Url('/logout')}}">  

Logout</a></li>

<li> <a href ="{{Url('/List')}}">  

List</a></li>

<li> <a href ="{{Url('/Member')}}">  

Member</a></li>



<li> <a href ="{{Url('/add_thread')}}">  

Add New Thread</a></li>



<li> <a href ="{{Url('/view_thread')}}">  

View Thread</a></li>

@endauth



<li> <a href ="{{Url('/aboutus')}}">  

AboutUs</a></li>


</ul>
</nav>
<div class="container" >
<div class="row"> 
<div class ="col-md-12">	 	
<h3>@yield('judul') </h3>

@yield('isiweb')





<p> Copyright 2018 &copy; IS </p>



	</div>
</div>
</div>

<!-- modal -->

<div id="modal1" class="modal fade" role="dialog">
<div class= "modal-dialog"> 
<div class = "modal-content"> 
<div class "modal-header">
Login 
</div> 
<div class="modal-body">

<form> 
<div class="form-group"> 
<label>{{Lang::get('register.label_email')}}</label>
	<input autofocus placeholder="Email..." id="a" name="a" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("a")}}
	</span>  
	</div>
	
	<div class="form-group">
	<label>{{Lang::get('register.label_password')}}</label>
	<input placeholder="Password..." id="c" name="c" type="password" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("c")}}
	 </span>
	</div>

</div> 

</form>


<div class= "modal-footer">
<button id="b1" type="button" class="btn btn-primary">
Login 
</button>
</div>
</div>
</div>
</div>



</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b588b24e21878736ba24c7a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script>
$('#password').hideShowPassword(true, true);  
$('#password').togglePassword();  
</script>

@if(Session::has('status'))
<script>  
swal("Pesan","{{Session::get('status')}}","{{Session::get('tipe')}}");

</script>
@endif

<script>

ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );

	</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>






</html>