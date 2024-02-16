<x-boot>
@include('profile.partials.nav') 
<x-guest-layout>
  <div class="d-flex justify-content-center ">
    <img src="{{ asset('image/hiire-removebg.png') }}" class="h-10 mb-4" alt=" Logo">
</div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mt-4">
            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Je suis :</label>
        <div class="flex justify-around">
        <div class="flex items-center">
            <input type="checkbox" name="role" value="entreprise" id="option1" class="form-checkbox text-indigo-600 h-5 w-5">
            <label for="option1"  class="ml-2 text-sm font-medium text-gray-900 dark:text-white">Entreprise</label>
          </div>
          <div class="flex items-center mt-2">
            <input type="checkbox" name="role" value="chercheur" id="option2" class="form-checkbox text-indigo-600 h-5 w-5">
            <label for="option2" class="ml-2 text-sm font-medium text-gray-900 dark:text-white">Candidat</label>
          </div>
        </div>
        <x-input-error :messages="$errors->get('role')" class="mt-2" />
       </div>
 
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
      $('input[type="checkbox"]').not(this).prop('checked', false);
    });
  });
</script>

</x-guest-layout>
</x-boot>

