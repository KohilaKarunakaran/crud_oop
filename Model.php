<?php

require_once("db_config.php");

class Model{

    private $db_host;
    private $db_name;
    private $db_user;
    private $db_password;


    public function __construct($db_host ,$db_name,$db_user,$db_password){
        $this->db_host=$db_host;
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_password=$db_password;
        

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function getRecipes(){
        $query = "SELECT * FROM recipe";
        $results = $this->pdo->query($query);

        foreach($results as $result) {
            $recipe = new Recipe($result["name"], $result["directions"]);
            $recipe = setRecipeID[$result["id"]];
         $this->recipes[] = $recipes;
    }
    return $this->recipes;
}
    public function getRecipe(id){
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM recipe WHERE id = :id LIMIT 1";
        $results = $this->pdo->prepare($query);
        $results -> execute ([
            "id" = $id;
        ]);
        foreach($results as $results) {
            $recipe = new Recipe($result["recipeName"], $result["recipeDirections"]);
        return $this->Recipe;
    }
    }

    public function addRecipe(){
        try{
            $stm = $this->dbCnx->prepare("INSERT INTO recipe(name,directions) values(?,?)");
            $stm->execute([$this->name,$this->directions]);
    
    }
        catch(Exception $e){
            return $e->Recipe();
        }
    }
 public function fetchAll(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM recipe");
        $stm->execute([]);
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->Recipe();
    }
}

public function fetchOne(){

    try{

        $stm = $this->dbCnx->prepare("SELECT FROM recipe where id=?");
        $stm->execute([$this->id]);
        return $stm->fetchAll();
    }
    catch(Exception $e){
        return $e->Recipe();
    }
}
public function updateRecipe() {
        try {
            $stm = $this->dbCnx->prepare("UPDATE recipe SET name=?,directions=? WHERE id=?");
            $stm->execute([$this->name,$this->directions,$this->id]);
        }
        catch(Exception $e) {
            return $e->rowCount();
        }
    }

public function deleteRecipe() {
    try {
        $stm = $this->dbCnx->prepare("DELETE FROM recipe where id=?");
        $stm->execute([$this->id]);
        return $stm->fetchAll();
    }
    catch(Exception $e) {
        return $e->rowCount();
    }
}
}

?>
