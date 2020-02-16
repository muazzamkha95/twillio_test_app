<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155050453-1"></script>
<meta name="user-id" content="@if(Auth::check()){{ Auth::user()->id }}@endif">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155050453-1');
</script>

  @yield('links')

  @yield('seo-section')


</head>
<body class="fix-header">
  <!-- #header -->
    <div id="app" >

            @yield('main-section')


    </div>
  @yield('scripts')
</body>

</html>
