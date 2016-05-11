@if(Sentinel::inRole('arkhangai'))

</li><li {!! (Request::is('admin/sazutailanmayagts') || Request::is('admin/sazutailanmayagts/create') || Request::is('admin/sazutailanmayagts/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Салбар зөвлөлийн тайлан</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/sazutailanmayagts') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/sazutailanmayagts') }}">
                <i class="fa fa-angle-double-right"></i>
                Салбар зөвлөлийн тайлан
            </a>
        </li>
        <li {!! (Request::is('admin/sazutailanmayagts/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/sazutailanmayagts/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Салбар зөвлөлийн маягт бөглөх
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/tsusanbuteegdehuuntailans') || Request::is('admin/tsusanbuteegdehuuntailans/create') || Request::is('admin/tsusanbuteegdehuuntailans/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Цус, цусан бүтээгдэхүүний тайлан</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/tsusanbuteegdehuuntailans') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/tsusanbuteegdehuuntailans') }}">
                <i class="fa fa-angle-double-right"></i>
                Цус, цусан бүтээгдэхүүний тайлан
            </a>
        </li>
        <li {!! (Request::is('admin/tsusanbuteegdehuuntailans/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/tsusanbuteegdehuuntailans/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Цус, цусан бүтээгдэхүүний тайлан оруулах
            </a>
        </li>
    </ul>
</li>
<li {!! (Request::is('admin/hereglesen_tstsb_tasagaars') || Request::is('admin/hereglesen_tstsb_tasagaars/create') || Request::is('admin/hereglesen_tstsb_tasagaars/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Хэрэглэсэн цус, цусан бүтээгдэхүүн</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/hereglesen_tstsb_tasagaars') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/hereglesen_tstsb_tasagaars') }}">
                <i class="fa fa-angle-double-right"></i>
                Хэрэглэсэн цус, цусан бүтээгдэхүүн
            </a>
        </li>
        <li {!! (Request::is('admin/hereglesen_tstsb_tasagaars/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/hereglesen_tstsb_tasagaars/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Хэрэглэсэн цус, цусан бүтээгдэхүүний тайлан оруулах
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/hun_huchnii_tailans') || Request::is('admin/hun_huchnii_tailans/create') || Request::is('admin/hun_huchnii_tailans/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Хүн хүчний тайлан</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/hun_huchnii_tailans') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/hun_huchnii_tailans') }}">
                <i class="fa fa-angle-double-right"></i>
                Хүн хүчний тайлан харах
            </a>
        </li>
        <li {!! (Request::is('admin/hun_huchnii_tailans/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/hun_huchnii_tailans/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Хүн хүчний тайлан оруулах
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/surgaltand_hamragdaltiin_tailans') || Request::is('admin/surgaltand_hamragdaltiin_tailans/create') || Request::is('admin/surgaltand_hamragdaltiin_tailans/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Сургалтанд хамрагдалтын тайлан</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/surgaltand_hamragdaltiin_tailans') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/surgaltand_hamragdaltiin_tailans') }}">
                <i class="fa fa-angle-double-right"></i>
                Сургалтанд хамрагдалтын тайлан харах
            </a>
        </li>
        <li {!! (Request::is('admin/surgaltand_hamragdaltiin_tailans/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/surgaltand_hamragdaltiin_tailans/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Сургалтанд хамрагдалтын тайлан оруулах
            </a>
        </li>
    </ul>
</li>



@endif