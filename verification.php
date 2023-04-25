



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="a.css" rel="stylesheet">
    
    <title>Admin Auth Security</title>
  </head>
  <BODY>
<div class="container">
  <div class="container_inner">
    <div class="container_inner__login">
      <div class="login">
        <div class="login_profile">
          <img class="logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/ecotech.svg"/>
          <img class="pulse" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/rings.svg"/>
        </div>
        <div class="login_desc">
          <h3>
            Welcome TO 
            <span>Boss-Mod</span>
          </h3>
        </div>
        
        <div class="login_inputs">
         <form action="authenticate.php" method="post">
			 <div class="form-group">
				   
				<input type="text" name="username" class="form-control _ge_de_ol" placeholder="Username" id="username" required>
				</div>
				
				
				<input type="password" name="password" class="form-control _ge_de_ol" placeholder="Password" id="password" required>
					
					
				<input type="submit" class="_btn_04" value="Login">
			</form>
      </div>
      <div class="tick">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/vtick.svg"/>
      </div>
    </div>
  </div>
</div>
</div>

	<script>
$('input[type="password"]').focus(function(){
  $('.tip').css('height','30px')
  setTimeout(function(){
    $('.tip').css('opacity','1')
  },350)
});

$('input[type="password"]').blur(function(){
  $('.tip').css('opacity','0')
  setTimeout(function(){
    $('.tip').css('height','0px')
  },350)
});



$('form').submit(function(){
  $('form,.login_desc h3,.forgotten').animate({'opacity':'0'})
  setTimeout(function(){
    $('.login_profile').addClass('bulge')
  },400);
  setTimeout(function(){
    $('.pulse').fadeIn()
    $('.login_check').fadeIn(300)
  },1350);
   setTimeout(function(){
    $('.login').css('transform','scale(0) translateY(-50%) rotatex(360deg) rotatey(360deg)')
    setTimeout(function(){
    $('.tick').css('transform','scale(1) translateY(-50%)')
  },200);
  },3650);
  return false;
})


</script>
</BODY>
</HTML>