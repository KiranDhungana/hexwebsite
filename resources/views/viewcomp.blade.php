<html lang="en">
<head>
   
    <meta charset="UTF-8">
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homecard.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/47b6cf0509.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>HEX</title>
</head>
<body>
    @include('navbarinner')
    
    <div class="grid md:grid-cols-2 gap-4  md:justify-items-center justify-items-center">
        <div class="flex mt-4 justify-center md:hidden inline  ">
          
            <img style="height: 300px" class=" mt-4"  src="{{ asset('storage/otherimages/'.$info['path']) }}" alt="Example Image">
                
           
        </div>
     
        <div class="md:text-3xl text-lg font-bold  pt-8 pl-12 " >TITLE: <span class="text-2xl font-thin">{{$info['title']}}</span>  <br>
        <p class="md:text-3xl text-base pt-2">
            <p>DESCRIPTION:</p>
           <p class="text-2xl text-justify font-thin">{{$info['description']}}</p> 
        </div>
        
        <div class="flex mt-4 justify-center ">
          
            <img style="height: 300px" class="md:inline hidden"  src="{{ asset('storage/otherimages/'.$info['path']) }}" alt="Example Image">
                
           
        </div>
     
     
       
       
       
    </div>
    <div class="grid md:grid-cols-1  ">
        <div class="md:text-3xl text-lg font-bold pt-8 pl-12 " >Pool-Prize: <span class="text-2xl font-thin">{{$info['prize']}}</span>   <br>
        </div>
        <div class="grid md:grid-cols-1 gap-4 md:mt-2.5  ">
            <div class="md:text-3xl text-lg font-bold pt-8 pl-12 " >Venue:<span class="text-2xl font-thin">{{$info['Venue']}}</span> <br>
            </div>
        <div class="grid md:grid-cols-1 gap-4 md:mt-2.5  ">
            <div class="md:text-3xl text-lg font-bold  pt-8 pl-12 " >Time:<span class="text-2xl font-thin">{{$info['time']}}</span> <br>
            </div>
            
        <div class="grid md:grid-cols-1 gap-4 md:mt-2.5  ">
            <div class="md:text-3xl text-lg font-bold  pt-8 pl-12 " >Status:<span class="text-2xl font-thin">{{$info['status']}}</span> <br>
            </div>
        <div class="grid md:grid-cols-1 gap-4 md:mt-2.5  ">
            <div class="md:text-3xl mb-4 text-lg font-bold  pt-8 pl-12 " >Registeration-Link:<span class="text-2xl font-thin">{{$info['link']}}</span> <br>
            </div>
       
     
       
       
       
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>

</html>