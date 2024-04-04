import json
import os

#$params = [
#    'dir'        => 0,             0 - в одну сторону, 1 - туда-обратно
#    'tfl'        => 3,             3 - поезда и электрички, 2 - электрички, 1 - поезда 
#    'checkSeats' => 1,             1 - только с билетами, 0 - все поезда (не ебу что значит)
#    'code0'      => '2054001',     отправная станция
#    'code1'      => '2044001',     точка назначения
#    'dt0'        => $date0->format('06.04.2024'),
#];

# Переменные получают данные от бота

dir = 0
tfl = 3
checkSeats = 1

# точно уже от ввода пользователя зависят

# начальная станция
code0 = '2054001'
# станция куда нужно
code1 = '2044700'
dt0 = '06.04.2024'

data = {'dir': dir, 'tfl': tfl, 'checkSeats': checkSeats, 'code0':code0, 'code1' : code1, 'dt0': '06.04.2024'}
with open('/home/dan/tgbot_rzd/rzd-api/data.json', 'w') as outfile:
    json.dump(data, outfile)
os.system("php index.php")
