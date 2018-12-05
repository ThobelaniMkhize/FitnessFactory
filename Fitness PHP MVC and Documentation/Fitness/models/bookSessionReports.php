<?php

class Bookings
{
    public $bk_id;
    public $sess_id;
    public $mem_id;
    public $book_date;
    
    public $sess_name;
    public $sess_cost;


    public function __construct($bk_id, $sess_id,$mem_id,$book_date,$sess_name,$sess_cost) 
    {
      		$this->bk_id = $bk_id;
      		$this->sess_id  = $sess_id;
                $this->mem_id = $mem_id;
                $this->book_date = $book_date;
                $this->sess_name = $sess_name;
                $this->sess_name = $sess_cost;
    }
    
    public static function all() 
    {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query('SELECT b.*,s.sess_name, s.sess_cost '
                                . 'FROM tblbooking b, tblsession s '
                                . 'WHERE s.sess_id = b.sess_id ORDER BY bk_id ');
      //
      		foreach($req->fetchAll() as $session)
                {
        		$list[] = new Bookings($session['bk_id'], $session['sess_id'], 
                                $session['mem_id'],$session['book_date'],$session['sess_name'],$session['sess_cost']);
      		}

      	return $list;
    }
    
    public static function bookingSessionReport($firstdate,$seconddate)
    {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query('SELECT b.*, s.sess_name, s.sess_cost 
                        FROM tblsession s, tblbooking b 
                        WHERE s.sess_id = b.sess_id
                        AND b.book_date BETWEEN "'.$firstdate.'" AND "'.$seconddate.'"
                        ORDER BY sess_id DESC');// GROUP BY  b.bk_id

                foreach($req->fetchAll() as $session) 
                {
        		$list[] = new Bookings($session['bk_id'], $session['sess_id'], $session['mem_id'],$session['book_date'],$session['sess_name'],$session['sess_cost']);
      		}

      	return $list;
    }
    
    public static function tot($firstdate,$seconddate)
    {
       // $total = array();
        $db = Db::getInstance();
        $req = $db->query( 'select COUNT(bk_id) as total from tblbooking where book_date BETWEEN "'.$firstdate.'" AND "'.$seconddate.'"');
       
       foreach($req->fetchAll() as $session) 
        {
           $total = $session['total'];
        }
                
      return $total;
        //$tot = $req->fe
    }
        
                
}


