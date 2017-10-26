<?php

/**
 * Created by PhpStorm.
 * User: M_hacker
 * Date: 11.05.2017
 * Time: 9:37
 */
include ("../Database/DBWorker.php");
class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $username;
    public $email;
    private $description;
    private $image;

    public function __construct($i, $fn, $ln, $un, $email)
    {
        $this->id = $i;
        $this->first_name = $fn;
        $this->last_name = $ln;
        $this->username = $un;
        $this->email = $email;
    }

    public function get_user_image()
    {
        return $this->image;
    }

    public function set_image($img)
    {
        $this->image = $img;
    }

    public function set_description($descr)
    {
        $this->description = $descr;
    }

    /**
     *
     */
    public function get_orders(){
        $dbworker = new DBWorker();
        $arr = array();
        foreach ($dbworker->getBookStoreConnection()->query("SELECT * from take_order_of_user where `customer_id`='$this->id'") as $row) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }
}