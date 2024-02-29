<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('banner')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Banner</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('announcement')}}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Pengumuman</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('agenda')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Agenda</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('umkm')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>UMKM</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('resident')}}">
    <i class="fas fa-fw fa-table"></i>
    <span>User (warga)</span></a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#keuangan"
        aria-expanded="true" aria-controls="keuangan">
        <i class="fas fa-fw fa-cog"></i>
        <span>Keuangan</span>
    </a>
    <div id="keuangan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buttons.html">Total</a>
            <a class="collapse-item" href="buttons.html">Pemasukan</a>
            <a class="collapse-item" href="cards.html">keluaran</a>
        </div>
    </div>
</li>

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pelayanan"
        aria-expanded="true" aria-controls="pelayanan">
        <i class="fas fa-fw fa-cog"></i>
        <span>Layanan warga</span>
    </a>
    <div id="pelayanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buttons.html">Masalah</a>
            <a class="collapse-item" href="cards.html">Dikerjakan</a>
            <a class="collapse-item" href="cards.html">Selesai</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report"
        aria-expanded="true" aria-controls="report">
        <i class="fas fa-fw fa-cog"></i>
        <span>Report</span>
    </a>
    <div id="report" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="buttons.html">Masalah</a>
            <a class="collapse-item" href="cards.html">Dikerjakan</a>
            <a class="collapse-item" href="cards.html">Selesai</a>
        </div>
    </div>
</li>


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->