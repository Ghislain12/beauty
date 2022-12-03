@section('title', 'Mon profil')
<div class="flex flex-col min-h-screen py-12 sm:px-6 lg:px-8">
    <div class="text-center mt-5 ">
        @if ($user->avatar == null)
        <img src="{{ 'https://ui-avatars.com/api/?background=0000FF&color=ffff/?uppercase=true&name=' . Auth::user()->name. '+' . Auth::user()->firstname}}"
            class="rounded-full w-32 mb-4 mx-auto" alt="Avatar" />
        @else
        <img src="{{ asset('image/'.Auth::user()->image) }}" class="rounded-full w-32 mb-4 mx-auto" alt="Avatar" />
        @endif
        <h5 class="text-xl font-medium leading-tight mb-2 uppercase">{{ $user->name }} {{ $user->firstname }}</h5>
        {{-- <p class="text-gray-500">Web designer</p> --}}
    </div>
</div>