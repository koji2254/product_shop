<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.tailwindcss.com"></script>
   <title>My Products</title>
</head>
<body>
   <nav class="p-5 border flex justify-between items-center">
      <div class="font-bold">
         <h1><a href="/"><i class="fa-solid fa-store"></i> Products Tracker</a></h1>
      </div>
      <div class="">
         <ul class="flex justify-between items-center gap-3">
            @auth
               <li><a href="/manage-products" class="text-sm p-2 border hover:bg-gray-200">My Products</a></li>
               <li>
                  <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <button type="submit" class="text-sm p-2 border hover:bg-gray-200 text-red-400">Logout</button>
                 </form>
               </li>
            @else
               <li><a href="/login" class="text-sm p-2 border hover:bg-gray-200">Login</a></li>
               <li><a href="/register" class="text-sm p-2 border hover:bg-gray-200">Register</a></li>
            @endauth
            
            
         </ul>
      </div>
   </nav>