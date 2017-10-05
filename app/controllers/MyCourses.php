<?php
/**
 *
 */
 //TODO: Retake list not handdeled
class MyCourses extends MainController
{

    public function __construct()
    {
        parent::__construct();
        Session::checkSession();
    }

    public function Index()
    {
        self::myCourses();
    }

    public function myCourses($term = 1)
    {
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

        $data = ['pageName' => 'My Courses'];
        $this->load->view('header', $data);

        array_push($data, $termName);
        // var_dump($registerCourseModel->getCourseListByTermIdUserId($term));
        array_push($data, $registerCourseModel->getCourseListByTermIdUserId($term));
        array_push($data, $registerCourseModel->getSumOfCreditByTermIdUserId($term));
        $data['term'] = $term;

        $this->load->view('student/myCourse', $data);

        $this->load->view('footer');
    }
}
?>
