@extends('layouts.app')

<link href="https://fonts.cdnfonts.com/css/angella-white-personal-use-font" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
                
@section('content')
<div class=" shadow p-3 text-center rounded mb-4" style="background-color:#5D3891; width:30%; margin:auto;">
           <p class="fw-bold fs-4 text-light">Welcome To Our Mahlaba</p>
           <p style="color: #F99417;  font-family: 'Angella White Personal use font', sans-serif;" class="fw-bold  fs-1 ">Bistro of Morocco</p>
           <p class="fw-bold" style="color: #E8E2E2">"Bistro of Morocco is an online bakery that offers a delicious range of baked goods inspired by the rich flavors of Morocco. From flaky croissants filled with almond paste to sweet and savory baklava, our menu is sure to satisfy your cravings."</p>
          <img src="/img/logo.png"  alt="" style="width: 150px;">
 
</div>

<p style="font-family: 'Angella White Personal use font', sans-serif; margin:auto;" class="text-center fs-1 mt-3">Our Menu</p>


<div class="row mt-5 shadow p-3"  style="background-color: #E8E2E2">
<p class="fs-5 text-center " style="font-family: 'Poppins', sans-serif;" > Those are the plats disponible in our <span style="color:#F99417;" class="fw-bold">Ma7</span><span class="fw-bold" style="color: #5D3891">laba</span></p>

</div>

<div class="row mt-5 p-2 align-items-center">
    @foreach ($products as $item)
        <div class="col-3 shadow rounded text-center ms-2" style="background-color:#5D3891">
            <p class="text-white fs-5 mt-2 fw-bold " style="font-family: 'Poppins', sans-serif;"  >{{$item->name}}</p> 
           <img src="/images/{{$item['image']}}" alt="" class="w-75 mt-2">
           <p class="text-white fs-5 mt-2" style="font-family: 'Poppins', sans-serif;">{{$item->description}}</p> 
           <button class="btn btn-warning mb-2"><span>Price:</span> {{$item->price}} </button>
        </div>
    @endforeach


</div>




@endsection
