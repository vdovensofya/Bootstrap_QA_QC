<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Подключение CSS -->
    <link type="text/css" href="dist/Bootstrap.css" rel="stylesheet">
    <title>QA/QC</title>
    <link rel="icon" href="img/logo.jpg" type="image/icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="dist/bootstrap.js"></script>
  </head>
  <body>
<!---------------------------------Вставка хедера-------------------------------------->
<header>
  <?php include 'menu.php'; ?>
 </header>
 <header class="header">
 </header>
 <!-------------------------------------------------------------------------------------->
 <!-- Главная страница -->
<section>
 <div class="bg-image">
   <div class="jumbotron">
      <div class="container text-center animate__animated animate__slideInUp">
        <h1 class="display-6">Список для саморазвития</h1>
      </div>
   </div>
   <!-- Вставка аккордиона для саморазвития-->
   <div class="container">
     <div class="accordion" id="accordionExample">
       <!-- Клад вебинаров -->
       <div class="card">
         <div class="card-header" id="headingOne">
            <h2 class="mb-0">
               <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                 <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg> Клад вебинаров</strong></p>
              </button>
            </h2>
         </div>
          <!-- Ответ о Клад вебинаров -->
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
           <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Открытый вебинар "Автоматизация тестирования в Test IT - API, webhooks и CI/CD" с Михаилом Рябовым
               <a href="https://www.youtube.com/watch?v=OvbSZFhNtk4" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">SQA ANALYST TECHWRITER DAYS (Апрель 2023 плейлист -> Доклады SQA Day#32)
               <a href="https://www.youtube.com/@itconf/playlists" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Glo Academy (*практические уроки и мини-курсы по веб-разработке)
               <a href="https://www.youtube.com/@Glo_Academy/playlists" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              </ul>
          </div>
        </div>
        <!-- Курсы/видео/тренеры -->
       <div class="card">
         <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
               <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                 <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                </svg> Клад видео/тренеры</strong></p>
              </button>
            </h2>
         </div>
          <!-- Ответ о Грейдах компании -->
          <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
           <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Тестировщик с нуля
               <a href="https://www.youtube.com/playlist?list=PLKbJd47Kcbju2Vhi-FL7AI14vItVmGYk-" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Алгоритм Codility
               <a href="https://www.youtube.com/watch?v=vNS2A2pWm3s" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Сodewars
               <a href="https://www.codewars.com/kata/5592e3bd57b64d00f3000047/csharp" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Идеи для проектов для практики навыков программирования
               <a href="https://proglib.io/p/project-list" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">C# для продвинутых
               <a href="https://stepik.org/course/84983/promo#toc" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Введение в базы данных
               <a href="https://stepik.org/course/551/promo" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Начало работы с WPF. Visual Studio
               <a href="https://stepik.org/course/1676/promo" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Алгоритмы: теория и практика. Методы
               <a href="https://stepik.org/course/217/promo" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Многопоточное программирование на С/С++
               <a href="https://stepik.org/course/149/promo" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Программирование на C# 5.0
               <a href="https://stepik.org/course/4143/promo" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Тестирование ПО: Postman для тестирования API
               <a href="https://stepik.org/course/120679/promo" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Тестирование
               <a href="https://stepik.org/course/118842/promo#toc" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Алгоритм обхода бинарного деоева
               <a href="https://www.techiedelight.com/ru/convert-binary-tree-into-doubly-linked-list/" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">compile c# online
               <a href="https://rextester.com/" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Упражнения по SQL
               <a href="https://sql-ex.ru/learn_exercises.php" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Документация по TestIt
               <a href="https://testit.software/product/settings-testing" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Программа для проведнеия нагрузчного тестирования
               <a href="https://jmeter.apache.org/" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">lintcode тренажер по коду
               <a href="https://www.lintcode.com/problem/?typeId=2" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Справочник css
               <a href="https://html5book.ru/css-css3/" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">ASP.NET Core Blazor Lesson
               <a href="https://learn.microsoft.com/ru-ru/aspnet/core/blazor/?view=aspnetcore-7.0" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">blog.stephencleary
               <a href="https://blog.stephencleary.com/" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">A2. Целочисленная арифметика. Выделение цифр в записи числа
               <a href="https://c-sharp.pro/a2-целочисленная-арифметика-выделение/" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Задачи по основам языка C# с решениями
               <a href="https://c-sharp.pro/задачник/" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Руководство. Разработка модулей IoT Edge с помощью Visual Studio Code
               <a href="https://learn.microsoft.com/ru-ru/azure/iot-edge/tutorial-develop-for-linux?view=iotedge-1.4&tabs=csharp&pivots=iotedge-dev-cli" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Учебник. Создание приложения службы Windows
               <a href="https://learn.microsoft.com/ru-ru/dotnet/framework/windows-services/walkthrough-creating-a-windows-service-application-in-the-component-designer" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Test IT
               <a href="https://www.youtube.com/@TestITTMS/playlists" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Интеграция автотестов на Python в Test IT (Automation Demo Day 17/11/2022)
               <a href="https://www.youtube.com/watch?v=1RBRxj48YTQ&t=171s"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Гайд внедрения автоматизации тестирования, если ты рядовой QA инженер
               <a href="https://www.youtube.com/watch?v=LSlF_0LqYAM" class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Автоматизация тестирования на С#
               <a href="https://www.youtube.com/watch?v=elOMruRVvC8"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Gitlab CI/CD | Автоматизация тестирования с нуля
               <a href="https://www.youtube.com/watch?v=dLfqjoE-WNQ"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Docker, непрерывная интеграция и плоская земля / Интервью с DevOps Engineer
               <a href="https://www.youtube.com/watch?v=nrr4IwOVhZk"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Docker для Начинающих - Полный Курс
               <a href="https://www.youtube.com/watch?v=n9uCgUzfeRQ&list=PLqKQF2ojwm3l6OE4-tjLBhUNtJXLebHXP"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Docker с 0 до 100%. Всё, что нужно знать
               <a href="https://www.youtube.com/watch?v=O8N1lvkIjig"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">04 GitLab: Свой Docker Registry. Создание и подключение.
               <a href="https://www.youtube.com/watch?v=G-WmX1um5cc"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">ulearn.me
               <a href="https://ulearn.me/course/basicprogramming/Pervyy_shag_90bcb61e-57f0-4baa-8bc9-10c9cfd27f58"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Codility Number of Disc intersections
               <a href="https://www.youtube.com/watch?v=oftWtDiA0M0"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">.NET DEVELOPER
               <a href="https://itvdn.com/ru/live-online/net-developer"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Уроки C# | Многопоточность. Часть 1.
               <a href="https://itvdn.com/ru/channel/video/it-c-sharp-multithreading-part1"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">restapitutorial
               <a href="https://www.youtube.com/user/restapitutorial"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Брокер сообщений RabbitMQ | Tutorial для начинающих на русском | Урок 3 | Веб интерфейс RabbitMQ
               <a href="https://www.youtube.com/watch?v=aGVJbQwpiaY&list=PLCpsrvs6hImZShRjUbqewZWgjJgU6SIvU&index=7"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Leetcode Паттерны Влад Тен – Алгоритмы Linked List + Two Pointers
               <a href="https://www.youtube.com/watch?v=KOCm7uZPeYw&list=PLCKD2XyZJi6tlvGZhwCdXsXbZ3h3ZWrCR&index=7"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Leetcode Паттерны Влад Тен – Алгоритмы Buy Sell Stock + Cyclic Sort
               <a href="https://www.youtube.com/watch?v=Rn2nRxQExN0&t=991s"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">УЧЕБНЫЕ МАТЕРИАЛЫ ПО ПРОГРАММИРОВАНИЮ, КРЕКИНГУ, HTML, CSS, ОФИСНЫМ ПРИЛОЖЕНИЯМ
               <a href="http://pro.dtn.ru/c-sharp/z1.html"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Весь С# с нуля
               <a href="https://www.youtube.com/watch?v=w8rRhAup4kg"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Графический калькулятор
               <a href="https://www.geogebra.org/graphing"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">ветвление в гит
               <a href="https://learngitbranching.js.org/?locale=ru_RU"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">leetcode
               <a href="https://leetcode.com/problemset/"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Latest Posts
               <a href="https://community.devexpress.com/blogs/"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">Documentation
               <a href="https://docs.devexpress.com/"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
              <li class="list-group-item">100 задач для начинающего программиста на C#
               <a href="http://csharpbook.sakutin.ru/оглавление/"class="btn btn-outline-success float-right">Перейти на ознакомление</a>
              </li>
            </ul>
          </div>
        </div>
        




















      </div>
   </div>
   <br>
  </div>
</section>
 <!---------------------------------Вставка футера-------------------------------------->
 <footer class="footer container-fluid">
  <div class="row">
    <div class="col-md-8 col-xs-2">
    <p>2024. Сделано от Web ОТ для ОТ</p>
    </div>
    <div class="col-md-4 logo">
     <img src="img/brend.png" class="rounded float-end img-fluid" alt="Первая картинка">
     <a href="https://disk.yandex.ru/i/ZFRrVGZLmB5MhA">
       <img src="img/dobrzaim.png" class="rounded float-end img-fluid" alt="Вторая картинка">
     </a>
  </div>
</footer>
 <!-------------------------------------------------------------------------------------->

    <!-- Отдельные JS для Popper и Bootstrap -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
   
  </body>
</html>