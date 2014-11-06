@include('layouts.header')

<div class="wrapper row-offcanvas row-offcanvas-left">
@include('layouts.sidebar')
  <aside class="right-side">
  <section class="content" style="overflow: visible;
padding-left: 15px;
padding-top: 70px;">
@yield('content')
  </section>
  </aside>
</div>

@include('layouts.footer')
