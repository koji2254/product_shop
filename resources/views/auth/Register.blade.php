@include('components.NavBar')

   
<div class="w-full mt-5">
   <div class="w-96 border rounded p-5 m-auto">
      <div class="flex flex-col items-start gap-2">
         <h2 class="font-medium text-2xl not-italic leading-9">Register</h2>

         <form action="/auth-register" class="w-full" method="POST">
            @csrf
            <!-- Name Input -->
            <div class="">
               <label for="name" class="text-sm non-italic">Name</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="text" name="name" value="{{ old('name') }}">
               @error('name')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>

            <!-- Email Input -->
            <div class="mt-2">
               <label for="email" class="text-sm non-italic">Email</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="email" name="email" value="{{ old('email') }}">
               @error('email')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>
            <!-- Phone Input -->
            <div class="mt-2">
               <label for="number" class="text-sm non-italic">Phone</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="text" name="phone_number" value="{{ old('phone_number') }}">
               @error('email')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>

            <!-- Password Input -->
            <div class="mt-2">
               <label for="password" class="text-sm non-italic">Password</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="password" name="password">
               @error('password')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>

            <!-- Confirm Password Input -->
            <div class="mt-2">
               <label for="password_confirmation" class="text-sm non-italic">Confirm Password</label>
               <input class="w-full p-1 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-primary" 
                      type="password" name="password_confirmation">
               @error('password_confirmation')
                  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
               @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-3">
               <button class="w-full p-2 h-10 bg-blue-900 rounded text-white font-semibold hover:bg-blue-950">
                  Register
               </button>
            </div>

            <!-- Links -->
            <div class="flex items-center justify-between mt-2">
               <a href="/login" class="text-sm font-mono underline hover:bg-gray-100">Already have an account?</a>
               {{-- <a href="/forgot-password" class="border p-0.5 text-xs rounded bg-gray-100 hover:underline">Forgot password?</a> --}}
            </div>
         </form>
      </div>
   </div>
</div>
