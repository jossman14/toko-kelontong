<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="{{ asset('images/logo.png') }}" alt="" style="height: 150px; width: 150px" />
            </a>
            <h3><b>Toko Mas Woko</b></h3>
            <p><b><u>Belanja Puas Harga Pas</u></b></p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="{{ route('index') }}" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle">
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
                        <a href="" class="dropdown-item">User</a>
                        <a href="{{ route('barang.index') }}" class="dropdown-item">Barang</a>
                        <a href="{{ route('pembeli.index') }} " class="dropdown-item">Pembeli</a>
                        <a href="{{ route('supplier.index') }}" class="dropdown-item">Supplier</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('penjualan.index') }}" role="button" aria-expanded="false"
                        class="nav-link dropdown-toggle">
                        <i class="fa big-icon fa-cart-plus"></i>
                        <span class="mini-dn">Transaksi Penjualan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
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
                        <a href="" class="dropdown-item">Lap. Penjualan</a>
                        <a href="" class="dropdown-item">Lap. Pembelian</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
