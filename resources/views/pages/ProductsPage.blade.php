<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="https://cdn.tailwindcss.com"></script>
   <title>My Products</title>
</head>
<body>
   <nav class="p-5 border flex justify-between items-center">
      <div class="font-bold">
         <h1><a href="/">My Products Tracker</a></h1>
      </div>
      <div class="">
         <ul class="flex justify-between items-center gap-3">
            <li><a href="/login" class="text-sm p-2 border hover:bg-gray-200">Login</a></li>
            <li><a href="/register" class="text-sm p-2 border hover:bg-gray-200">Register</a></li>
         </ul>
      </div>
   </nav>

   <section class="w-full">
      <div class="mx-2 m-auto p-2">
         <div class="cards-container grid grid-cols-2 md:grid-cols-3 gap-3">
            <div class="card border rounded p-2 w-full bg-gray-100 flex items-center gap-2">
               <p class="font-bold text-lg">Products Number 1</p>
               <p class="text-gray-100 rounded bg-red-500 rounded-full p-2">10</p>
            </div>
            <div class="card border rounded p-2 w-full bg-gray-100 flex items-center gap-2">
               <p class="font-bold text-lg">Products Number 2</p>
               <p class="text-gray-100 rounded bg-red-500 rounded-full p-2">10</p>
            </div>
            <div class="card border rounded p-2 w-full bg-gray-100 flex items-center gap-2">
               <p class="font-bold text-lg">Products Number 3</p>
               <p class="text-gray-100 rounded bg-red-500 rounded-full p-2">10</p>
            </div>
         </div>
      </div>
   </section>


</body>
</html>