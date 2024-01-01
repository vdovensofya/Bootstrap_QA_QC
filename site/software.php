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
    <script src="dist/bootstrap.js"></script>
  </head>
  <body>
<!---------------------------------Вставка хедера-------------------------------------->
<header>
 <span class="border-bottom box">
  <?php include 'menu.php'; ?>
 </header>
 <header class="header">
</header>
  <!-------------------------------------------------------------------------------------->
  <!-- Cтраница по ПО Грейды -->
<section>
<div class="bg-image">
   <div class="jumbotron">
      <div class="container text-center">
        <h1 class="display-6">Грейды для ПО 2024г.</h1>
      </div>
   </div>
   <!-- Вставка аккордиона для сервиса -->
   <div class="container">
     <!-- Вопрос о Грейдах компании -->
     <div class="accordion" id="accordionExample">
       <div class="card">
        <div class="card-header" id="headingOne">
             <h2 class="mb-0">
               <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                  </svg> Какие грейды существуют в нашей компании?</strong></p>
               </button>
            </h2>
        </div>
          <!-- Ответ о Грейдах компании -->
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
           <div class="card-body">
              <ul>
                <li>Стажер тестировщик-программист</li>
                <li>Младший тестировщик-программист</li>
                <li>Младший тестировщик-программист 3 категории</li>
                <li>Младший тестировщик-программист 2 категории</li>
                <li>Младший тестировщик-программист 1 категории</li>
                <li>Тестировщик-программист 3 категории</li>
                <li>Тестировщик-программист 2 категории</li>
                <li>Тестировщик-программист 1 категории</li>
                <li>Ведущий тестировщик 3 категории</li>
                <li>Ведущий тестировщик 2 категории</li>
                <li>Ведущий тестировщик 1 категории</li>
              </ul>
          </div>
         </div>
       </div>
     </div>
     <!-- Темы для: Стажер тестировщик-программист -->
     <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Стажер тестировщик-программист</strong></p>
          </button>
        </h2>
      </div>
      <!-- Перечисления тем для для Hard skills Стажер тестировщик-программист-->
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Базовые знания SQL</th>
                <td>Начальный опыт работы SQL, изучение запросов, стандарты языка</td>
                <td>
                  <ul>
                    <li>Работа с наставником, вспомогательная литература в  docpo2</li>
                    <li><a href="http://www.sql-tutorial.ru/ru/content.html">http://www.sql-tutorial.ru/ru/content.html</a></li>
                    <li>\\dc\Develop\Инструкции\Тестировщикам\видео\SQL</li>
                    <li>\\dc\Develop\Обучение\Бизнес-процессы</li>
                  </ul>
                </td>
                <td>Изучены основы C#</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
     </div>
     <!-- Темы для: Младший тестировщик-программист -->
     <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Младший тестировщик-программист</strong></p>
          </button>
        </h2>
      </div>
      <!-- Перечисления тем для для Hard skills Младший тестировщик-программист -->
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <th>Знание техник тест-дизайна</th>
                <td>Выполнение ручных тестов. Знание техник тест-дизайна. Умение работать с разрабатываемым ПО на уровне пользователя, для создания необходимых тестовых условий</td>
                <td>
                  <ul>
                    <li>Работа с наставником, вспомогательная литература в  docpo2</li>
                    <li><a href="https://habr.com/ru/articles/740026/">https://habr.com/ru/articles/740026/</a></li>
                  </ul>
                  </td>
                <td>Использование техник тест-дизайна</td>
              </tr>
              <tr>
                <th>Знание процесса тестирования</th>
                <td>Знание основ и видов тестирования</td>
                <td>
                  <ul>
                    <li><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:standart">Техники тест-дизайна, методы, принципы</a></li>
                    <li><a href="http://www.protesting.ru/testing/testtypes.html">Знание процесса тестирования№1</a></li>
                    <li><a href="https://qalight.ua/ru/baza-znaniy/otkuda-berutsya-oshibki-v-po/">Знание процесса тестирования№2</a></li>
                    <li><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:standart">Знание процесса тестирования№3</a></li>
                    <li><a href="https://roadmap.sh/qa">Дорожные карты по QA Инженеру</a></li>
                  </ul>
                  </td>
                <td>Понимание процесса тестирования, использование в работе</td>
              </tr>
              <tr>
                <th>Понимание Agile</th>
                <td>Внесение документации в TestIT</td>
                <td><a href="https://docs.testit.software/docs">TestIT</a></td>
                <td>Демонстрация знаний на практике</td>
              </tr>
              <tr>
                <th>Знание как работает «Канбан», «Scrum»</th>
                <td>Понимание правил работы с задачами доски. Понимание ролей</td>
                <td>Работа с наставником</td>
                <td>Проведение тестирования задач</td>
              </tr>
              <tr>
                <th>Сборка проектов по готовым сценариям</th>
                <td>Выполнять сборку версии на бой, назначение номера версии</td>
                <td>
                  <ul>
                    <li>Работа с наставником</li>
                    <li><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:tools#%D0%B8%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D0%BF%D0%BE_%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE">Сборка проектов по готовым сценариям</a></li>
                  </ul>
                </td>
                <td>Выпуск тестовой и боевой версии</td>
              </tr>
              <tr>
                <th>Подготовка тестовой документации по готовым требованиям</th>
                <td>Разработка чек-листов, тест-кейсов</td>
                <td><a href="https://docs.testit.software/docs">TestIT</a></td>
                <td>Подготовлена документация по тестированию</td>
              </tr>
              <tr>
                <th>Составление отчетов о результатах тестирования, баг-репорты</th>
                <td>Знание стандартов принятых командой по  баг-репортам, отчетам по результатам тестирования</td>
                <td>Работа с наставником, вспомогательная литература в  docpo2</td>
                <td>Корректное заполнение задач</td>
              </tr>
              <tr>
                <th>Умение работать с ПО и с Сайтом (создание тестовых данных, прохождение некоторых из основных БП)</th>
                <td>Умение работы с ПО с открытым исходным кодом, умени накатывать и откатывать версии ПО. на тестовую группу, назначение тестовой группы.</td>
                <td>Работа с наставником, Изучение БП компании при работе в ПО Займ</td>
                <td>Ведется сопровождение ТГ</td>
              </tr>
              <tr>
                <th>Понимание как ведется разработка UI автотестов ПО Займ</th>
                <td>Знание основ и видов автотестов, разработка автотестов, знание инструмента Ranorex</td>
                <td>
                  <ul>
                    <li>\\dc\Develop\Инструкции\Тестировщикам\видео\Ranorex\</li>
                    <li><a href="https://www.ranorex.com/help/latest/">https://www.ranorex.com/help/latest/</a></li>
                  </ul>
                </td>
                <td>Разработан автотест на UI</td>
              </tr>
              <tr>
                <th>Умение работать с СКВ (TFS, GIT)</th>
                <td>Навыки работы в VIsual Studio, умение работать с TFS,Связь базы с TFS. Рабочие области, Работа с VS tools, Как хранится код с точки зрения Студии. Почему необходимо затягивать модули правильно</td>
                <td>
                  <ul>
                    <li>\\dc\Develop\Инструкции\Тестировщикам\видео\ПО_ЗАЙМ</li>
                    <li><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F1:%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0_tfs">TFS, GIT№1</a></li>
                    <li><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:%D1%81%D0%BF%D0%B5%D1%86%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F1:%D0%B8%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F_tfs">TFS, GIT№2</a></li>
                    <li><a href="https://help.resultforyou.ru/kb.ivp/tree?documentId=295">https://help.resultforyou.ru/kb.ivp/tree?documentId=295</a></li>
                  </ul>
                </td>
                <td>Демонстрация полученных знаний</td>
              </tr>
              <tr>
                <th>Умение работать с инструментом отладки тестируемого окружения</th>
                <td>Умение Debug через select/print по SQL, по VBA умение применять точки остановы и immediate</td>
                <td>Работа с наставником, практика</td>
                <td>Демонстрация полученных знаний</td>
              </tr>
              <tr>
                <th>Знание SQL</th>
                <td>Запросы, стандарты языка, процедуры, функции</td>
                <td>
                  <ul>
                    <li>\\dc.centrzaimov.ru\data\IT\Библиотека\DBA\MSSQL</li>
                    <li>Книга по SQL -> microsoft-sql-server-2012-t-sql</li>
                    <li><a href="https://www.sql-ex.ru/">https://www.sql-ex.ru/</a></li>
                    <li>\\dc\data\Develop\Обучение\Видео\Обучение ТП ПО SQL</li>
                  </ul>
                </td>
                <td>Демонстрация полученных знаний</td>
              </tr>
              <tr>
                <th>Базовое понимание VBA</th>
                <td>Базовые знания VBA, Понимание кода, Понимать ошибки компиляции, Настройка модели</td>
                <td>
                  <ul>
                    <li><a href="https://info-comp.ru/vba">https://info-comp.ru/vba</a></li>
                    <li><a href="http://www.askit.ru/custom/vba_office/m3/03_01_vba_syntax_basics.htm">VBA</a></li>
                  </ul>
                </td>
                <td>Демонстрация знаний на практике</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
     </div>
      <!-- Темы для: Младший тестировщик-программист 3 категории -->
     <div class="card">
      <div class="card-header" id="headingFour">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Младший тестировщик-программист 3 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Младший тестировщик-программист 3 категорией -->
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <th>Составление тех. документации</th>
                <td>Умение создавать различные документы, которые используются в процессе тестирования программного обеспечения</td>
                <td><a href="https://fo-university.ru/dokumentaciya-v-testirovanii?ysclid=lpwlueztcp577945721">Составление тех. документации</a></td>
                <td>Навыки составления тех. документации</td>
              </tr>
              <tr>
                <th>Понимание общей концепции tSQLt</th>
                <td>Изучение синтаксиса. Понимание разработки тестов</td>
                <td>
                  <ul>
                    <li><a href="https://tsqlt.org/full-user-guide/">tSQLt№1</a></li>
                    <li>\\da\data\Видео курсы\Курсы и конференции по ИТ\Тестирование\tsqlt</li>
                  </ul>
                </td>
                <td>Демонстрация полученных знаний на практике</td>
              </tr>
              <tr>
                <th>Умение настраивать сборку проекта</th>
                <td>Умение настроить сборку с нуля. Что делает декомпиляция, Что делает сжатие, Форматы баз (accde/accdb), Как делается и где хранится история сборок, Когда происходит загрузка на FTP</td>
                <td>
                  <ul>
                    <li>\\dc\data\Develop\Инструкции\Тестировщикам\видео\Make MDE и IS Tools\Make MDE и IS Tools.mp4</li>
                    <li>\\dc\data\Develop\Инструкции\Тестировщикам\Передача опыта (видео)\Обучение Тестирование ПО (Затягивание изменений, логи, инструменты).mp4</li>
                    <li><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:standart:%D1%80%D0%B5%D0%B3%D0%BB%D0%B0%D0%BC%D0%B5%D0%BD%D1%82_%D0%B2%D1%8B%D0%BF%D1%83%D1%81%D0%BA%D0%B0_%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D0%B9">Сборка проекта</a></li>
                  </ul>
                </td>
                <td>Ведется сопровождение сборщика</td>
              </tr>
              <tr>
                <th>Разработка автотестов специализированным инструментом UI</th>
                <td>Умение разработать автотест на UI ПО</td>
                <td>Работа с наставником, вспомогательная литература в  docpo2</td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Умение работать со сборщиком MDE (ACCDE)</th>
                <td>Умение работать со сборщиком MDE (ACCDE). Устройство сборки, Алгоритм работы сборщика</td>
                <td>\\dc\Develop\Инструкции\Тестировщикам\видео\Make MDE и IS Tools\Make MDE и IS Tools.mp4</td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Понимание инструмента сборки в IS (ISTool)</th>
                <td>Создание инсталлятора, скрипт InnoSetup, Умение установить сборку с готовыми скриптами .iss и .bat</td>
                <td>\\dc\Develop\Инструкции\Тестировщикам\видео\Make MDE и IS Tools\Make MDE и IS Tools.mp4</td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Знание баз данных, Понимание построения запросов в SQL, инфраструктура</th>
                <td>Понимать как работать с MS SQL и средами разработки, иметь углубленные знания при разработки баз данных и их архитектуры</td>
                <td>\\dc\data\Видео курсы\Курсы и конференции по ИТ\Тестирование\02_[softwaretesting] SQL для тестировщиков (2017)</td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Умение читать логи</th>
                <td>Что это, для чего используется, типы и уровни логов и т.д.</td>
                <td><a href="https://habr.com/ru/companies/yandex_praktikum/articles/739058/">Читать логи</a></td>
                <td>Сотрудник отвечает на контрольные вопросы</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      <!-- Темы для: Младший тестировщик-программист 2 категории -->
     <div class="card">
      <div class="card-header" id="headingFive">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Младший тестировщик-программист 2 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Младший тестировщик-программист 2 категорией -->
      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Курирование начинающих тестировщиков на испытательном сроке</th>
                <td>Передавать знания по процессам, практикам. Выполнять наставническую роль</td>
                <td>Самостоятельный разбор</td>
                <td>Участие в работах по теме</td>
              </tr>
              <tr>
                <th>Сопровождение проектов ПО</th>
                <td>Понимание жизненного цикла задачи, Подключение к работам по проекту, сопровождать после вывода</td>
                <td>Самостоятельный разбор</td>
                <td>Участие в работах по теме</td>
              </tr>
              <tr>
                <th>Разработка базовых автотестов на ХП</th>
                <td>Понимание логики выполнения ХП, знание TSQLT</td>
                <td><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:standart:%D1%82%D1%80%D0%B5%D0%B1%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F_%D0%BA_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D1%83_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F#transact-sql">Разработка базовых автотестов на ХП</a></td>
                <td>Разработаны автотесты</td>
              </tr>
              <tr>
                <th>Понимание построения и использование Rest API запросов</th>
                <td>Знать стили взаимодействия компонентов распределенного приложения в сети. Как использовать в тестировании</td>
                <td><a href="https://vladislaveremeev.gitbook.io/qa_bible/seti-i-okolo-nikh/rest-soap-grpc">Rest API запросы</a></td>
                <td>Ответы на вопросы КТ</td>
              </tr>
              <tr>
                <th>Понимание основ ООП</th>
                <td>Понимать основные концепций, принципы и практики, которые формируют основу для создания программ с использованием этого подхода</td>
                <td><a href="https://fop-site-ditreyw.vercel.app/origins/you-dont-know-oop">Основы ООП</a></td>
                <td>Ответы на вопросы КТ</td>
              </tr>
              <tr>
                <th>CI/CD Pipeline</th>
                <td>Знание настройки pipeline, job и runner</td>
                <td><a href="https://docs.gitlab.com/ee/ci/pipelines/">CI/CD Pipeline</a></td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Умение работать со Swagger</th>
                <td>Умение работать со Swagger</td>
                <td><a href="https://starkovden.github.io/swagger-ui-tutorial.html">Swagger</li></td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Умение анализировать архитектурное решение (простых задач)</th>
                <td>Умение читать чужой код, понимание логики работы кода, умение искать связанный (зависимый) код</td>
                <td>Самостоятельный разбор</td>
                <td>Предложения по результатам анализа</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      <!-- Темы для: Младший тестировщик-программист 1 категории -->
     <div class="card">
      <div class="card-header" id="headingSix">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Младший тестировщик-программист 1 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Младший тестировщик-программист 1 категорией -->
      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Умение интегрировать автотесты в пайплайн (TSQLT)</th>
                <td>Внедрять и использовать автоматизированные тесты, написанные с использованием TSQLT, в процесс разработки и сопровождения баз данных, а также в интеграционные пайплайны CI/CD</td>
                <td>
                  <ul>
                    <li><a href="https://www.youtube.com/watch?v=QuzCKX2fBjk&list=PL_XScYmjXxkfH-8yD6-9eRs9APLYQxwk4&index=37">Автотесты в пайплайн (TSQLT)№1</a></li>
                    <li><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:standart:%D1%82%D1%80%D0%B5%D0%B1%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F_%D0%BA_%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D1%83_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F#transact-sql">Автотесты в пайплайн (TSQLT)№2</a></li>
                  </ul>
                </td>
                <td>Выполнение данных работ на практике</td>
              </tr>
              <tr>
                <th>Понимание bat / bash скриптов</th>
                <td>Знать для чего используются, основной синтаксис</td>
                <td>
                  <ul>
                    <li><a href="https://habr.com/ru/companies/ruvds/articles/325522/">bat / bash скрипты№1</a></li>
                    <li><a href="https://timeweb.cloud/tutorials/windows/bat-fajly-sozdanie-nastrojka-i-osnovnye-komandy">bat / bash скрипты№2</a></li>
                  </ul>
                </td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Самостоятельное исправление мелких багов ПО, доработка ПО</th>
                <td>Уметь анализировать код, предлагать варианты исправления мелких ошибок ПО, самостоятельно их проводить</td>
                <td>Самостоятельный разбор</td>
                <td>Выполнение данных работ на практике</td>
              </tr>
              <tr>
                <th>Знание стандартов UI</th>
                <td>Понимать, что такое UI, как его протестировать. Знать основные стандарты</td>
                <td>
                  <ul>
                    <li><a href="https://livetyping.com/ru/blog/52_termina_iz_oblasti_ux_issledovaniy">Стандартов UI№1</a></li>
                    <li><a href="https://qaa-engineer.ru/chto-takoe-polzovatelskij-interfejs-i-kakie-standarty-ego-opredeleniya-mozhno-nazvat/">Стандартов UI№2</a></li>
                  </ul>
                </td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Знание принципов SOLID</th>
                <td>Изучение принципов SOLID. Изучение принципов программирования KISS/YAGNI/DRY</td>
                <td>
                  <ul>
                    <li><a href="https://habr.com/ru/company/mailru/blog/412699/">SOLID№1</a></li>
                    <li><a href="https://habr.com/ru/company/itelma/blog/546372/">SOLID№2</a></li>
                  </ul>
                </td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Навыки работы JMeter</th>
                <td>Знать принципы построения и логику самого инструмента</td>
                <td><a href="https://habr.com/ru/articles/140310/">JMeter</a></td>
                <td>Демонстрация полученных навыков</td>
              </tr>
              <tr>
                <th>Нагрузочное тестирование</th>
                <td>Знать методику проведения теста, инструменты, проводить нагрузочное тестирование на основе готового плана</td>
                <td>
                  <ul>
                    <li><a href="https://www.loadview-testing.com/ru/blog/%D0%BD%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BE%D1%87%D0%BD%D0%BE%D0%B5-%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-jmeter-%D1%81-%D0%BF%D0%BE%D0%BC%D0%BE%D1%89%D1%8C%D1%8E-loa/">Нагрузочное тестирование№1</a></li>
                    <li><a href="https://habr.com/ru/companies/itsumma/articles/682022/">Нагрузочное тестирование№2</a></li>
                  </ul>
                </td>
                <td>Выполнение данных работ на практике</td>
              </tr>
              <tr>
                <th>Проведение рефакторинга автотестов UI</th>
                <td>Знать как улучшить автотест, без потери функциональности</td>
                <td>Самостоятельный разбор</td>
                <td>Выполнение данных работ на практике</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      <!-- Темы для: Тестировщик-программист 3 категории -->
     <div class="card">
      <div class="card-header" id="headingSeven">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Тестировщик-программист 3 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Тестировщик-программист 3 категорией -->
      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <th>Проведение ревью кода автотестов</th>
                <td>Умение читать код, проводить проверку чужого кода автотестов, согласно принятых стандартов</td>
                <td><a href="http://docpo2.ru/doku.php?id=%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D1%8B:%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5:standart:%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82_%D0%BF%D1%80%D0%BE%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D1%8F_%D1%80%D0%B5%D1%84%D0%B0%D0%BA%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3%D0%B0">Ревью кода автотестов</a></td>
                <td>Проведение работ по ревью</td>
              </tr>
              <tr>
                <th>Самостоятельная развёртка CI/CD</th>
                <td>Глубокое понимание принципов и практик непрерывной интеграции (CI) и непрерывного развертывания (CD). Включает знание о том, как автоматизированные процессы интеграции, тестирования и развертывания способствуют ускорению циклов разработки и повышению качества программного обеспечения</td>
                <td><a href="https://www.digitalocean.com/community/tutorials/an-introduction-to-ci-cd-best-practices-ru">Стратегии CI/CD</a></td>
                <td>Проведение работ по развертыванию CI/CD</td>
              </tr>
              <tr>
                <th>Проведение собеседований при подборе новых сотрудников</th>
                <td>Умение разрабатывать структурированные вопросы и задачи, соответствующие открытой вакансии, для оценки профессиональных и личностных качеств кандидатов</td>
                <td>Самостоятельная деятельность</td>
                <td>Участие в собеседованиях</td>
              </tr>
              <tr>
                <th>Основы С#</th>
                <td>Знание ЯП C#</td>
                <td>
                  <ul>
                    <li><a href="https://metanit.com/sharp/tutorial/">https://metanit.com/sharp/tutorial/</a></li>
                    <li>\\dc\Develop\Инструкции\Тестировщикам\видео\C#</li>
                  </ul>
                </td>
                <td>Демонстрация знаний на практике</td>
              </tr>
              <tr>
                <th>Понимание JSON, XML</th>
                <td>Знать форматы передачи данных</td>
                <td>
                  <ul>
                    <li><a href="https://habr.com/ru/post/554274/">JSON, XML№1</a></li>
                    <li><a href="https://msiter.ru/tutorials/uchebnik-xml-dlya-nachinayushchih?ysclid=lpvc21ygai292948967">JSON, XML№2</a></li>
                  </ul>
                </td>
                <td>Ответы на вопросы КТ</td>
              </tr>
              <tr>
                <th>Проведение внутреннего обучения</th>
                <td>Умение разрабатывать и адаптировать учебные материалы и программы обучения, ориентированные на специфику и потребности компании. Это включает создание презентаций, руководств, интерактивных заданий и оценочных материалов для эффективного обучения сотрудников</td>
                <td>Самостоятельная деятельность</td>
                <td>Проведение обучений</td>
              </tr>
              <tr>
                <th>Проведение рефакторинга автотестов tSQLt</th>
                <td>Знание и использование методик рефакторинга, таких как улучшение читаемости кода, уменьшение сложности, избавление от неиспользуемого кода, и оптимизация структур данных и алгоритмов. Важно применение подходов, способствующих повышению эффективности и надежности автотестов.</td>
                <td><a href="https://testmatick.com/ru/pochemu-qa-inzhener-dolzhen-znat-o-refaktoringe-koda/">Проведение рефакторинга автотестов tSQLt</a></td>
                <td>Выполнение рефакторинга готовых автотестов</td>
              </tr>
              <tr>
                <th>Понимание организации E2E тестов</th>
                <td>Понимание методологии и стратегий для разработки эффективных E2E тестов, включая определение ключевых бизнес-процессов и пользовательских сценариев для проверки полного функционала приложения или системы</td>
                <td><a href="https://software-testing.ru/library/testing/testing-for-beginners/3978-e2e-testing-manifesto">E2E тестов</a></td>
                <td>Демонстрация полученных знаний</td>
              </tr>
              <tr>
                <th>Декомпозиция (что это, применение на практике, примеры)</th>
                <td>Знание что это, применение на практике, примеры</td>
                <td><a href="https://blog.skillfactory.ru/glossary/dekompozitsiya/">Декомпозиция</a></td>
                <td>Демонстрация знаний на практике</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      <!-- Темы для: Тестировщик-программист 2 категории -->
     <div class="card">
      <div class="card-header" id="headingEight">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Тестировщик-программист 2 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Тестировщик-программист 2 категорией -->
      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <th>Разработка плана тестирования</th>
                <td>Умение четко определить цели тестирования, включая охват функциональных и нефункциональных аспектов системы или приложения. Важно также уметь определить критерии успеха и приемлемости тестирования</td>
                <td>
                  <ul>
                    <li>Самостоятельная деятельность</li>
                    <li><a href="https://testirovshik.com/plan-testirovanija/">Разработка плана тестирования</a></li>
                  </ul>
                </td>
                <td>Демонстрация знаний на практике</td>
              </tr>
             <tr>
                <th>Разработка тестов на C#</th>
                <td>Знание ЯП C#</td>
                <td>
                  <ul>
                    <li>\\dc\Develop\Инструкции\Тестировщикам\видео\C#</li>
                    <li><a href="https://metanit.com/sharp/tutorial/">Разработка тестов на C#</a></li>
                  </ul>
                </td>
                <td>Демонстрация знаний на практике</td>
              </tr>
              <tr>
                <th>Проведение оценки качества тестирования</th>
                <td>Знание критериев качества тестирования, характеристик качества</td>
                <td>
                  <ul>
                    <li><a href="https://qaschool.ru/blog/chto-takoe-kachestvennyj-produkt-v-testirovanii-po/">Проведение оценки качества тестирования№1</a></li>
                    <li><a href="https://cs.petrsu.ru/~kulakov/courses/unit-testing/presents/9.test-quality.pdf">Проведение оценки качества тестирования№2</a></li>
                  </ul>
                </td>
                <td>Демонстрация знаний на практике</td>
              </tr>
              <tr>
                <th>Базовые знания автоматизации Web UI (C#)</th>
                <td>Понимание этапов разработки тестов и выбор необходимых функциональностей </td>
                <td><a href="https://habr.com/ru/articles/275171/">Автоматизации Web UI (C#)</a></td>
                <td>Демонстрация знаний на практике</td>
              </tr>
              <tr>
                <th>Проведение ревью кода при нахождении багов</th>
                <td>Уверенное чтение кода, проведение анализа кода для нахождения ошибок разработки</td>
                <td>Самостоятельная деятельность</td>
                <td>Решение коротких задач (ревью кода)</td>
              </tr>
              <tr>
                <th>Наставничество над разработчиками автотестов</th>
                <td>Умение делиться знаниями и опытом в области автоматизации тестирования, включая принципы написания эффективных, надежных и масштабируемых автотестов. Важно уметь передавать лучшие практики кодирования, проектирования тестов и работы с инструментами автоматизации</td>
                <td>Самостоятельная деятельность</td>
                <td>Ведение и сопровождение работ автоматизаторов</td>
              </tr>
              <tr>
                <th>Базовые навыки работы с Seq, Sentry</th>
                <td>Умение работать с интерфейсом SEQ. Знать для чего используется</td>
                <td><a href="https://habr.com/ru/articles/266299/">Seq, Sentry</a></td>
                <td>Применение знаний на практике</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      <!-- Темы для: Тестировщик-программист 1 категории -->
     <div class="card">
      <div class="card-header" id="headingNine">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Тестировщик-программист 1 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Тестировщик-программист 1 категорией -->
      <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <th>Курирование тестировщиков направления</th>
                <td>Эффективное руководство и координация работы тестировщиков, включая распределение задач, постановку целей и контроль за выполнением проектных заданий. Умение выстраивать процессы тестирования, обеспечивающие качество и своевременность доставки результатов</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Предложения улучшения по разработке функционала</th>
                <td>Выявление функциональности, требующей работ по улучшению качества поставки пользователю</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Разработка тестов на CodeUI</th>
                <td>Понимание структуры иерархии элементов управления, работа с ними. Понимание основ работы с UI технологиями</td>
                <td><a href="https://habr.com/ru/articles/97012/">CodeUI</a></td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Совместная разработка тестов и интеграция тестов с другими направлениями</th>
                <td>Организация совместной разработки тестов между направлениями тестирования, разработка дополняющих тестов</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Анализ внедрения метрик в разработку</th>
                <td>Знание важности и применения различных метрик в процессе разработки, таких как время цикла разработки, производительность команды, частота ошибок и стабильность кода. Умение определять, какие метрики наиболее релевантны для конкретных целей и задач проекта</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Анализ и внедрение новых методик тестирования</th>
                <td>Постоянное изучение и анализ последних тенденций и инноваций в области тестирования ПО. Это включает ознакомление с новыми инструментами, методологиями и лучшими практиками в индустрии</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Проведение оценки качества тестирования</th>
                <td>Знание критериев качества тестирования, характеристик качества</td>
                <td>
                 <ul>
                  <li><a href="https://qaschool.ru/blog/chto-takoe-kachestvennyj-produkt-v-testirovanii-po/">Проведение оценки качества тестирования№1</a></li>
                  <li><a href="https://cs.petrsu.ru/~kulakov/courses/unit-testing/presents/9.test-quality.pdf">Проведение оценки качества тестирования№2</a></li>
                </ul>
               </td>
               <td>Демонстрация знаний на практике</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      <!-- Темы для: Старший тестировщик-программист 3 категории -->
     <div class="card">
      <div class="card-header" id="headingTen">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Старший тестировщик-программист 3 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Старший тестировщик-программист 3 категории -->
      <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
             <tr>
                <th>Подготовка документации по развитию систем тестирования</th>
                <td>Понимание процессов построения работ, знание этапов развития. Разработка документации</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
             </tr>
             <tr>
                <th>Разработка стратегии тестирования</th>
                <td>Умение четко определять цели и задачи тестирования в контексте конкретных бизнес-требований и технических заданий проекта. Это включает установление приоритетов, охвата тестирования и ожидаемых результатов</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Внедрение новых методик тестирования в рабочий процесс</th>
                <td>Умение анализировать и оценивать новые тенденции и методики тестирования на предмет их пригодности и эффективности для конкретного проекта или организации. Это включает изучение современных подходов, инструментов и лучших практик в области тестирования</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Построение архитектуры тестовых проектов</th>
                <td>Навыки интеграции тестовой архитектуры с процессами разработки, включая настройку и оптимизацию непрерывной интеграции и непрерывного развертывания (CI/CD). Это включает автоматизацию запуска тестов, отчетности и обратной связи</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Углубленное знание фреймворков для тестирования</th>
                <td>Уверенное использование фреймворков для применения новых возможностей в разработке автотестов. Повышение качества разработки автотестов</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      <!-- Темы для: Старший тестировщик-программист 2 категории -->
     <div class="card">
      <div class="card-header" id="headingEleven">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Старший тестировщик-программист 2 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Старший тестировщик-программист 2 категории -->
      <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Проведение ревью кода разработки</th>
                <td>Уверенное чтение кода, проведение анализа кода для нахождения ошибок разработки</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Участие в развитии системы логирования</th>
                <td>Знание основ логирования, типов логов, уровней логов. Выносить предложения по совершенствованию</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Анализ рисков</th>
                <td>Умение идентифицировать потенциальные технические риски в проектах. Важно уметь оценивать вероятность и потенциальное воздействие каждого риска</td>
                <td><a href="https://www.edureka.co/blog/risk-analysis-in-software-testing/">Анализ рисков</a></td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Участие в разработке ТЗ проектов</th>
                <td>Умение четко понимать и анализировать бизнес-требования и ожидания заинтересованных сторон, чтобы эффективно переводить их в технические требования. Важно уметь задавать правильные вопросы для уточнения и детализации требований</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Понимание F.I.R.S.T.: критерии качества тестов</th>
                <td>Знать и применять критерии годности тестов</td>
                <td><a href="https://testirovshik.com/first-kriterii-kachestvo-testov/">https://testirovshik.com/first-kriterii-kachestvo-testov/</a></td>
                <td>Применение знаний на практике</td>
              </tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
       <!-- Темы для: Старший тестировщик-программист 1 категории -->
     <div class="card">
      <div class="card-header" id="headingTwelve">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg> Темы для: Старший тестировщик-программист 1 категории</strong></p>
          </button>
        </h2>
      </div>
     <!-- Перечисления тем для для Hard skills Старший тестировщик-программист 1 категории -->
      <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
        <div class="card-body">
          <div class="container">
            <p>*по результатам работы и усмотрению руководителя возможно повышение после  работы</p>
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
              <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
            </svg> Hard skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Развитие системы лавирования ошибок</th>
                <td>Умение разрабатывать системы для эффективного обнаружения, логирования и управления ошибками. Важно понимать различные типы ошибок и наилучшие практики их обработки, чтобы минимизировать влияние на пользовательский опыт и стабильность системы</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Участие в разработке проектов</th>
                <td> Умение разрабатывать системы для эффективного обнаружения, логирования и управления ошибками. Важно понимать различные типы ошибок и наилучшие практики их обработки, чтобы минимизировать влияние на пользовательский опыт и стабильность системы</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
                <th>Понимание и применение системного дизайна</th>
                <td>Умение правильно ставить требования к производительности, масштабированию и проектированию ПО</td>
                <td>Самостоятельная деятельность</td>
                <td>Применение знаний на практике</td>
              </tr>
              <tr>
            </tbody>
          </table>
          <!-- Перечисления тем для для Soft skills -->
          <div class="container">
            <p class="text-center"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
              <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11"/>
            </svg> Soft skills</p>
          </div>
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th scope="col">Функционал/компетенция</th>
                <th scope="col">Знать/уметь</th>
                <th scope="col">Обучение</th>
                <th scope="col">Критерии оценки</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Усвоение знаний </th>
                <td>Способность быстро учиться и усваивать новые аналитические методы и инструменты.</td>
                <td><a href="http://www.sql-tutorial.ru/ru/content.html">Техники по обучению (конспектирование; применение на практике; активное чтение; планирование и регулярность)</a></td>
                <td>Вопросы на мотивацию к обучению</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="container">
      <p>*Взято с таблицы переданные HR, информация может меняться, просим еще посматривать в таблицу HR</p>
      <a href="https://docs.google.com/spreadsheets/d/10WQz71u5GAc4J_LPBUUsjEq6wSKhEy_lDyh8igr2ffU/edit#gid=0" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Таблица HR</a>
      </div>
      <br>
    </div>
  </div>
  <br>
  </div>
</section>
 <!---------------------------------Вставка футера-------------------------------------->
 <footer class="footer">
    <div class="container-fluid">
     <img src="img/brend.png"  class="logo left">
     <img src="img/dobrzaim.png"  class="logo left">
     <p class="text-dark"><strong>Сделано от Web ОТ для ОТ</strong></p>
    </div>
  </footer>
 <!-------------------------------------------------------------------------------------->


    <!-- Отдельные JS для Popper и Bootstrap -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
   
  </body>
</html>