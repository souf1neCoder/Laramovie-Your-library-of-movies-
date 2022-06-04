<x-layout>

    @include('partials._navbar')
    {{--  --}}
    <x-main>
        @include('partials._bar')
        @if (count($movies) > 0)
        <div class="table-responsive table-responsive-sm table-responsive-md">
    
            <table  data-aos="fade-up" class="table table-dark table-striped table-bordered table-hover text-center ">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Year</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Watch-it?</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                
    
                    <tbody>
                        @foreach ($movies as $movie)
                            
                        <tr>
                            <th class="fs-5" scope="row">
                               {{ $movie->title }}
                            </th>
                            <td>
                               {{$movie->year}}
                            </td>
                            <td>
                                {{ $movie->rating ?? '-' }}
                            </td>
                            <td>
                                @if ($movie->watchit)
                                <span class="badge bg-light text-dark">Yes</span>
                                @else
                                <span class="badge bg-secondary">No</span>
                                @endif
                            </td>
                            <td class="d-flex justify-content-center">
                               
                                    <a href="http://localhost:8012/MoviePanel/public/movies/{{$movie->id}}/edit" class="btn-sm btn-g btn-primary"><i class="fa fa-edit"></i></a>
                                
                                <form class="mx-1" action="http://localhost:8012/MoviePanel/public/movies/{{$movie->id}}"  method="post">
                                    @csrf
                                   @method('DELETE')
                                    <button class="btn-sm btn-g btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                                
    
                            </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        @else
            
        <h4 class="no-yet text-center mt-5">No Shows Yet</h4>
        @endif
    


       
    </x-main>
    {{--  --}}
    @include('partials._footer')
</x-layout>

