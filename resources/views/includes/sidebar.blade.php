<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="{{ asset('images/ico.png') }}" alt="" style="height: 100px; width: 100px" />
            </a>
            <h3><b>Toko Mas Woko</b></h3>
            <p><u>Belanja Puas Harga Pas</u></p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="/user/transaksi" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-home"></i>
                        <span class="mini-dn">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-database"></i>
                        <span class="mini-dn">Master</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="inbox.html" class="dropdown-item">User</a>
                        <a href="view-mail.html" class="dropdown-item">Barang</a>
                        <a href="compose-mail.html" class="dropdown-item">Pembeli</a>
                        <a href="compose-mail.html" class="dropdown-item">Supplier</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('transaksi') }}" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-cart-plus"></i>
                        <span class="mini-dn">Transaksi Penjualan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-shopping-basket"></i>
                        <span class="mini-dn">Transaksi Pembelian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-list-alt"></i>
                        <span class="mini-dn">Laporan</span>
                        <span class="indicator-right-menu mini-dn">
                            <i class="fa indicator-mn fa-angle-left"></i>
                        </span>
                    </a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="compose-mail.html" class="dropdown-item">Lap. Penjualan</a>
                        <a href="compose-mail.html" class="dropdown-item">Lap. Pembelian</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
