<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="/">ElSig</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Каталог</a></li>
                <li><a href="#">Как оформить заказ</a></li>
                <li><a href="#">Вики</a></li> 
                <li><a href="#">Б/у</a></li> 
                <li><a href="#">Сервис</a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>

                    <a href="{{ route('product.shoppingCart') }}">
                        <span class="glyphicon glyphicon-shopping-cart"></span> 
                        Корзина 
                        <span class=" label label-success">{{ Session::has('cart') ? Session::get('cart')->totalQ : '' }}</span>
                    </a>

                </li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Регистрация</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Войти</a></li>
            </ul>
        </div>
    </div>
</nav>