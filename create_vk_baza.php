<?php
    
    header('Content-Type: text/html; charset=utf-8');
    require '/home/users/m/matveev-e-r/domains/crm.yasdelayu.ru/assets/frameworks/RedBeanPHP/rb.php';

    R::addDatabase('access','mysql:host=localhost; dbname=matveev-e-r_access', 'matveev-e-r', 'Qwerty11071107');

    R::selectDatabase('access');
    $count = R::count('vk_cities');
    //echo $count;
    
    for ($i = 0; $i <= $count; $i++){
        
        $group_id = R::findOne('vk_cities', ' id = ? ', [ $i ])['group_id'];
        $access_token = R::findOne('vk_cities', ' id = ? ', [ $i ])['access_token'];
        $abbrev = R::findOne('vk_cities', ' id = ? ', [ $i ])['abbrev'];
        
        $city_array = ['ЕКБ','БЛГ','ОРН','КРВ','БРЛ','ОМС','СПБ','РСТ','КРД','КРСК','ТМН','ТЛ','ЯРЛ','ЧЛБ','ПРМ','КЛГ','ТЛТ','УФА','ИРК'];
        
        if (in_array($abbrev, $city_array)){
            
            for ($x = 1; $x <= 20; $x++){
                $z = $x-1;
                $offset = 200*$z;
                $fgc = json_decode(file_get_contents('https://api.vk.com/method/messages.getConversations?count=200&offset='.$offset.'&group_id='.$group_id.'&access_token='.$access_token.'&v=5.103'), true);
                
                // echo '$offset - '.$offset.'; link - https://api.vk.com/method/messages.getConversations?count=200&offset='.$offset.'&group_id='.$group_id.'&access_token='.$access_token.'&v=5.103<br><br>';
                
                for ($y = 0; $y <= 200; $y++){
                    $id = $fgc['response']['items'][$y]['conversation']['peer']['id'];
                    $allowed = $fgc['response']['items'][$y]['conversation']['can_write']['allowed'];
                    
                    if ($allowed == true){
                        $sql = R::dispense('baza');
                        $sql->city = $abbrev;
                        $sql->user_id = $fgc['response']['items'][$y]['conversation']['peer']['id'];
                        $sql->debug = 'count - '.$count.', offset - '.$offset;
                        R::store($sql);
                        
                    }
                }
                
                
            }
        }
    }

?>