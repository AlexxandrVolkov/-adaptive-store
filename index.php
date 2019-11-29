<?php
    require_once "includes/config.php"
?><!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="/style/stylenew.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="mmenu.css" />
	<link type="text/css" rel="stylesheet" href="demo.css" />
    <link rel="shortcut icon" href="/img/fav.png" type="image/png">
    <title>КУПИТЕ</title>

</head>
<body>


			<div class="mm-page mm-slideout">

<div class="top-bar">
    <div class="wrapper">
		<nav>
			<ul class="top-menu">
				<li><a href="#">О компании</a></li>
				<li><a href="#">Доставка</a></li>
				<li><a href="#">Оплата</a></li>
				<li><a href="#">Сервис</a></li>
				<li><a href="#">Возврат</a></li>
				<li><a href="#">Статьи</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</nav>
    </div>
</div>
<header>


<div class="head-bar">
    <div class="wrapper">
        <div class="head-bar-block">


		<div class="burger">
				<a href="#menu"><span></span></a>

			</div>
			<nav id="menu">
				<ul>
					<li><span>Продукция</span>
						<ul>
							<li><span>Группа товаров</span>
								<ul>
									<li><a href="/wp">Новости</a></li>
									<li><a href="#">Товар2</a></li>
								</ul>
								<li><span>Группа товаров</span>
								<ul>
									<li><a href="#">Товар3</a></li>
									<li><a href="#">Товар4</a></li>
								</ul>
							<li><a href="#">ИБП и батареи</a></li>
							<li><a href="#">Прочая техника</a></li>
							<li><a href="#">Услуги</a></li>
							</li>
						</ul>
					</li>
					<li><a href="#">О компании</a></li>
					<li><a href="#">Доставка</a></li>
					<li><a href="#">Оплата</a></li>
					<li><a href="#">Сервис</a></li>
					<li><a href="#">Возврат</a></li>
					<li><a href="#">Статьи</a></li>
					<li><a href="#">Контакты</a></li>

				</ul>

			</nav>


		<!-- mmenu scripts -->
		<script src="mmenu.polyfills.js"></script>
		<script src="mmenu.js"></script>
		<script>
			new Mmenu( document.querySelector( '#menu' ));

			document.addEventListener( 'click', function( evnt ) {
				var anchor = evnt.target.closest( 'a[href^="#/"]' );
				if ( anchor ) {
					alert('Thank you for clicking, but that\'s a demo link.');
					evnt.preventDefault();
				}
			});
		</script>

<a href="/"><img class="icon-img" src="img/newsvg/logo.svg" alt="icon"></a>


            <div class="search-area">
                <form action="#" method="get" onsubmit="alert('submit!');return false">
                <input type="text" placeholder="Поиск по товарам">
                <button type="submit"></button>
                </form>
            </div>

            <div class="phone-timetable">
				<p class="phone">8 (000) 000-00-00</p>
				<p class="timetable">9.00 - 20.00 ежедневно</p>
            </div>

            <div class="bnt-icon">

            <a class="statistics head-icon" href="#">0</a>
            <a class="like head-icon" href="#">6</a>
            <a class="basket head-icon" href="#">17</a>

            </div>
        </div>
    </div>
</div>



<div class="navig ">
		<ul class="navigation wrapper">
			<li class="nav-btn nav-btnP"><a href="">Наша продукция</a></li>
			<li class="nav-btn"><a href="">Группа товаров1</a></li>
			<li class="nav-btn"><a href="">Группа товаров2</a></li>
			<li class="nav-btn"><a href="">Группа товаров3</a></li>
			<li class="nav-btn"><a href="">Группа товаров4</a></li>
			<li class="nav-btn"><a href="/wp">Новости компании</a></li>
			<li class="nav-btn"><a href="">Прочая техника</a></li>
			<li class="nav-btn"><a href="">Наши услуги</a></li>
			<li class="nav-btn nav-btn-Action"><a href="">Акции месяца</a></li>
		</ul>
	</div>

