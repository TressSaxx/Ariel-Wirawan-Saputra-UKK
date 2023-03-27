@extends('layouts.admin')

@section('title', 'Halaman Dashboard')
    
@section('header', 'Dashboard')

@section('content')
   <div class="text-center">
      <img src="{{asset('images/sekulah.png') }}">
      <h5>Dashboard Admin SMANSA</h5>
   </div>
   <div class="row">
      <div class="col-lg-3">
         <div class="card">
            <div class="card-header">Petugas</div>
            <div class="card-body">
               <a href="{{ route('petugas.index') }}" class="text-center">Detail</a>
               <div class="text-center">
                  {{ $petugas }}
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-header">Masyarakat</div>
            <div class="card-body">
               <a href="{{ route('masyarakat.index') }}" class="text-center">Detail</a>
               <div class="text-center">
                  {{ $masyarakat }}
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-header">Pengaduan Proses</div>
            <div class="card-body">
               <a href="{{route('status.index')}}" class="text-center">Detail</a>
               <div class="text-center">
                  {{ $proses }}
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3">
         <div class="card">
            <div class="card-header">Pengaduan Selesai</div>
            <div class="card-body">
               <a href="{{route('rieut.index')}}" class="text-center">Detail</a>
               <div class="text-center">
                  {{ $selesai }}
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection