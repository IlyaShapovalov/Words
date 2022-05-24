<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;200;300;400;500;600;700&family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>GRACEFUL WORDS</title>
    <link rel="stylesheet" href="/index.css">
</head>
<body>
    <main class="container">
        <header>
            <nav>
                <ul class="flex navigation underline fs-700 ff-cond">
                    <li <?= current_page() == 'index' ?  'class="active"' : '' ?> ><a href="/index.php">HOME</a></li>
                    <li <?= in_array (current_page(), array('admin', 'edit', 'delete', 'create') )?  'class="active"' : '' ?> ><a href="/admin/admin.php">ADMIN</a></li>
                </ul>
            </nav>
            <div>
                <h1 class="flex title ff-fancy fs-900 ">GRACEFUL WORDS</h1>
            </div>
        </header>
        <div class="bg-light switch">
           <div class="grid-wraper flex">
                <div class="ff-fancy fc-main fs-500 letter-spacing-2 switch-title">connected data source:</div>
                </div>
            <div <?= $view_bag['data_source'] == 'db' ? 'class="switch-lamp-mysql bg-main"':''?>></div>
            <div class="switch-json ff-cond fs-600">MYSQL</div>
            <div <?= $view_bag['data_source'] == 'json' ? 'class="switch-lamp-json bg-main"':''?>></div>
            <div class="switch-mysql ff-cond fs-600">JSON</div>
            <form class="switch-form" action="" method="post">
                <input type="hidden" value="switch" name="switch"/>
                <input class="switch-submit fs-600" type="submit" value="SWITCH"/>
            </form>
        </div>
        <?php if (in_array (current_page(), array('admin', 'index'))): ?>
            <div class="search-container flex">
                <form class="flex bg-light search-form" action="" method="GET" >
                    <input class="search-bar bg-light"  placeholder="Search..."  type="text" name="search" id="search">
                    <input type="hidden" value="Search" >
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.7em" height="1.7em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="#f68888" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0z"/></svg>
                </form>
            </div>
        <?php endif?>
        <?php require "$name.view.php"?>
    </main>
</body>
</html>