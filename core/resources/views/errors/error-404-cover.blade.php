<!DOCTYPE html>
<html lang="en">


<head>

  <base >

  <meta charset="utf-8">
  <meta name="theme-color" content="#5955D1">

  <!-- begin::NexLink Website Page Title -->
  <title>NexLink | CRM Admin Dashboard Template</title>
  <!-- end::NexLink Website Page Title -->

  <!-- begin::NexLink Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end::NexLink Mobile Specific -->

  <!-- begin::NexLink Favicon Tags -->
  <!-- ICONS -->
  <link rel="icon" href="{{ asset('admin-theme/assets/images/favicon.png') }}">
  <!-- end::NexLink Favicon Tags -->

  <!-- begin::NexLink Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&amp;display=swap" rel="stylesheet">
  <!-- end::NexLink Google Fonts -->

 <!-- THEME LIBRARIES -->
 <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/flaticon/css/all/all-single.css') }}">
 <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/lucide/lucide.css') }}">
 <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/fontawesome/css/all.min.css') }}">
 <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/simplebar/simplebar.css') }}">
 <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/node-waves/waves.css') }}">
 <link rel="stylesheet" href="{{ asset('admin-theme/assets/libs/bootstrap-select/css/bootstrap-select.min.css') }}">

 <!-- MAIN THEME STYLE -->
 <link rel="stylesheet" href="{{ asset('admin-theme/assets/css/styles.css') }}">
 <style>
   .error-cover-wrapper .error-cover {
     position: relative;
     padding: 0;
     min-height: 100vh;
   }
   .error-cover-wrapper .error-cover .error-img {
     position: absolute;
     inset: 0;
     width: 100%;
     height: 100%;
     object-fit: cover;
     display: block;
   }
 </style>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XWVQM68HHQ"></script>
  <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-XWVQM68HHQ', {
			'cookie_flags': 'SameSite=None;Secure',
			'send_page_view': true
		});
	</script>

</head>

<body>
  <div class="page-layout">

    <div class="error-cover-wrapper">
      <div class="row g-0">
        <div class="col-md-6 align-self-center">
          <div class="error-wrapper text-center">
            <div class="error-status">404</div>
            <h2 class="error-heading">Something Went Wrong</h2>
            <p class="error-text mb-4">Sorry we were unable to find that page</p>
            <a href="{{ url('/dashboard-redirect') }}" class="btn btn-primary waves-effect waves-light">
              <i class="fi fi-rr-arrow-small-left scale-4x me-1"></i> Back To Dashboard
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="error-cover">
            <img src="{{ asset('admin-theme/assets/images/error_image.avif') }}" alt="Error" class="error-img">
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="{{ asset('admin-theme/assets/libs/global/global.min.js') }}"></script>
  <script src="{{ asset('admin-theme/assets/js/appSettings.js') }}"></script>
  <script src="{{ asset('admin-theme/assets/js/main.js') }}"></script>
</body>


</html>