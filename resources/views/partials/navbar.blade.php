@php
    // Check if the user is authenticated
    $pengguna_id = Auth::check() ? Auth::user()->id : null;
@endphp

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link {{ Request::is('tambahdatabarang*') ? 'active' : '' }}" href="{{ route('tambahdatabarang') }}">Data Barang</a>
    </li>
</ul>