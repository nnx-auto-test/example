# language: ru
Функционал: Демонстрация тестирования. Поиск на habrahabr

  Сценарий: Поиск на странице habrahabr.ru
     Пусть Я перехожу на заглавную страницу хабра
     Когда Я активирую боковое меню
       И Я ввожу в строку поиска "Behat"
       И Я ожидаю открытия страницы результатов поиска для запроса "Behat"
     Тогда Я ожидаю что в результатах будет статья с заголовком "Установка и настройка функционального тестирования в Symfony2 с помощью Behat и Mink"



