<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico">
    <title>Webshop beheer</title>
</head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Webshop</a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="{{ URL::to('admin/products') }}">Producten</a></li>
            <li><a href="{{ URL::to('admin/users') }}">Gebruikers</a></li>
            <li><a href="{{ URL::to('admin/categories') }}">Categorieën</a></li>
            <li><a href="{{ URL::to('admin/orders') }}">Orders</a></li>
             <li><a href="{{ URL::to('admin/menus') }}">Menu</a></li>
          </ul>
        </div>
      </div>
    </div>

    @yield('content')
  </body>
  </html>

    