</header>

	<div class="content">

    <div class="point">
	<div class="wrapper">
	<a href="">Главная</a> → <a href="">Статьи</a></div>
    </div>

	<div class="wrapper"><h1>Полезная информация</h1></div>



 <div class="pagin-block wrapper">
<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $notesOnPage = 6;
    $from = ($page - 1)* $notesOnPage;

    $articles = mysqli_query($connection, "SELECT * FROM `articles` LIMIT $from,$notesOnPage");

     $articles = "SELECT COUNT(*) as count FROM articles";
     $result = mysqli_query($connection, $articles) or die(mysqli_error($connection) );
     $count = mysqli_fetch_assoc($result)['count'];
     $pagesCount = ceil($count / $notesOnPage);

     for ($i = 1; $i <= $pagesCount; $i++) {
        if ($page == $i) {
            echo "<a href=\"?page=$i\" class=\"active pagin-btn\">$i</a>";
        } else {
        echo "<a href=\"?page=$i\" class=\"noActive pagin-btn\">$i</a>";
     }
    }
?>
</div>
<div class="wrapper">
<?php
$articles = mysqli_query($connection, "SELECT * FROM `articles` LIMIT $from,$notesOnPage");
    while( $art = mysqli_fetch_assoc($articles) )
    {
        ?>

        <article class="goods-item">
			<div class="goods-img">
			<a href="/"><img src="/img/<?php echo $art['image']; ?>" alt="img"></a>
			</div>
            <div class="article-info">
              <div class="goods-title"><?php echo $art['title']; ?></div>
              <div class="goods-descrip"><?php echo mb_substr($art['description'], 0, 300, 'utf-8'); ?></div>
            </div>
		</article>


          <?php
    }
    ?>
</div>
</div>


<div class="pagin-block wrapper pagin-block-bottom">
<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $notesOnPage = 6;
    $from = ($page - 1)* $notesOnPage;

    $articles = mysqli_query($connection, "SELECT * FROM `articles` LIMIT $from,$notesOnPage");

     $articles = "SELECT COUNT(*) as count FROM articles";
     $result = mysqli_query($connection, $articles) or die(mysqli_error($connection) );
     $count = mysqli_fetch_assoc($result)['count'];
     $pagesCount = ceil($count / $notesOnPage);

     for ($i = 1; $i <= $pagesCount; $i++) {
        if ($page == $i) {
            echo "<a href=\"?page=$i\" class=\"active pagin-btn\">$i</a>";
        } else {
        echo "<a href=\"?page=$i\" class=\"noActive pagin-btn\">$i</a>";
     }
    }
?>
</div>


<footer >
	<div class="wrapper">
		<div class="fott-flex">

<div class="foot-elem foot1">
	<ul>
		<li >г.Москва ул. Пушкина д. Колотушкина</li>
		<li >mihalichgyc@gmail.ru</li>
		<li >8 (000) 000-00-00 </li>
		<li ><a href="/" class="contact"> контакты </a></li >
	</ul>
</div>
<div class="foot-elem foot2">
	<ul>
		<li>Режим работы: </li>
		<li>Пн-чт с 8.00 до 19.00 </li>
		<li>Пт с 8.00 до 17.00 </li>
		<li>Сб с 10.00 до 15.00 </li>
		<li>Вс (по предварительной договоренности).</li>
	</ul>
</div>
<div class="foot-elem foot3">
<div class="wrap">
<ul>
<a href="#"><li>О комании</li></a>
<a href="#"><li>Акции</li></a>
<a href="#"><li>Доставка</li></a>
<a href="#"><li>Оплата</li></a>
<a href="#"><li>Сервис</li></a>
<a href="#"><li>Возврат</li></a>
</ul>
<a href="/" class="foot-pol"> Политика обработки персональных данных  </a>
</div>
</div>
<div class="foot-elem foot-end">
<div><img class="foot-img" src="/img/boy.png" alt="phone" ><div>
			<a class="img-text"> Pазработка <br>и продвижение сайта</a>
</div>
</div>
</div>
</footer>
</div>
</body>
</html>