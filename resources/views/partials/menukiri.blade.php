<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block border-end sidebar collapse fixed-top pt-5 shadow">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="ms-2 me-2 nav nav-pills flex-column">

            <!-- menambahkan foto -->
            <div class="user-panel pb-2 d-flex border-bottom">
                <img src="/gambar/profil.jpg" class="rounded-pill shadow-sm border mb-1 mt-2" width="35" alt="">
                <a href="#" class="text-decoration-none text-dark h6 p-1 mt-2">Halif Fauzy</a>
            </div>

            <li class="nav-item a-menukiri mt-3">
                <a class="nav-link {{ $title === 'Dashboard' ? 'active text-white' : '' }}" aria-current="page"
                    href="dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg> Dashboard
                </a>
            </li>
            <li class="nav-item a-menukiri">
                <a class="nav-link {{ $title === 'Kategoriproduk' ? 'active text-white' : '' }}"
                    href="/kategoriproduk">
                    <span data-feather="file" class="align-text-bottom"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-tags-fill" viewBox="0 0 16 16">
                        <path
                            d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                        <path
                            d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
                    </svg> Kategori Produk
                </a>
            </li>
            <li class="nav-item a-menukiri">
                <a class="nav-link {{ $title === 'Produk' ? 'active text-white' : '' }}" href="/produk">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg> Produk
                </a>
            </li>
            <li class="nav-item a-menukiri">
                <a class="nav-link {{ $title === 'Transaksi' ? 'active text-white' : '' }}" href="/transaksi">
                    <span data-feather="users" class="align-text-bottom"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-currency-dollar" viewBox="0 0 16 16">
                        <path
                            d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                    </svg> Transaksi
                </a>
            </li>
            <li class="nav-item a-menukiri">
                <a class="nav-link {{ $title === 'User' ? 'active text-white' : '' }}" href="/user">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd"
                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                    </svg> User/member
                </a>
            </li>
            <li class="nav-item a-menukiri">
                <a class="nav-link {{ $title === 'Profil' ? 'active text-white' : '' }}" href="/profil">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg> Profil
                </a>
            </li>
        </ul>
    </div>
</nav>
