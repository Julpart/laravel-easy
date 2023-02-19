<li class="nav-item"><a class="nav-link" {{request()->routeIs('index')?' active':''}} href="{{route('index')}}">Новости </a></li>
<li class="nav-item"><a class="nav-link" {{request()->routeIs('admin.index')?' active':''}} href="{{route('admin.index')}}">Админка </a></li>
<li class="nav-item"><a class="nav-link" {{request()->routeIs('admin.getImage')?' active':''}} href="{{route('admin.getImage')}}">Скачать изображение </a></li>
<li class="nav-item"><a class="nav-link" {{request()->routeIs('admin.getNews')?' active':''}}  href="{{route('admin.getNews')}}">Скачать новости </a></li>
<li class="nav-item"><a class="nav-link" {{request()->routeIs('admin.create')?' active':''}}  href="{{route('admin.create')}}">Создать новость </a></li>
