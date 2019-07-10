<?php

use Models\App\TasksModel;

class AppController extends Controller{

    public function index(){
        $task = new TasksModel();
        $data['tasks'] = $task->listTaskModel();
        
        $this->setData($data);
        $this->render('tasksView');
    }

    public function addTaskController(){
        $request = $this->easy_request();

        if($request->server->get('REQUEST_METHOD') == "POST"){
            $data = [
                'title'=>$request->request->filter('title'),
                'description'=>$request->request->filter('description'),
                'create_at'=>date('Y-m-d H:i:s'),
                'status'=>'pending'
            ];
            $task = new TasksModel();
            $task->addTaskModel($data);

            $this->redirect( ['controller'=>'app','action'=>'index'] );
        }
    }

    public function deleteTaskController($idTask){
        $task = new TasksModel();
        $task->deleteTaskModel($idTask);
        $this->redirect( ['controller'=>'app','action'=>'index'] );
    }

    public function editTaskController($idTask){
        $task = new TasksModel();
        $data['task'] = $task->getTaskModel($idTask);
        
        $this->setData($data);
        $this->render('editView');
    }

    public function updateTaskController(){
        $request = $this->easy_request();

        if($request->server->get('REQUEST_METHOD') == "POST"){
            $data = [
                'title'=>$request->request->filter('title'),
                'description'=>$request->request->filter('description'),
                'status'=>$request->request->filter('status')
            ];
            $task = new TasksModel();
            $task->updateTaskModel($request->request->filter('idTask'),$data);

            $this->redirect( ['controller'=>'app','action'=>'index'] );
        }
    }

}