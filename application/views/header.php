<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<?php 
if ($this->agent->is_robot()) {
  echo '<link rel="canonical" href="' . site_url( $this->uri->uri_string() ) .'" />'; 
  } else {   
  echo '<meta name="canonical" content="'. base_url().implode('/', $this->uri->rsegment_array()) . '" />'; 
  }
  ?>
<?php if(isset($meta_title)){ ?>

  <title><?php echo $meta_title; ?></title>
  <meta name="keywords" content="<?php echo $meta_keywords; ?>">
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="Website description" content="<?php echo $meta_website_description; ?>">

<?php } else { ?>

  <title>Airport Hospitality and Premium Services | Airport Assistance by Encalm</title>

  <meta name="keywords" content="Airport Concierge Services, Airport Assistance">
  <meta name="Meta description" content="Encalm provides premium airport hospitality services such as concierge service & airport assistance in New Delhi's IGI (DEL) Airport.">
  <meta name="Website description" content="Encalm provides premium airport hospitality services such as concierge service & airport assistance in New Delhi's IGI (DEL) Airport.">

<?php } ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WS6ZBB4');</script>
<!-- End Google Tag Manager -->

<!-- Favicons -->
<link rel="icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">
<link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
<link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!-- Vendor CSS Files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css">
<link href="<?=base_url()?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/all.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?=base_url()?>assets/css/encalm-style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/fonts/icomoon/style.css">
<!-- Template Main CSS File -->
<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">


<!-- Global site tag (gtag.js) - Google Ads -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10876206096"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10876206096');
</script>

<script type="text/javascript">
_linkedin_partner_id = "4322129";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4322129&fmt=gif" />
</noscript>
<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o8bha');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->



