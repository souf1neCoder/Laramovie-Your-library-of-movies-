<x-layout>
    @include('partials._navbar')
    {{--  --}}
    <x-main>
        <x-col>
             {{-- Bar --}}
             <x-mini-bar>
                Register
            </x-mini-bar>
            {{-- FORM --}}
            <form method="post" action="{{ route('post_user') }}"   data-aos="fade-down" class="mt-3">
                @csrf
                @method('POST')
                <div class="form-group mb-3">
                    <label>Fullname <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Fullaname" name="fullname">
                    @error('fullname')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Username <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    @error('username')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Email Adress <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Email" name="email">
                    @error('email')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>Password <span>*</span></label>
                    <input type="password" class="form-control" placeholder="Password" name="password" >
                    @error('password')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Confirm Your Password <span>*</span></label>
                    <input type="password" class="form-control" placeholder="Password" name="password_confirmation" >
                    @error('password_confirmation')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-add" name="submit">Register</button>
                </div>
                
            </form>
            <a href="{{ route('register') }}" class="btn-link btn mt-2">Login</a>
        </x-col>
    </x-main>
      {{--  --}}
      @include('partials._footer')
</x-layout>