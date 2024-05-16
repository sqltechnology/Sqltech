<!-- class="bi me-2" width="40" height="32" role="img" -->
<? echo $_COOKIE['sqpass'] ?>
<header class="p-3 mb-3 border-bottom"> 
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <svg width="80px" height="72px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    
    
          <defs>

          </defs>
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Dribbble-Light-Preview" transform="translate(-380.000000, -4679.000000)" fill="#000000">
                <g id="icons" transform="translate(56.000000, 160.000000)">
                    <path d="M342,4527 L326,4527 L326,4537 L330,4537 L330,4535 L338,4535 L338,4537 L342,4537 L342,4527 Z M344,4525 L344,4527 L344,4537 L344,4539 L336,4539 L336,4537 L332,4537 L332,4539 L324,4539 L324,4537 L324,4527 L324,4525 L326,4525 L333,4525 L333,4523 L333,4521 L338,4521 L338,4519 L340,4519 L340,4521 L340,4523 L335,4523 L335,4525 L342,4525 L344,4525 Z M336,4529 L336,4531 L336,4533 L340,4533 L340,4531 L340,4529 L336,4529 Z M328,4529 L332,4529 L332,4531 L332,4533 L328,4533 L328,4531 L328,4529 Z" id="game_controller-[#800]">

                    </path>
                </g>
            </g>
        </g>
    </svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Новые посты</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Избранные посты</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Создать вопрос</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis"></a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Поиск в сообществе..." aria-label="Search">
        </form>
        <? if (isset($_COOKIE['sqpass'])):?>
          <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
        <? else: ?>

          <a href="/registration" class="btn btn-info" role="button">Войти</a>

        <? endif ?>
        
      </div>
    </div>
  </header>