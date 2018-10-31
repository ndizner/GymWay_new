<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		 // initiate faker
        $this->faker = Faker\Factory::create();

 		 // load any required models
        $this->load->model('seeder_model');

    }

 	function index()
 	{
 		$data['users'] = $this->user_model->get();
 		$this->load->view('users', $data);
 	}
    /**
     * seed local database
     */
    function seed()
    {
        // purge existing data
        //$this->_truncate_db();

        // seed users
        $this->_start_seed(2500);

        // call more seeds here...
    }

    /**
     * seed users
     *
     * @param int $limit
     */
    function _start_seed($limit)
    {


        // create a bunch of base buyer accounts
        for ($i = 0; $i < $limit; $i++) {


            $data = array(

              'payment_customer_id' => rand(151,250),
              'payment_plan_id' => 5,
              'payment_user_id' => rand(3,5),
              'payment_date' => $this->faker->dateTimeThisYear($max = 'now')->format('Y-m-d H:i:s'),
              'payment_amount' => 800,
              'payment_status' => 1,

              // 'products_sales_code' => rand(3,7),
              // 'products_sales_date' => $this->faker->dateTimeThisYear($max = 'now')->format('Y-m-d H:i:s'),
              // 'products_sales_name' => $this->faker->lastName,
              // 'products_sales_amount' =>rand(55,276),
              // 'products_sales_user_id' => rand(3,5),
              // 'products_sales_status' => 1,

              /*
              'customer_entry_customer_id' => rand(1, 250),
      				'customer_entry_date' => $this->faker->dateTimeThisYear->format('Y-m-d H:i:s'),
      				'customer_entry_class' => rand(9, 21),
*/

              /*
              'customer_sex' => rand(0, 1),
              'customer_id_plan' => rand(2,5),
              'customer_dni' => $this->faker->unique()->randomNumber($nbDigits = 8),
              'customer_first_name' =>  $this->faker->firstName,
              'customer_last_name' => $this->faker->lastName,
              'customer_email' => $this->faker->unique()->email,
              'customer_phone' => $this->faker->phoneNumber,
              'customer_dob' =>  $this->faker->dateTimeThisCentury->format('Y-m-d H:i:s'),
              'customer_dos' => time(),
              'customer_due_date' => strtotime($this->faker->dateTimeThisYear->format('Y-m-d H:i:s')),
              'customer_emer_name' => $this->faker->lastName.', '.$this->faker->firstName,
              'customer_emer_tel' => $this->faker->phoneNumber,
              'customer_status' => 1,
*/


              // 'username' => $this->faker->unique()->userName, // get a unique nickname
              // 'password' => md5('12345'), // run this via your password hashing function
              // 'firstname' => $this->faker->firstName,
              // 'lastName' => $this->faker->lastName,
              // 'gender' => rand(0, 1) ? 'male' : 'female',
              // 'bio' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, rem, est! Omnis perferendis, nisi obcaecati modi aliquam, neque! Culpa quia, animi itaque numquam praesentium nemo ut repudiandae eius, debitis nulla.',
              // 'address' => $this->faker->streetAddress,
              // 'city' => $this->faker->city,
              // 'state' => $this->faker->state,
              // 'country' => $this->faker->country,
              // 'postcode' => $this->faker->postcode,
              // 'email' => $this->faker->email,
              // 'email_verified' => mt_rand(0, 1) ? '0' : '1',
              // 'phone' => $this->faker->phoneNumber,
              // 'birthdate' => $this->faker->dateTimeThisCentury->format('Y-m-d H:i:s'),
              // 'registration_date' => $this->faker->dateTimeThisYear->format('Y-m-d H:i:s'),
              // 'ip_address' => mt_rand(0, 1) ? $this->faker->ipv4 : $this->faker->ipv6,
              // 'status' => $i === 0 ? true : rand(0, 1),
            );

            $this->seeder_model->insert($data);
        }
 		$this->session->set_flashdata('message', 'Database Seeds Successfully 25 Records Added In Database');
        redirect('user/index', 'location');
    }

    private function _truncate_db()
    {
        $this->seeder_model->truncate();
    }



}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
