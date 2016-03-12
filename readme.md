# Api сайта rzd.ru

Допустимые запросы через Curl (POST и GET)
Для обхода защиты сайта необходимо предварительно отправить запрос для получения cookies и номера идентификатора RID
Вторым запросом подставляем уникальный идентификатор RID и отправляем cookie

###Ответы с сайта
Статус ответа содержится в переменной result
RID - означает что сайт выдал нам уникальный идентификатор и куки
OK - получен полный ответ с запрошенными нами данными

##Пример запроса
###Первый запрос
https://pass.rzd.ru/timetable/public/ru?STRUCTURE_ID=735&layer_id=5371&dir=0&tfl=3&checkSeats=1&code0={{code_from}}&dt0={{date}}&code1={{code_to}}&dt1={{date}}

###Второй и следующие запросы
https://pass.rzd.ru/timetable/public/ru?STRUCTURE_ID=735&layer_id=5371&rid={{rid}}

Второй запрос выполняется с уже полученным нами уникальным идентификатром который хранит в себе данные предыдущего запроса и куками
Поэтому в целях оптимизации можно не отправлять  некоторые параметры указанные нами в первом запросе


##Реализованные запросы

Необходимо реализовать отдачу данных через ajax-запросы, в текущих примерах это не реализовано

###freeSeats - получает количество свободных мест

Принимает параметры
обязательные параметр при 1 запросе
'STRUCTURE_ID' => 735,
'layer_id' => 5371,

необязательные параметр при 2 запросе
'dir' => - возвращать или показывать результат
'tfl' => 3 - тип поезда (все, дальнего следования, электрички)
'checkSeats' - поиск в поездах без свободных мест
'code0' код станции отправления
'code1' => код станции прибытия
'dt0' => время отправления

time0 - время отправления
tnum0 - номер поезда