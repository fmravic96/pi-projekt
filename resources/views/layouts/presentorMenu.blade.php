<div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                </a>
            </li>
            <li>
                <a href="newCustomer">New customer</a>
            </li>
            <li>
                <a href="customerList">Customer list</a>
            </li>
            <li>
                <a href="presentations">Presentations</a>
            </li>
            <li>
                <a href="newOrder">New order</a>
            </li>
            
            <li>
                <a href="editFlyers">Edit flyers/catalog</a>
            </li>
            <li>
                <a href="receipt">Receipt</a>
            </li>
            <li>
                <a href="reviewIssueSlips">Review issue slips</a>
            </li>
            <li>
              <a href="logout">Logout</a>
            </li>
        </ul>
    </div>
      
    <div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/presenter">Shop Office</a>
        </div>
      </div>
    </nav>