@extends('components.layout')

@section('content')
  <main>  
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      <x-carousel></x-carousel>
      <h1 class=" font-sans font-semibold mt-10 text-center">HIMPUNAN MAHASISWA TEKNOLOGI REKAYASA PERANGKAT LUNAK</h1>
      <h1 class=" font-sans font-semibold mt-5 text-center">POLITEKNIK NEGERI LAMPUNG</h1>
      <x-Profil-Home></x-Profil-Home>
      <h1 class="text-center font-sans font-bold text-black mt-8">PRESIDIUM 2023</h1>
      <x-presidium-home></x-presidium-home>
      <x-kegiatan-home></x-kegiatan-home>
    </div>  
  </main>
  </div>
@endsection