<div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li class="sidebar-brand">
                  <a href="#">
                  {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                  </a>
              </li>
              <li>
                  <a href="newProductOrder">New product order</a>
              </li>
              <li>
                  <a href="productList">Product list</a>
              </li>
              <li>
                  <a href="issueSlips">Issue slips</a>
              </li>
              <li>
                <a href="logout">Signout</a>
            </li>
          </ul>
      </div>
      
    <div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Application</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        
      </div>
    </div>
  </nav>