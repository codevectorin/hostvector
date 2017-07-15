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
            $this->db = new \PDO('sqlite:' . BASEPATH . '/vendor/app/data/comments.db');
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
            'secret' => '6LcTyyYUAAAAAKP1H7B_53XJ9-V-i5OdnalKMZD1',
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
            die('error captcha');
        }
        
        $path=isset($_POST['path'])?urldecode($_POST['path']):null;

        
        if(!$this->is_verified_path($path)){
            //error msg json
            echo 'error: input path error!';
            exit;
        }

        $data[':name']                 = $_POST['name'];
        $data[':path']                 = $path;
        $data[':text']              = $_POST['comment'];
        $data[':timestamp']              = time();
        if(is_null($data[':name']) or is_null($data[':text'])){
            return false;
        }

        $query                        = $this->db->prepare('INSERT INTO comments(name, text,path,timestamp)
        VALUES(:name, :text,:path,:timestamp)');

        return $query->execute($data);
    }

    public function is_verified_path($path)
    {

        if(is_null($path)){
            return false;
        }

        $no=true;

        foreach(Config::allowed_sites as $site){
            if (0 === strpos($path, $site)) {
               $no=false;
               break;
            }    
        }
        if($no===true){
            return false;
        }


        $stmt = $this->db->prepare('SELECT * FROM `paths` WHERE `path`=:path');
        $stmt->execute([':path' => $path]);

        $data = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($data===false){
            $curl = new \Curl\Curl();
            $curl->get(Config::jsonData);
            $posts=json_decode($curl->response);

            foreach($posts as $post){

                if($post->url==$path){


                    $stmt = $this->db->prepare('INSERT INTO paths (path) 
                    VALUES (:path)');
                    $stmt->execute([':path' => $path]);
                    return true;
                }
            }
        }

        return true;

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
