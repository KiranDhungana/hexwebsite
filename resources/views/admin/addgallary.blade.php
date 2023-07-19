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
   
   <div class="p-4 sm:ml-64">
     <form method="POST" action="/addgallary" enctype="multipart/form-data">
    @csrf
  
  
    <div class="mb-6">

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>

        <input  multiple class="form-control" name="image"  class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 cursor-pointer block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="file_input_help" id="file_input" type="file" required>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
        
    </div> 
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
       </form>
       @if (Session::has('imgmsg'))
       <p>
       
           <div id="message"  style=" display:none, color:green ; font-weight:bold"> {{Session::get('imgmsg')}}</div>
        
       </p>
      
           
       @else
           
       @endif
 
 
</div> 
<script>
      setTimeout(function() {
      document.getElementById("message").style.display = "block";
    }, 0);
  
    // Hide the message after 5 seconds
    setTimeout(function() {
      document.getElementById("message").style.display = "none";
    }, 2000);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>
</html>