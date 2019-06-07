<?php
namespace Controllers;


use Models\RobotModel;
use Models\RobotReplayModel;

class RobotController extends Controller
{
    public function home(){

        if ($this->request->requestMethod() == 'POST') {
            $shortCut = $this->app->filter->string($this->request->post('short_cut'));
            $id = $this->app->filter->int($this->request->post('student_id'));

            $result = RobotModel::getBy('short_cut', $shortCut);

            $time = time();
            $time = date('Y:d:m - h:i:s', $time);



            if(empty($result) == false){
                RobotReplayModel::insert(['short_cut', 'code', 'student_id', 'chat_time'], [$result->short_cut, $result->code, $id, $time]);
               ?>
                <div class="border rounded p-2 mb-2">
                    <div class="me text-light">
                        ME: <?= $this->filter->string($result->short_cut) ?>
                        <span class="small float-right"><i><?= $time ?></i></span>
                    </div>
                    <div class="replay mb-2">ROBOT: <?= $this->filter->string($result->code) ?></div>
                </div>


            <?php } else { ?>
                <div class="me text-warning">ME: <?= $this->filter->string($shortCut) ?></div>
                <div class="replay text-danger">ROBOT: Sorry I can't understand you </div>
            <?php }


        }
    }

    public function getAllChat(){
        $id = $this->session->get('user_id');
        $sql ="SELECT * FROM robot_chat WHERE student_id = $id ORDER BY chat_id DESC";
        $replayes = RobotReplayModel::query($sql);
        if (empty($replayes) == false){
            foreach ($replayes as $replaye) { ?>
                <div class="border rounded p-2 mb-2">
                    <div class="me text-light">
                        ME: <?= $this->filter->string($replaye->short_cut) ?>
                        <span class="small float-right"><i><?= $replaye->chat_time ?></i></span>
                    </div>
                    <div class="replay mb-2">ROBOT: <?= $this->filter->string($replaye->code) ?></div>

                </div>
            <?php }
        } else { ?>
            <div class="replay text-danger">ROBOT: Sorry you never speak to me before </div>
        <?php }

    }
}