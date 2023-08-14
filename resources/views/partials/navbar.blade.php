<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class=" mx-3 nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === 'Kategori') ? 'active' : '' }}" href="/kategori" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/kategori/pemasukan">List Kategori</a></li>
              <li><a class="dropdown-item" href="/kategori/create">Tambah Kategori</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($title === 'Transaksi') ? 'active' : '' }}" href="/transaksi" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Transaksi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/transaksi/list">List Transaksi</a></li>
              <li><a class="dropdown-item" href="/transaksi/create">Tambah Transaksi</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>