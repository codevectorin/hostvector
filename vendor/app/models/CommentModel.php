<?php

namespace app\models;

use \app\config\Config;
use \system\models\Model;

/**
 *
 */
class CommentModel extends Model
{
    public function __construct()
    {

        try {
            // Create (connect to) SQLite database in file
            $this->db = new \PDO(Config::db_dsn_type . ':host=' . Config::db_host . ';dbname=' . Config::db_name, Config::db_user, Config::db_pass);
            // Set errormode to exceptions
            $this->db->setAttribute(\PDO::ATTR_ERRMODE,
                \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    public function corsHeader(){
        /*foreach(Config::allowed_sites as $site){
            header('Access-Control-Allow-Origin: '.$site, false);
        }*/
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: PUT, GET, POST");
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    }
    public function checkCaptcha(){
        if(!isset($_POST['g-recaptcha-response'])){
            return false;
        }
        $curl = new \Curl\Curl();
        $curl->setOpt(CURLOPT_SSL_VERIFYPEER, FALSE);
        $curl->post('https://www.google.com/recaptcha/api/siteverify', array(
            'secret' => '6LfMMSkUAAAAAOAaGWAAQnPrzFyzQGhXk_Y4wEpv',
            'response' => $_POST['g-recaptcha-response'],
        ));
        $response=json_decode($curl->response);
        if($response->success==true){
            return true;
        }else{
            return false;
        }

    }
    public function saveMessage($admin = false)
    {

        if(!$this->checkCaptcha()){
            die('error captcha!');
        }
        
        $path=isset($_POST['path'])?urldecode($_POST['path']):null;

        $data[':data']  = time();
        if(is_null($data[':name']) or is_null($data[':text'])){
            return false;
        }

        $query                        = $this->db->prepare('INSERT INTO comments(name, text,path,timestamp)
        VALUES(:name, :text,:path,:timestamp)');

        return $query->execute($data);
    }

    
    public function getMessages($path)
    {
        try {

                $stmt = $this->db->prepare('SELECT * FROM comments
                WHERE
                    `path`=:path
                ORDER BY
                    `timestamp` DESC
                ');

                $stmt->bindValue(':path', $path);
                $stmt->execute();

                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
                
        } catch (\Exception $e) {
            echo '<p>', $e->getMessage(), '</p>';
        }

    }

    /* Internal Functions */

    public function countRows()
    {
        return (int) $this->db->query('SELECT
            COUNT(*) as count
        FROM
            guestbook')->fetch()['count'];
    }

    
}
