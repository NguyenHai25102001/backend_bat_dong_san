<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        @foreach(config('sidebar.admin') as $key => $value)

            <li class="nav-item">
                @if(isset($key_menu))
                    <div class="nav-link  @if(isset($key_menu)&& $key!==$key_menu ) collapsed @endif"
                         data-bs-target="#nav-sidebar{{$loop->iteration}}" data-bs-toggle="collapse">
                        <i class="bi bi-menu-button-wide"></i><span>{{$key}}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </div>
                @else
                    <div class="nav-link collapsed"
                         data-bs-target="#nav-sidebar{{$loop->iteration}}" data-bs-toggle="collapse">
                        <i class="bi bi-menu-button-wide"></i><span>{{$key}}</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </div>
                @endif


                <ul id="nav-sidebar{{$loop->iteration}}"
                    class="nav-content collapse @if(isset($key_menu)&& $key===$key_menu ) show @endif"
                    data-bs-parent="#sidebar-nav">
                    @foreach($value as $v=> $item)
                        @if(isset($name))
                            <li>
                                <a href="{{ route($item['route'])}}" class="@if($item['name'] === $name) active @endif">
                                    <i class="bi bi-circle"></i><span>{{$item['name']}}</span>
                                </a>
                            </li>
                        @else
                            <li>

                                <a href="{{ route($item['route']??'null')}}" class="">
                                    <i class="bi bi-circle"></i><span>{{$item['name']}}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </li><!-- End Components Nav -->

        @endforeach


    </ul>

</aside>
