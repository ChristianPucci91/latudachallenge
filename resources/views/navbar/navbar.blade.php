@guest

@else

 <nav>
   <div class="nav_bar">


     <div class="nav-left">

        {{-- <p style="margin-bottom: 30px;"> {{ Auth::user()->name }} </p> --}}

     </div>
     <div class="nav-center">
       <div class="img-logo">
        <img src="{{asset('storage/img/logo-nero.png')}}" alt="">
      </div>
     </div>
     <div class="nav-right">
       <div class="popup-img">
         <a href="{{route('popup')}}"><img src="{{asset('storage/img/icon-popup.png')}}" alt=""></a>
       </div>
       <div class="burger-img-menu">
         <img src="{{asset('storage/img/menu-hamburger.png')}}" alt="">
       </div>
       {{-- <ul>

         @if (Auth::user() -> is_admin == 1)
           <li>
            <a href="{{route('admin.index')}}">Dashboard</a>
           </li>
         @endif

         <li>
           <a  href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}

           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
         </li>
       </ul> --}}
     </div>
   </div>
 </nav>
{{--
 <nav class="burger-menu">
   <img src="{{asset('storage/img/mobile-hamburgermenu.png')}}" alt="">
 </nav>
 <nav class="burger-menu-cross">
   <i class="fas fa-times"></i>
 </nav>
 <div class="burger-menu-mobile">
   <ul>

     <li>
       <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
         <i class="fas fa-sign-out-alt"></i>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
       </a>
     </li>
   </ul>
 </div> --}}

@endguest

<div class="slide-menu">
  <ul>

    @if (Auth::user() -> is_admin == 1)
      <li>
       <a href="{{route('admin.index')}}">Dashboard</a>
      </li>
    @endif
    <li>
     <a href="{{route('home')}}">Home</a>
    </li>
    <li>
     <a href="{{route('index-scenari')}}">Scenari</a>
    </li>
    <li>
     <a href="{{route('index-repository')}}">Repository</a>
    </li>
    <li>
      <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
        {{-- <i class="fas fa-sign-out-alt">Logout</i>--}}Logout
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </a>
    </li>
  </ul>
</div>

<script type="text/javascript">


$( document ).ready(function() {

  $('.burger-img-menu').on("click", function(){
      $('.slide-menu').slideToggle();
    });


});


//
// $( document ).ready(function() {
//
//   $('.burger-menu-mobile').css('display','none');
//
//   $('.burger-menu').on('click', function () {
//    $(this).css('display','none');
//    $('.burger-menu-cross').css('display','block');
//    $('.burger-menu-mobile').css('display','block').animate({'width':'95%','right':'50px','opacity':'1'}, 500);
//    $('.img_home').animate({'opacity':'0.3'}, 500);
//   });
//
//   $('.burger-menu-cross').on("click", function(){
//     $('.burger-menu-cross').css('display','none');
//     $('.burger-menu-mobile').animate({'width':'10%','right':'90px'}, 500).css('display','none');
//     $('.img_home').animate({'opacity':'1'}, 500);
//     $('.burger-menu').css('display','block');
//   });
//
// });

</script>
