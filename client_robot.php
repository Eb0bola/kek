<?php

    $output = json_decode(file_get_contents('php://input'), TRUE);
    
    file_put_contents('tg_obrab.txt', file_get_contents('php://input').'
    
', FILE_APPEND);
    
    $chat_id = $output['message']['chat']['id'];
    $from_id = $output['message']['from']['id'];
    $message = $output['message']['text'];
    $callback_query = $output['callback_query'];
    $data = $callback_query['data'];
    $message_id = ['callback_query']['message']['message_id'];
    $chat_id_in = $callback_query['message']['chat']['id'];
    
    //callback
    $my_message_id = $output['callback_query']['message']['message_id'];
    $my_text = $output['callback_query']['message']['text'];
    $my_first_name = $output['callback_query']['from']['first_name'];
    $my_last_name = $output['callback_query']['from']['last_name'];
    
    $my_full_name = $my_first_name.' '.$my_last_name;
    
$messages_array = ['Добрый вечер, с вый факс разобрались, Настройки не правильные были! А вот буквально пару минут назад айфон перестал реагировать на касание, работает только Сири',
'Замерзает!!!
Но....
Работает идеально!!!
5......
Без всяких чехлов и стёкол!!!
',
'Здравствуйте,верхний динамик на 7',
'дравствуйте, сколько будет стоить сделать разговорный динамик ?
На 6
И разъём под наушники',
'А ноутбуки вы делаете?',
'Привет
Сколько будет стоить починить микрофон ? iPhone 7',
'Здравствуйте проблема такая не работают входящие и исходящие вызовы на мотиве другие операторы работают
Айфон 7 плюс',
'Добрый день! Стёр два айфона 6 (вост),теперь не включаются. До этого было всё нормально. Можно им помочь?',
'Телефон перестал зарежатся ! На выключенную заряжается и включается на 4 %и перестаёт заряжатся один раз зарядил до ста % и нагрелась очень сильно плата прям через чур сильно не батарея а сома плата алюминиевый квадратик и больше не включается',
'Здравствуйте, у меня 6, разбит экран, довольно сильно) и немного лагает, не знаю причину, сколько будет стоить ремонт?',
'Здравствуйте, скажите пожалуйста, сколько будет стоит замена батареи на айфоне 6s plus?',
'Apple Watch не занимаетесь?',
'Здравствуйте
Айфон 7 восстановленныц
Й
Бывало выключался
И можно было включить тока через некоторое время
Потом вообще выключился и не включается
Есть ли шансы починить?',
'Включается и красный экран, все
Ребёнку нужен, я бы не стала ничего делать',
'Добрый день! Нужно починить айфон',
'Здравствуйте iphon6s плохо слышат собеседник а по громкой связи всё ок',
'Здравствуйте, у меня после замены дисплея кнопка переключения на беззвучный стала странно функционировать а сейчас совсем не переключает на звук 😩',
'Погнулся корпус но телефон функционирует',
'Добрый день)
Напишите ваш номер телефона, сообщений тонна😀 По звонку быстрее расскажу)',
'Здравствуйте, сколько будет стоить поменять экран на айфон 6?',
'Добрый вечер!
Хотела оставить заявку на ремонт ноутбука)
Нужно приехать , забрать ноутбук на диагностику. На него попала вода и вроде как нужно что-то сделать с микросхемой). ',
'Здравствуйте, мне нужно поменять камеру на айфон 8 плюс',
'Добрый вечер, надо заменить слуховой динамик',
'Заменил экран в сервисе. Один раз упал и начались белые полосы и не срабатывать. Айфон 7+. Подскажите сумму ремонта.',
'Здравствуйте , залил камеру , надо заменить , сколько будет эта услуга стоить ?
Айфон 6',
'Сим карты не видит, айфон 8
Здравствуйте. Сколько денег? И времени?',
'Здравствуйте
Надо поменять дисплей и батарейку на 6 айфоне',
'Здравствуйте, у меня на айфоне 5 s телефон к вай фай не подключается, кнопка не нажимается, она серым закрашена как будто недоступна',
'Здравствуйте
Сколько будет стоить поменять кнопку на iPhone 6',
'Здравствуйте
Сколько будет стоить замена стекла на 6s, только стекла без дисплея',
'Поменять экран на айфон 7
Сколько будет стоить ?',
'Приветствую , 6s разбито стекло , сенсор работает , сколько будет стоить ремонт ?',
'Добрый день)
Проблема в том, что у него выпал экран, сломалась кнопка, а ещё, когда ставишь его на зарядку от розетки, на батареи не написано что идёт зарядка, по этому приходится выключать при зарядке. Но, при этом, когда подключаешь его на зарядку к ноутбуку, то показывает, что заряжается.
Также, вспомнила, что он очень быстро садится, когда в телефон вставлена сим-карта.',
'Здравствуйте а вы в каком городе ремонтируете
У меня айфон 4 я не слышу что мне говорят',
'У девушки была айфон 5с. Потом она купила себе новый телеофн. Хонор. А айфоном не пользовалась. Через пару месяцев она взяла в руки айфон. Пыталась включить. Но не включалась. И зарядки тоже не берет.
Айфон не включаеться и не заряжаеться
По вашему мнению. Как думаете. Что могло случиться?
Наверное батарея',
'Добрый день, Наталья
На дисплее только стекло разбито или сам дисплей поврежден?',
'Переставить стекло от одного айфона 6s на другой.Цена?',
'Микрофон то работает то не работает
Сколько стоит разобрать и посмотреть, может отходит просто',
'Здравствуйте!
Нужно поменять экран,на SE',
'Телефон IPhone XR не работает фэйс айди',
'Мне ваши контакты дала Лена Кирилова ) у меня проблемы с мак буком , вы сможете приехать посмотреть и сказать что дальше с ними можно сделать ?',
'Здравствуйте у меня телефон заряжает до 13 % что делать ?
?',
'Добрый вечер. Поменять экран на 5s',
'Не держит заряд',
'Добрый день, в общем ситуация такая, в пользовании находился айфон 6, куплен через несколько рук случайно, по мере эксплуатации редко пропадала сеть в последствии использования начала пропадать чаще и на более продолжительное время, теперь требуется сделать кучу махинаций для того чтоб он заработал. Иногда это занимает сутки. Я так понимаю это прошлые владельцы сделали некачественно модуль, цена вопроса интересует',
'Айфон 6s выключили и не включается',
'iPhone se после сброса настроек перестал работать тач айди, что может быть?',
'Привет на айфон 6s plus сколько стоит поменять экран?',
'Здравствуйте. iPhone 5s. При при прослушивании музыки через аукс идёт шипение',
'Добрый день. 8+, экран и корпус )',
'Здравствуйте, iPhone 6,не может найти сеть, утерян держатель для сим карты, сел динамик, постоянно вызывает Siri при подключении наушников',
'Айфошка поломался',
'SE утонул, сначала грелся и писал что нет сети, сейчас вообще не вкл🤷🏻‍♂️',
'Добрый вечер! Пыталась найти гарантийный талон, не удалось. Что делать? Помню дату, когда делали телефон. Мастер делал фото гарантийного.
Поставили оригинал вроде, а ведёт себя экран как дешевая копия.
Сегодня было ощущение, что перестанет вовсе работать.',
'Добрый день , у меня айфон 7, вчера к вечеру перестал работать динамик как я понимаю ,не могу ни записать голосовое сообщение ,когда звонят беру трубку и не слышу и меня не слышат по телефону ,хотя минуты идут , когда я звоню тоже самое даже гудки идут , но музыку могу слушать . Скажите пожалуйста до скольки вы работаете ?',
'Хотел узнать, можно ли работать у вас мастером'];

$count = intval(count($messages_array));

$random = rand(0, $count);


for ($i = 0; $i<= 60; $i++){
    $message = $messages_array[$i];

    file_get_contents('https://api.telegram.org/bot1177907626:AAE55CPtM567VyVu2QJp09V58mJWuOgQVag/sendMessage?chat_id='.$chat_id.'&text='.urlencode($message));
      
    sleep(1);
}

  
?>