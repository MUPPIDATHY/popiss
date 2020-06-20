 <!-- ***** Search Form Area ***** -->
 <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{url('/')}}"><!-- <img src="img/core-img/logo.png" alt=""> --><h1>POPIS</h1></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav"style="padding: 6%;">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdwn-toggl" href="/properties" id="navbarDropdown" role="button">Properties </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdwn-tggle" href="/listing" id="navbarDropdown2" role="button" >Listings</a>
                                   
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                                </li>
                            </ul>
                           
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="#"style="border-radius: inherit;padding: 12px" class="btn dorne-btn">+ Add Listings</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->