<?php

class ConnectDb
{

    private $host = 'localhost';
    private $dbname = 'antagosoft';
    private $username = 'root';
    private $password = '';

    /**
     * @var PDO
     */
    public $con;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {

        try {

            $this->con = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        } catch (PDOException $e) {
            LogicException::error($e->getMessage());
        }
    }

    public function getAddressInfo()
    {
        $acc_info = $this->con->prepare("SELECT * FROM `foodclub` ORDER BY name ASC ");
        $acc_info->execute();

        return $results = $acc_info->fetchAll(PDO::FETCH_OBJ);

    }

    public function delete()
    {
        $sql = "DELETE FROM foodclub WHERE id =  :ID";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':ID', $_GET['del_id'], PDO::PARAM_INT);
        $stmt->execute();
    }


    public function add()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $city = $_POST['city'];
        $area = $_POST['area'];
        $street = $_POST['street'];
        $house = $_POST['house'];
        $add_info = $_POST['addit_info'];

        $stmt = $this->con->prepare("INSERT INTO foodclub (id,name,city,area,street,house,addit_info) VALUE (:id,:name,:city,:area,:street,:house,:add_info)");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        $stmt->bindParam(':area', $area, PDO::PARAM_STR);
        $stmt->bindParam(':street', $street, PDO::PARAM_INT);
        $stmt->bindParam(':house', $house, PDO::PARAM_INT);
        $stmt->bindParam(':add_info', $add_info, PDO::PARAM_INT);
        $stmt->execute();

    }


}