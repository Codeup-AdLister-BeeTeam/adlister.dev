<?php 
// EXERCISE 9.9 AD LISTER PROJECT

require_once 'BaseModel.php';

class Ads extends BaseModel {

	protected static $table = 'ads';

	protected function update()
    {
        $query = "UPDATE ads 
        SET id = :id, headline = :headline, price = :price, category = :category, 
        description = :descriptionn, contact = :contact 
        phone = :phone, preferContact = :preferContact, zipCode = :zipCode
        WHERE id = :id";
        // Edited above because it had user fields, so I kept the formatting, but
        // changed to ads fields. not tested yet.
        $stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':id', 		$this->id, 				PDO::PARAM_STR);
        $stmt->bindValue(':headline', 	$this->headline, 		PDO::PARAM_STR);
        $stmt->bindValue(':price', 		$this->price, 			PDO::PARAM_STR);
        $stmt->bindValue(':category', 	$this->category, 		PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, 	PDO::PARAM_STR);
        $stmt->bindValue(':contact', 	$this->contact, 		PDO::PARAM_STR);
       
        $stmt->execute();
    
        echo "The update() method was called by the save() method";
    }
    protected function insert()
     {   
        $query = "INSERT INTO ads (id, headline, price, category, description, contact)
        VALUES (:id, :headline, :price, :cagetory, :description, :contact)";
        
        $stmt = self::$dbc->prepare($query);
       
        $stmt->bindValue(':id', $this->id, PDO::PARAM_STR);
		$stmt->bindValue(':headline', 	$this->headline, 		PDO::PARAM_STR);
        $stmt->bindValue(':price', 		$this->price, 			PDO::PARAM_STR);
        $stmt->bindValue(':category', 	$this->category, 		PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, 	PDO::PARAM_STR);
        $stmt->bindValue(':contact', 	$this->contact, 		PDO::PARAM_STR);

        $stmt->execute();

        echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;
        echo "The insert() method was called by the save() method" . PHP_EOL;
        
    }

}

