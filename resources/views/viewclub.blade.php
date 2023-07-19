<html lang="en">
<head>
   
    <meta charset="UTF-8">
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homecard.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/47b6cf0509.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HEX</title>
</head>
<body>
    @include('navbarinner')
    
    <div class="grid md:grid-cols-2 gap-4  md:justify-items-center justify-items-center">
        <div class="md:text-3xl text-lg font-bold  pt-8 pl-12 " >TITLE: <span class="text-2xl font-thin">{{$info['title']}}</span>
            <br>
            <span>{{$info['subdes']}}</span>  <br>
        <p class="md:text-3xl text-base pt-2">
            <p>Description:</p>
           <p class="text-2xl font-thin">{{$info['description']}}</p> 
        </div>
        
        <div class="flex justify-center">
          
            <img style="height: 300px"  src="{{ asset($info['path']) }}" alt="Example Image">
                
           
        </div>
     
     
       
       
       
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
  
</body>

</html>