<?php


class Controller{

    private $model;
    private $view;

    public __construct($m,$v){
        $this ->model = $m;
        $this ->view = $v;
        
    }

    public index(){
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                if(isset($_GET['action'])) {
            
                }else {
                    showAll();
                }
                break;
                default:
            }
        
}
    
public showAll(){
    $recipes = $this->model->getRecipes();
    $this->view->listReceipes($recipes);
       
}
}
 $model = new Model();
 $view = new View();
 $controller = new Controller($model,$view);
 $controller->index();


?>