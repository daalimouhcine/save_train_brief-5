<?php
    class Trains extends Controller {

        public function __construct() {
            $this->trainModel = $this->model('Train');
        }

        public function index() {
            // $trains = $this->trainModel->readTrains();
            // if($trains) {
            //     echo $trains;

            // } else {

            // }
            $data = [
                'title' => 'trains index'
            ];
            $this->view('trains/index', $data);


        }

        public function add() {
            // Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data = [
                    'name' => $_POST['name'],
                    'seat_number' => $_POST['seat_number'],
                    'name_err' => '',
                    'seat_number_err' => ''
                ];

                // VAlidate name
                if(empty($data['name'])) {
                    $data['name_err'] = 'Pleas enter name';
                }

                // Validate seat_number
                if(empty($data['seat_number'])) {
                    $data['seat_number_err'] = 'Pleas enter seats number';

                } elseif($data['seat_number'] <= 0) {
                    $data['seat_number_err'] = "( $data[seat_number] ) is not a valid number";
                }


                // Make sure that errors are empty
                if(empty($data['name_err']) && empty($data['seat_number_err'])) {
                    if($this->trainModel->addTrain($data)) {
                        flash('train_add_success', 'Train add successfully');
                        redirect('trains/index');
                    }

                } else {
                    $this->view('trains/add', $data);
                }

            } else {
                // Init data
                $data = [
                    'name' => '',
                    'seat_number' => '',
                    'name_err' => '',
                    'seat_number_err' => ''
                ];
                // Load View
                $this->view('trains/add', $data);
            }
            

            

            
        }


    }