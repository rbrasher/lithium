<?php
 
namespace app\controllers;

use lithium\security\Auth;

use app\models\Props;

class PropsController extends \lithium\action\Controller {
    
    public function index() {
        if(Auth::check('default', $this->request)) {
            $props = Props::all();
            return compact('props');
        } else {
            $this->redirect('/users/login');
        }
    }
    
    public function view($id = null) {
        if(Auth::check('default', $this->request)) {
            $prop = Props::find('first', array('id' => $id));
            return compact('prop');
        } else {
            $this->redirect('/users/login');
        }
    }
    
    public function edit() {
        if(Auth::check('default', $this->request)) {
            $saved = false;
            
            $prop = Props::find($this->request->args[0]);
            
            if(!$prop) {
                $this->redirect('Props::index');
            }
            
            if(($this->request->data) && $prop->save($this->request->data)) {
                $saved = true;
                $this->redirect(array(
                    'Props::view',
                    'args' => array($prop->id)
                ));
            }

            return compact('prop', 'saved');
        } else {
            $this->redirect('/users/login');
        }
    }
    
    public function fetchProps() {
        //$data = array();
        $url = 'http://xml.pinnaclesports.com/pinnacleFeed.aspx?sporttype=Football';
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        $responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        if($responseCode === 200) {
            $xml = simplexml_load_string($data);
            $feedTime = $xml->PinnacleFeedTime;
            $events = $xml->events;
            foreach($events->event as $event) {
                $prop = array();
                
                $prop['event_datetimeGMT'] = $event->event_datetimeGMT;
                $prop['gamenumber'] = $event->gamenumber;
                $prop['sporttype'] = $event->sporttype;
                $prop['league'] = $event->league;
                $prop['isLive'] = $event->isLive;
                
                $prop['team1'] = $event->participants->participant[0]->participant_name;
                $prop['team1_visiting_home_draw'] = $event->participants->participant[0]->visiting_home_draw;
                $prop['team2'] = $event->participants->participant[1]->participant_name;
                $prop['team2_visiting_home_draw'] = $event->participants->participant[1]->visiting_home_draw;
                
                $prop['moneyline_visiting'] = $event->periods->period[0]->moneyline->moneyline_visiting;
                $prop['moneyline_home'] = $event->periods->period[0]->moneyline->moneyline_home;
                
                $prop['spread_visiting'] = $event->periods->period[0]->spread->spread_visiting;
                $prop['spread_adjust_visiting'] = $event->periods->period[0]->spread->spread_adjust_visiting;
                
                $prop['spread_home'] = $event->periods->period[0]->spread->home;
                $prop['spread_adjust_home'] = $event->periods->period[0]->spread->spread_adjust_home;
                
                $prop['total_points'] = $event->periods->period[0]->total->total_points;
                $prop['over_adjust'] = $event->periods->period[0]->total->over_adjust;
                $prop['under_adjust'] = $event->periods->period[0]->total->under_adjust;
                $prop['created'] = date('Y-m-d h:m', $timestamp);
                
                $p = Props::create($prop);
                $p->save();
                //var_dump($prop);die();
            }
        } else {
            echo 'Error retrieving props. Error Code: ' . $responseCode;
        }
        
        
    }
    
    
}
?>
