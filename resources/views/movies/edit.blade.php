<x-layout>

    @include('partials._navbar')
    {{--  --}}
    <x-main>
        <x-col>
            {{-- Bar --}}
            <x-mini-bar>
                Update Movie
            </x-mini-bar>
            {{-- FORM --}}
            <form method="post" action="http://localhost:8012/MoviePanel/public/movies/{{$movie->id}}"  data-aos="fade-down" class="mt-3">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label>Title <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $movie->title }}">
                    @error('title')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group  mb-3">
                    <label>Year <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Year" value="{{ $movie->year }}" name="year">
                    @error('year')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group  mb-3">
                    <label>Rating</label>
                    <input type="number" step="0.1" value="{{ $movie->rating }}" class="form-control" placeholder="Rating" name="rating" >
                    @error('rating')
                    <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-check  mb-3">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" @checked($movie->watchit=="1") name="watchit">Watch it?
                    </label>
                </div>
                <div class="form-group mt-3">
                    
                    <button type="submit" class="btn btn-add">Update Movie</button>
                </div>
        
            </form>
            {{-- FORM --}}
        </x-col>
       
    </x-main>
    {{--  --}}
    @include('partials._footer')
</x-layout>

