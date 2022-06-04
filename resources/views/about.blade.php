<x-layout>
    @include('partials._navbar')
    {{--  --}}
    <div class="container">
        <div class="row  justify-content-center  mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12 mt-3">
               <x-mini-bar>
                   About Us
               </x-mini-bar>
                <section  data-aos="fade-down" class="py-4 text-center">
                <p class="about-p">Laramovie is a small project created by soufiane m'channa , dev informatics Student , for improve his skills in PHP & Laravel and apply what he Already learned (CRUD , MVC, OOP) , Thanks for all with &#10084;</p>
                <a target="_blank" href="https://github.com/souf1neCoder" class="btn btn-light mt-3"><i class="fab fa-github"></i> Github</a>
                </section>
            </div>
        </div>
    </div>
      {{--  --}}
      @include('partials._footer')
</x-layout>