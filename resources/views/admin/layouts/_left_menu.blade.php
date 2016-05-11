

<ul id="menu" class="page-sidebar-menu">
<li {!! (Request::is('admin') ? 'class="active"' : '') !!}>
        <a href="{{ route('dashboard') }}">
           
            <span class="title"></span>
        </a>
    </li>
    <li {!! (Request::is('admin') ? 'class="active"' : '') !!}>
        <a href="{{ route('dashboard') }}">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Нүүр</span>
        </a>
    </li>


 
 @if(Sentinel::inRole('admin'))


        <li class="active"></li>
                <li><a href="{{URL::to('admin/messages/create')}}">New Message</a></li>

   
      <li {!! (Request::is('admin/messages') || Request::is('admin/messages/create') || Request::is('admin/view_mail') ? 'class="active"' : '') !!}>
        <a href="{{URL::to('admin/messages')}}">
            <i class="livicon" data-name="mail" data-size="18" data-c="#67C5DF" data-hc="#67C5DF"
               data-loop="true"></i>
            <span class="title">И-мэйл </span>
            @include('admin.messenger.unread-count')
        </a>
       
        <ul class="sub-menu">
            <li {!! (Request::is('admin/inbox') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/inbox') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Шуудан хайрцаг
                </a>
            </li>
            <li {!! (Request::is('admin/compose') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/compose') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Захиай бичих
                </a>
            </li>
            <li {!! (Request::is('admin/view_mail') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/view_mail') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Захиа үзэх
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/tasks') ? 'class="active"' : '') !!}>
        <a href="{{ URL::to('admin/tasks') }}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18"
               data-loop="true"></i>
            Хийх зүйлс
            <span class="badge badge-danger" id="taskcount"></span>
        </a>
    </li>
    
    <li {!! (Request::is('admin/users') || Request::is('admin/users/create') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C"
               data-loop="true"></i>
            <span class="title">Хэрэглэгч</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Хэрэглэгчид
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Хэрэглэгч нэмэх
                </a>
            </li>
           <li {!! (Request::is('admin/groups') || Request::is('admin/groups/create') || Request::is('admin/groups/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Бүлэг</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/groups') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/groups') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Бүлгүүд
                </a>
            </li>
            <li {!! (Request::is('admin/groups/create') ? 'class="active" id="active"' : '') !!}>
                <a href="{{ URL::to('admin/groups/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Бүлэг нэмэх
                </a>
            </li>
        </ul>
    </li>
        </ul>
    </li>
   
   
   
    <li {!! ((Request::is('admin/news') || Request::is('admin/news/create') || Request::is('admin/newscategory') || Request::is('admin/newscategory/create')) || Request::is('admin/news_item') || Request::is('admin/news/*') || Request::is('admin/newscategory/*') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="move" data-c="#ef6f6c" data-hc="#ef6f6c" data-size="18"
               data-loop="true"></i>
            <span class="title">Мэдээ</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/news') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/news') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Мэдээ
                </a>
            </li>
            <li {!! (Request::is('admin/newscategory') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/newscategory') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Мэдээний ангилал
                </a>
            </li>
             <li {!! (Request::is('admin/news/create') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/news/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Шинэ мэдээ нэмэх
                </a>
            </li>
            <li {!! (Request::is('admin/news_item') ? 'class="active"' : '') !!}>
                <a href="{{ URL::to('admin/news_item') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Мэдээ дэлгэрэнгүй
                </a>
            </li>
        </ul>
    </li>


    <li {!! (Request::is('admin/pages') || Request::is('admin/pages/create') || Request::is('admin/pages/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Хуудас</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/pages') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/pages') }}">
                <i class="fa fa-angle-double-right"></i>
                Хуудас
            </a>
        </li>
        <li {!! (Request::is('admin/pages/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/pages/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Хуудас нэмэх
            </a>
        </li>
    </ul>
  
  
  @endif 
    <!-- Menus generated by CRUD generator -->
    @include('admin/layouts/menu')
</ul>