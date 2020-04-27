@include('layouts.styles')   
    <div  class="col-xl-3 col-lg-4 col-md-6 d-none d-sm-block alert alert-success alert-block ">
        <nav>
            <ul class="header-bottom-list">
                <li >
                    <a  href="{{route('admin.users.list')}}">                            
                        <h4 align="center">Пользователи</h4>      
                    </a>
                </li>

                <li >
                    <a href="{{route('admin.products.list')}}">
                        <h4 align="center">Продукты</h4>
                    </a>
                </li>

                <li >
                    <a href="{{route('admin.categories.list')}}">
                        <h4 align="center">Категории</h4>
                    </a>
                </li>

                <li >
                    <a href="{{route('admin.articles.list')}}">
                        <h4 align="center">Статьи</h4>
                    </a>
                </li>

                <li >
                    <a href="{{route('admin.orders.list')}}">
                        <h4 align="center">Заказы</h4>
                    </a>
                </li>
            </ul>            
        </nav>
    </div> 

