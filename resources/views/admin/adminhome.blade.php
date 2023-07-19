<!DOCTYPE html>
<html>
<head>
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>HEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   @include('admin/sidebar')
   @if (Session::has('eventmsg'))
   <p>
   
       <div id="message"  style=" display:none, color:green ; font-weight:bold"> {{Session::get('eventmsg')}}</div>
    
   </p>
  
       
   @else
       
   @endif

  
   <div class="p-4 sm:ml-64">
    
    <div class="flex  justify-center  text-4xl  pb-4 font-bold">Competition Info</div>
    @if (Session::has('updatedmsg'))
    <p>
        <div id="message" style="display: none; color:green ; font-weight:bold">{{Session::get('updatedmsg')}}</div>
     
    </p>
   
        
    @else
        
    @endif
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            
            <tr>
                <th scope="col" class="px-6 py-3">
                    Competition
                </th>
                <th scope="col" class=" px-4 text-right">
                    Action
                </th>
               
            </tr>
        </thead>
        <tbody>
        @foreach ($compdata as $item)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                {{$item['title']}}
            </th>
          
            <td class=" py-4 px-4 text-right">
                <form action="/edit-competation/{{ $item->id }}" method="post">
                    @csrf
                {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                    <button type="submit" style="color: blue" >Edit</button>
                </form>
            </td>
        </tr>
            
        @endforeach
            
            {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr> --}}
        </tbody>
    </table>
</div>

 
</div>
 
 
 
</body>
<script>
    // Display the message after 2 seconds
    setTimeout(function() {
      document.getElementById("message").style.display = "block";
    }, 0);
  
    // Hide the message after 5 seconds
    setTimeout(function() {
      document.getElementById("message").style.display = "none";
    }, 2000);
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</html>