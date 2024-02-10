<nav class="navbar navbar-expand-lg navbar-light px-5">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="description of myimage">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">
        <div class="navbar-nav mr-auto">
          <!-- Empty div for logo on the left -->
        </div>
        <div>
          <ul class="navbar-nav justify-content-end" style="padding-top: 10px;">
            <li class="nav-item">
              <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Merchandise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <div class="top-nav  d-flex align-items-center">
              <li class="nav-item pe-3">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault">colour mode</label>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-0" href="#">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </div>
          </ul>
          <ul class="navbar-nav fs-5">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="megaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Applications</a>
              <div class="dropdown-menu mega-menu" aria-labelledby="megaMenu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="mega-menu-column">
                        <h5>Speach and Accessibility</h5>
                        <ul>
                          <li>
                            <a href="{{ route('tts') }}">Text to speach</a>
                          </li>
                          <li>
                            <a href="{{ route('sound') }}">Sound Board</a>
                          </li>
                          <li>
                            <a href="#">Emergency Info</a>
                          </li>
                          <li>
                            <a href="#">Picture show</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mega-menu-column">
                        <h5>United States of America</h5>
                        <ul>
                          <li>
                            <a href="#">Link 5</a>
                          </li>
                          <li>
                            <a href="#">Link 6</a>
                          </li>
                          <li>
                            <a href="#">Link 7</a>
                          </li>
                          <li>
                            <a href="#">Link 8</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mega-menu-column">
                        <h5>South Africa</h5>
                        <ul>
                          <li>
                            <a href="#">Link 9</a>
                          </li>
                          <li>
                            <a href="#">Link 10</a>
                          </li>
                          <li>
                            <a href="#">Link 11</a>
                          </li>
                          <li>
                            <a href="#">Link 12</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Learning Environment</a>
            </li>
            <!-- Mega Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="megaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
              <div class="dropdown-menu mega-menu" aria-labelledby="megaMenu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="mega-menu-column">
                        <h5>United Kingdom</h5>
                        <ul>
                          <li>
                            <a href="#">Link 1</a>
                          </li>
                          <li>
                            <a href="#">Link 2</a>
                          </li>
                          <li>
                            <a href="#">Link 3</a>
                          </li>
                          <li>
                            <a href="#">Link 4</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mega-menu-column">
                        <h5>United States of America</h5>
                        <ul>
                          <li>
                            <a href="#">Link 5</a>
                          </li>
                          <li>
                            <a href="#">Link 6</a>
                          </li>
                          <li>
                            <a href="#">Link 7</a>
                          </li>
                          <li>
                            <a href="#">Link 8</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mega-menu-column">
                        <h5>South Africa</h5>
                        <ul>
                          <li>
                            <a href="#">Link 9</a>
                          </li>
                          <li>
                            <a href="#">Link 10</a>
                          </li>
                          <li>
                            <a href="#">Link 11</a>
                          </li>
                          <li>
                            <a href="#">Link 12</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- End Mega Menu -->
          </ul>
        </div>
      </div>
    </nav>