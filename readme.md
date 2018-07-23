# Выполение задания для SpurIT

## Инструкция по запуску проекта:
- установить компоненты: `composer install` (composer.json install);
- Создать БД (например spur_it) – имя указать в файле .env;
- создать файл .env наподобие `.env.example`, поменять в нем поля (важные APP_URL, DB_DATABASE, DB_USERNAME, DB_PASSWORD);
- выполнить миграции: `php artisan migrate`;
- выполнить посев данных: `php artisan db:seed`.
Так же есть sql-скрипт для загрузки данных в БД `sql/spur_it.sql`, если с миграциями и сидерами что-то пошло не так.   

## Особенности решения
За базу использовал свой сайт (https://github.com/Jax-fd/studyforeignwords), (http://studyforeignwords.h1n.ru/).
Версия Laravel 5.2.
Используемая версия php 7.0.
На стороне фронтеда использовался JQuery.
Хоть и в задании не было указано про реализацию авторизации, я использовал стандартную от Laravel.
В задании не указано в каком направлении фильтровать список задач – сделал от старых к новым,
