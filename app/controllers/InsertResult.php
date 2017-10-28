<?php
/**
 * Created by PhpStorm.
 * User: Akib
 * Date: 10/26/2017
 * Time: 2:12 PM
 */

class InsertResult extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::main();
    }

    public function main($term = 1){
        $data   = [];
        $pageName = ['pageName' => 'Insert Result'];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $term = $_POST['ddlYearTerm'];
        }
        $registerCourseModel = $this->load->model('RegisterCourseModel');
        $termList = $registerCourseModel->getTermListByUserId();
        $loadDDL = $this->load->model('LoadDropDown');
        $termName = [];
        foreach ($termList as $key => $value) {
            $termName = array_merge($termName,$loadDDL->getAllYearTermById($termList[$key]['term_year_id']));
        }
        array_push($data, $termName);
        $data['term'] = $term;

        $data['course'] = $registerCourseModel->getCourseListByTermIdUserIdApprove($term);

        $this->load->view('header', $pageName);
        $this->load->view('student/insertresult',$data);
        $this->load->view('footer');
    }

    public function result(){
        $result = $_POST['grade'];
        $term = $_POST['term'];
        $id = $_POST['id'];
        $courseId = $_POST['course_id'];
        $simpleModel = $this->load->model('SimpleModel');
        $data = [
            'result' => $result
        ];
        $cond = "id = $id";
        $res = $simpleModel->update('course_registration', $data, $cond);

        if($result == "-1"){
            Session::init();
            $userId = Session::get('id');
            $data=[
                'user_id' => $userId,
                'course_id' => $courseId,
                'type' => 'Retake'
            ];

            $retake = $simpleModel->insert('retake_list', $data);
            if($retake){
                header('Location:'.BASE_URL.'/InsertResult/main/'.$term);
            }else{
                var_dump($retake);
            }
        }else{
            $cond = "course_id = $courseId";
            $isExist = $simpleModel->getAll('retake_list', $cond);
            if($isExist){
                $cond="course_id = $id";
                $delete = $simpleModel->delete('retake_list', $cond);
                if($delete){
                    header('Location:'.BASE_URL.'/InsertResult/main/'.$term);
                }else{
                    var_dump($delete);
                }
            }else{
                header('Location:'.BASE_URL.'/InsertResult/main/'.$term);
            }
        }

    }
}