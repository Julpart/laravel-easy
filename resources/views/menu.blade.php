<li class="nav-item"><a class="nav-link" {{request()->routeIs('index')?' active':''}} href="{{route('index')}}">Главная </a></li>
<li class="nav-item"><a class="nav-link" {{request()->routeIs('admin.index')?' active':''}} href="{{route('admin.index')}}">Админка </a></li>
<li class="nav-item"><a class="nav-link" {{request()->routeIs('news.index')?' active':''}} href="{{route('news.index')}}">Новости </a></li>
<li class="nav-item"><a class="nav-link" {{request()->routeIs('categories')?' active':''}}  href="{{route('categories')}}">Категории </a></li>

