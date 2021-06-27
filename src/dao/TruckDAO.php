
<?php

require_once __DIR__ . '/DAO.php';

class TruckDAO extends DAO {

    public function selectAll(){
        $sql = "SELECT * FROM `destination`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectById($id){
        $sql = "SELECT * FROM `destination` WHERE destination.id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectFacts($id){
        $sql = "SELECT * FROM `facts` WHERE id_destination=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectToDo($id){
        $sql = "SELECT * FROM `toDo` WHERE id_destination=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectActivity($id){
        $sql = "SELECT * FROM `products_countrytrucks` WHERE id_destination=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data){
        $sql = "INSERT INTO `newsletter` (`email`) VALUES (:email)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':email', $data);
        $stmt->execute();
    }

    public function selectProducts($id){
        $sql = "SELECT * FROM `products_countrytrucks` WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function selectQuestions(){
        $sql = "SELECT * FROM `faq`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertBuyer($data) {
        $sql = "INSERT INTO `customer` (`firstname`,`lastname`,`email`, `birthday`,`payment`,`product`) VALUES (:firstname, :lastname, :email, :birthday, :payment, :product)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':firstname', $data['firstname']);
        $stmt->bindValue(':lastname', $data['lastname']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':birthday', $data['birthday']);
        $stmt->bindValue(':payment', $data['payment']);
        $stmt->bindValue(':product', $data['product']);
        $stmt->execute();
      }
}

