<?php
ob_start()
?>
<div class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <a href="index.php?chon=t&id=home" class="logo">
                    <img src="./images/logo.svg" alt="shaif's cuisine">
                </a>
                <nav>
                    <div class="nav__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
              <line x1="3" y1="12" x2="21" y2="12" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
                    </div>
                    <div class="nav__bgOverlay"></div>
                    <ul class="nav__list">
                        <div class="nav__close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
                        </div>
                        <div class="nav__list__wrapper">
                            <li><a class="nav__link" href="index.php?chon=t&id=home">Home</a></li>
                            <li><a class="nav__link" href="index.php?chon=t&id=menu">Menu</a></li>
                            <li><a class="nav__link" href="index.php?chon=t&id=about">About</a></li>
                            <li><a class="nav__link" href="index.php?chon=t&id=contact">Contact</a></li>
                            <li id="administration"><a class="nav__link" href="admin.php">Administration</a></li>
                            <li id="signin-btn"><a  class="nav__link" href="index.php?chon=t&id=login">Sign In</a></li>
                            <li><a class="nav__link"  href="index.php?chon=t&id=cart"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a></li>
                            <!-- <li id="signout-btn"style="display: none;"><a  class="nav__link" href="index.php?chon=t&id=logout">Sign out</a></li> -->
                            <li id="signout-btn" class="nav__link-user-icon">
                                <img src="https://inkythuatso.com/uploads/thumbnails/800/2022/05/screenshot-2-09-15-06-54.jpg" alt="" class="nav__link-user-icon-img">
                                <span class=" nav__link nav__link-user-name">
                                   <?php
                                   echo Session::get('name');
                                  ?>
                                  </span>
                                <ul class="nav__link-user-menu">
                                    <li class="nav__link-user-item">
                                        <a class="nav__link"  href="index.php?chon=t&id=logout">Sign out</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
