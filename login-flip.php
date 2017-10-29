<?php
/**
    Template Name: LoginPage
 */
?>


<?php get_header('flip'); ?>


<style>
.panel-login{
	background-color: #f5f5f5;
    font-family: verdana;
 	position:relative;
    border-radius: 3px;
    max-width: 400px;
    margin: 200px auto;
    border: 3px #9BC2CF;
 }
 
form{padding:20px;}
.header{text-align:center; color:#FFF; padding:25px; background-color:#9BC2CF;}
	input[type=email], input[type=password]{padding: 11px;
    border-radius: 3px;
    border: 1px solid #DDD;
    width: 100%;
    display: block;
    margin: 15px 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;
    text-transform: uppercase;
    font-size: 12px;
    font-family: verdana;}
	input[type=submit]{
    background-color: #9BC2CF;
    padding: 8px 15px;
    border-radius: 2px;
    /* border-bottom: 3px solid #0cb7f5; */
    color: #FFF;
    font-weight: 600px;
    border: 0;
    border-bottom: 3px solid #9BC2CF;
    text-transform: uppercase;
    font-weight: 600;
    font-family: arial;
    margin: 5px 0 0 0}
 	.user{
 	background-color: #f5f5f5;
    border-radius: 50%;
    width: 100Px;
    height: 100px;
    position: absolute;
    top: -60px;
    left: 0;
    right: 0;
    margin: auto;
    border: 1px solid #9e9e9e;}
 	span.text{
 	margin-top: 25px;
    display: block;}
</style>
</head>
<body>
 
<div class="panel-login">
<div class="header"><div class="user"><img src="<?php bloginfo('template_directory'); ?>/user.png" width=90 alt=""></div><span class="text">login</span></div>
<form method="POST" action="#">
<input type="email" name="email" class="email" placeholder="Email" />
<input type="password" name="password" class="password" placeholder="password" />
<input type="submit" name="valider" class="valider" value="login" />
</form>
</div>





<?php get_footer('flip'); ?>