<html>

<head>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body>

{{--<style>--}}
{{--list.search input[type=text] {--}}
{{--padding: 10px;--}}
{{--font-size: 17px;--}}
{{--border: 1px solid grey;--}}
{{--float: left;--}}
{{--width: 80%;--}}
{{--background: #f1f1f1;--}}
{{--}--}}

{{--</style>--}}
{{--<nav class = "navbar navbar-default">--}}
    {{--<ul class="nav navbar-nav">--}}

            {{--<li class="search">--}}
                {{--<input type="text" placeholder="Search Something Here " name="search">--}}
                {{--<button type="submit"><i class="fa fa-search"></i></button>--}}

            {{--</li>--}}


        {{--@guest--}}
            {{--<li><a href="{{url('/register')}} " >--}}
                    {{--Register  </a> </li>--}}

            {{--<li><a href="{{url('/login')}} " >--}}
                    {{--Login  </a> </li>--}}

        {{--@endguest--}}


        {{--@auth--}}

            {{--<li> <a href="{{('/logout')}}">Logout</a> </li>--}}


            {{--@foreach($posts as $p)--}}

            {{--<li> <a href="{{('/mypost/')}}/{{$p->id}}">MyPost </a> </li>--}}
            {{----}}
            {{--@endforeach--}}

            {{--@if(Auth::user()->role =='Member')--}}

            {{--@foreach($members as $m)--}}
            {{--<li><a href="{{url('/cart/{$m->id} ')}}">Cart</a>--}}
            {{--</li>--}}

            {{--<li> <a href="{{url('/myPost/{$m->id}')}}">My Post</a>--}}




            {{--</li>--}}

            {{--<li>--}}
            {{--<a--}}

            {{--href="{{url('/profile_member/{$m->id})}}"><img style="width: 150px; height: 150px; border-radius: 50%" src="{{Url('fotomember')}}/{{$m->profile_picture}}" >--}}

            {{--</a>--}}
            {{--</li>--}}

            {{--<li><a href="{{Url('/profile_member')}}/{{$m->id}}"> ({{Auth::user()->name}})</a>--}}
            {{--</li>--}}




            {{--@endforeach--}}


            {{--@endif--}}




        {{--@endauth--}}



    {{--</ul>--}}

{{--</nav>--}}

<div class="container" >
    <div class="row">
        <div class ="col-md-12">
            <h3>@yield('judul') </h3>

            @yield('isiweb')




            <p> Copyright Anti Gaptek Team &copy;  </p>

        </div>
    </div>
</div>

</body>

</html>