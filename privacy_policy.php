<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if(isset($_SESSION['Username'])){
    header("location: home");
}
$getLang = trim(filter_var(htmlentities($_GET['lang']),FILTER_SANITIZE_STRING));
if (!empty($getLang)) {
$_SESSION['language'] = $getLang;
}
// ========================= config the languages ================================
error_reporting(E_NOTICE ^ E_ALL);
if (is_file('home.php')){
    $path = "";
}elseif (is_file('../home.php')){
    $path =  "../";
}elseif (is_file('../../home.php')){
    $path =  "../../";
}
include_once $path."langs/set_lang.php";

?>
<html dir="<? echo lang('html_dir'); ?>">
<head>
    <title><? echo lang('welcome'); ?> | Social Icon</title>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head_imports_main.php";?>
    <style type="text/css">
        .modal_developer1
        {
            height: 170px;
            width: 130px;

        }
        .modal-title
        {
            background:#00FFFF;    
        }



    </style>
</head>
    <body class="login_signup_body">
    <!--============[ Nav bar ]============-->
        <div class="login_signup_navbar">
                <a href="index"><img src="imgs/socialicon.jpeg" style="height: 80px;width: 80px;"></a>
                <a href="help.html" class="login_signup_navbarLinks" style="font-size: 20px;"><? echo lang('help'); ?></a>
                
                <a href="privacy_policy.php" class="login_signup_navbarLinks" style="font-size: 20px;"><? echo lang('privacyPolicy'); ?></a>
                <a href="#" class="login_signup_navbarLinks" style="font-size: 20px;">

                    <button type="button" data-toggle="modal" data-target="#myModal" style="background: none;border: none;">Developers</button>

<!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

    <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <center><h4 class="modal-title">OUR TEAM</h4></center>
                           </div>
                           <div class="modal-body">
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1" src="imgs/IMG-20180127-WA0051.jpg" >
                                        </div>
                                        <div class="col-sm-6">
                                            <p>Abhishek Kumar</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>Roll no. 161011</p>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                              <hr>
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1" src="imgs/priya.jpg" >
                                        </div>
                                        <div class="col-sm-6">
                                            <p>Priya Kumari</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>Roll no. 161019</p>
                                        </div>
                                    </div>
                                  </div>
                    
                              </div>
                              <hr>
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1"  src="imgs/romi.jpg">
                                        </div>
                                        <div class="col-sm-6">
                                            <p>Vilson Kumar</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>Roll no. 161020</p>
                                        </div>
                                    </div>
                                  </div>
                    
                              </div>
                              <hr>
                              <div class="modal-box">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img class="modal_developer1" src="imgs/bholi.jpeg" >
                                        </div>
                                        <div class="col-sm-6">
                                            <p>Anjana Bharti</p><hr>
                                            <p>COMPUTER SCIENCE DEPARTMENT</p><hr>
                                            <p>Roll no. 161024</p>
                                        </div>
                                    </div>
                                  </div>
                    
                              </div>
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                        </div>

                      </div>
                    </div>

                </a>
                
        </div>
        <!--============[ main contains ]============-->
        <div class="privacy_content container">
            <center><h1 style="border-bottom: 1px solid black;">Data privacy</h1></center><br><br>
            <p style="font-size: 20px;"> This Policy describes the information we process to support theis social media site.You can find additional tools and information in this social networking site.</p>

            <center><h1 style="color: #00ffff;">What kind of Information we collect ?</h1></center>
            <p style="font-size: 20px;">To provide the Products, we must process information about you. The type of information that we collect depends on how you use our Products. You can learn how to access and delete information that we collect by visiting this site.</p>
            <br>
            <br>
            <hr style="border: 1px solid #000;">
            <h3 style="font-size: 17px;border-left: 5px solid #000;height: 40px;"><b>  Things that you and other provide<b></h3>
                <ul style="list-style-type:disc;">
                    <li style="font-size: 17px;">Information and content you provide. We collect the content, communications and other information you provide when you use our Products, including when you sign up for an account, create or share content and message or communicate with others. This can include information in or about the content that you provide (e.g. metadata), such as the location of a photo or the date a file was created. It can also include what you see through features that we provide, such as our camera, so we can do things such as suggest masks and filters that you might like, or give you tips on using camera formats. Our systems automatically process content and communications that you and others provide to analyse context and what's in them for the purposes described below. Learn more about how you can control who can see the things you share.</li>
                    <br><br>
                    <li style="font-size: 17px;">Data with special protections: You can choose to provide information in your Facebook profile fields or life events about your religious views, political views, who you are "interested in" or your health. This and other information (such as racial or ethnic origin, philosophical beliefs or trade union membership) could be subject to special protections under the laws of your country.</li>
                    <br><br>
                    <li style="font-size: 17px;"><b>Networks and connections</b> We collect information about the people, Pages, accounts, hashtags and groups that you are connected to and how you interact with them across our Products, such as people you communicate with the most or groups that you are part of. We also collect contact information if you choose to upload, sync or import it from a device (such as an address book or call log or SMS log history), which we use for things such as helping you and others find people you may know and for the other purposes listed below.</li>
                    
                </ul>
            
        </div>
        
        

<script type="text/javascript">
function loginUser(){
var username = document.getElementById("un").value;
var password = document.getElementById("pd").value;
$.ajax({
type:'POST',
url:'includes/login_signup_codes.php',
data:{'req':'login_code','un':username,'pd':password},
beforeSend:function(){
$('.login_signup_btn1').hide();
$('#login_wait').html("<? echo lang('loading'); ?>...");
},
success:function(data){
$('#login_wait').html(data);
if (data == "Welcome...") {
    $('#login_wait').html("<p class='alertGreen'><? echo lang('welcome'); ?>..</p>");
    setTimeout(' window.location.href = "home"; ',2000);
}else{
    $('.login_signup_btn1').show();
}
},
error:function(err){
alert(err);
}
});
}
$('#loginFunCode').click(function(){
loginUser();
});
$(".login_signup_textfield").keypress( function (e) {
    if (e.keyCode == 13) {
        loginUser();
    }
});
</script>
</body>
</html>
