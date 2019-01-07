<header class="header">
  <a class="header-logo" href="/">Agilla CP</a>
  <button class="btn btn-icon header-menu-toggle">
    <i class="icon icon-male-user"></i>
  </button>
  <h1 class="title header-title">Объявления</h1>
  <div class="dropdown header-user">
    <button class="btn btn-link header-user-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="icon icon-male-user"></i><span class="text">Jaloliddin Kholmatov</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="{{ route('profile') }}">Профиль</a>
      <a class="dropdown-item" title="Выйти" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
       {{ __('Выйти') }}
    </a>
    </div>
  </div>
  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
</header>