<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                    aria-expanded="false">
                    <i class="fas fa-home" aria-hidden="true"></i>
                    <span class="hide-menu">Home</span>
                </a>
                </li>
                @if(Auth::id() == 1)
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('personils') }}" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Personil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pengajuan.index') }}" aria-expanded="false">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="hide-menu">Pengajuan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('laporan') }}" aria-expanded="false">
                        <i class="fas fa-clipboard-list"></i>
                        <span class="hide-menu">Laporan</span>
                    </a>
                </li>
                @else
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('personil.show') }}" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Data Diri</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('personil.pengajuan') }}" aria-expanded="false">
                        <i class="fas fa-clipboard-list" aria-hidden="true"></i>
                        <span class="hide-menu">Ajukan Kenaikan</span>
                    </a>
                </li>
                @endif
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>