<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            USER MYCLINIC
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ url('tampilan2.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Menu</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('pasien') }}">
                    <i class="material-icons">group</i>
                    <p>Pasien</p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ url('tindakan') }}">
                    <i class="material-icons">add_reaction</i>
                    <p>Tindakan</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('transaksi') }}">
                    <i class="material-icons">point_of_sale</i>
                    <p>Transaksi</p>
                </a>
            </li>
        </ul>
    </div>
</div>
