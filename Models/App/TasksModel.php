<?php

namespace Models\App;

use Core\Model;

class TasksModel extends Model{

    public function listTaskModel(){
        return $this->getBdd()->table('tasks')->getAll();
    }

    public function getTaskModel($idTask){
        return $this->getBdd()->table('tasks')->where('id',$idTask)->get();
    }

    public function addTaskModel($data){
        $this->getBdd()->table('tasks')->insert($data);
    }

    public function deleteTaskModel($idTask){
        $this->getBdd()->table('tasks')->where('id',$idTask)->delete();
    }

    public function updateTaskModel($idTask,$data){
        $this->getBdd()->table('tasks')->where('id',$idTask)->update($data);
    }

}