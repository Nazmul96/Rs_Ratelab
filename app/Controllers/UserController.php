<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\UserDetailsModel;
use App\Models\ReportModel;
use App\Models\FrontendSettingsModel;
use App\Models\SocialIconModel;
use App\Models\PolicyPageModel;
use App\Models\MstemplateModel;
use App\Models\SettingsModel;

class UserController extends BaseController
{
    public function login()
    {
        $userModel = new UserModel();
        $datas = array();

   
         //Login page load---------------------------------------------
         $frontsetting = new FrontendSettingsModel();
         $manage_templates= $frontsetting->where('group_name', 'manage_templates')->find();

        if ($this->request->getMethod() == 'post') {
            
           
            if (!$this->validate('UserLoginValidate')) {
               
                $datas['validation'] = $this->validator;
            } else {
                
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $match_pass = password_hash($password, PASSWORD_BCRYPT);

                $users = $userModel->where('email_address', $email)->first();
                // echo '<pre>';
                // print_r($users);
                // die();
                $data['users'] = $users;
                if ((!empty($users)) && password_verify($password, $users->user_password) && ($email == $users->email_address)) {


                    // $session_data['login_info']=[
                    //     'email'=>$email,
                    //     'password'=>$match_pass,
                    //     'loggedIn' => 'login',
                    //     'name'=>$users->first_name,
                    //   	'username'=>$users->user_name,
                    //  ];


                    $reportModel = new ReportModel();

                    // Creating an instance of entity
                    $reportEntity = new \App\Entities\ReportEntitie();


                    $data_two['last_login'] = time();
                    $data_two['user_name'] = $users->user_name;
                    $data_two['windows_os'] = $_SERVER['HTTP_USER_AGENT'];
                    $data_two['ip_address'] = $_SERVER['SERVER_ADDR'];

                    $reportEntity->fill($data_two); //here use entity class

                    $reportModel->save($reportEntity);
                  
                    return redirect()->to(base_url('/user/user-profile/' . $users->tbl_user_id));

                } else {
                    return redirect()->to(base_url('/user/login'))->with('success', 'Sorry! emails or password are incorrect');
                }
            }
        }

        //Footer-----------------------
        $datas['login_section'] = $frontsetting->where('group_name', 'login_section')->findAll();

        //settings-----------------
        $setting = new SettingsModel();
        $datas['user_registration'] = $setting
            ->where('group_name', 'General Setting')
            ->Where('settings_name', 'user_registration')
            ->findAll();



        if($manage_templates[0]['settings_value'] == 'theme1')
        {
            //echo 'hello';die();
            return view('frontend/temp-one/login/login', $datas);
        }
        if($manage_templates[0]['settings_value'] == 'theme2')
        {
        //    echo '<pre>';
        //    print_r($datas);
        //    die();
           return view('frontend/temp-two/login/login', $datas);
        }
    }

    public function forgot_password()
    {
        $data = array();
        //Footer-----------------------
        $frontsetting = new FrontendSettingsModel();
        $data['footer_section'] = $frontsetting->where('group_name', 'footer_section')->findAll();

        $data['breadcrumb'] = $frontsetting->where('group_name', 'breadcrumb')->findAll();

        $data['forgot_password'] = $frontsetting->where('group_name', 'forgot_password')->findAll();

        $policy_pages = new PolicyPageModel();
        $data['policy_pages'] = $policy_pages->findAll();

        //Social icon-------------------
        $icon = new SocialIconModel();
        $data['social_icon'] = $icon->findAll();

        $user = new UserModel();
        $notification = new MstemplateModel();

        if ($this->request->getMethod() == 'post') {

            if (!$this->validate('userForgotValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $info = $this->request->getVar();
                $getUser = $user->where('email_address', $info['admin_email'])->first();

                if ($getUser) {
                    $id = $getUser->tbl_user_id;
                    $token = random_string('alnum', 8);
                    $passToken = [
                        'password_reset_token' => $token,
                    ];

                    $user->where('tbl_user_id', $id)->set($passToken)->update();
                    $getNotification = $notification->where('id', 1)->first();



                    $change = ["{app_name}"];
                    $changeTo = ["RS Property"];
                    echo $emailSubject = str_replace($change, $changeTo, $getNotification->mail_sub);

                    $link = base_url() . '/user/reset_password/' . $token;
                    $source = ["{receiver_name}", "{app_name}", "{link}"];
                    $dist = [$getUser->first_name . ' ' . $getUser->last_name, "RS Ratelab", $link];
                    echo $emailBody = str_replace($source, $dist, $getNotification->mail_body);

                    die();

                    $email = $getUser->email_address;
                    rs_send_email($email, $emailSubject, $emailBody);

                    $data['success'] = '<div class="alert alert-success text-center">We are sending password reset link to your email please check!</div>';
                } else {
                    $data['error'] = '<div class="alert alert-warning text-center">Email Does Not Match!</div>';
                }
            }
        }

        return view('frontend/temp-one/login/forgot_password', $data);
    }

    public function reset_password($token)
    {
        //Footer-----------------------
        $frontsetting = new FrontendSettingsModel();
        $data['footer_section'] = $frontsetting->where('group_name', 'footer_section')->findAll();

        $data['breadcrumb'] = $frontsetting->where('group_name', 'breadcrumb')->findAll();

        $data['reset_password'] = $frontsetting->where('group_name', 'reset_password')->findAll();

        $policy_pages = new PolicyPageModel();
        $data['policy_pages'] = $policy_pages->findAll();

        //Social icon-------------------
        $icon = new SocialIconModel();
        $data['social_icon'] = $icon->findAll();

        $user = new UserModel();
        $getToken = $user->where('password_reset_token', $token)->first();

        $data['token'] = $token;

        if ($getToken) {
            if ($this->request->getMethod() == 'post') {
                if (!$this->validate('userResetValidate')) {
                    $data['validation'] = $this->validator;
                } else {
                    $info = $this->request->getVar();

                    $pass = $info['new_password'];
                    $rePass = $info['confirm_pass'];

                    $hashPass = password_hash($pass, PASSWORD_BCRYPT);

                    if (strlen($pass == $rePass)) {
                        $passUpdate = [
                            'user_password' => $hashPass,
                            'password_reset_token' => '',
                        ];

                        $user->where('password_reset_token', $token)
                            ->set($passUpdate)
                            ->update();

                        $data['success'] = '<div class="alert alert-success text-center">Password update successfully!</div>';
                    } else {
                        $data['error'] = '<div class="alert alert-warning text-center">Password and confirm password does not match!</div>';
                    }
                }
            }
            return view('frontend/login/reset_password', $data);
        } else {
            $data['invalidToken'] = '<div class="alert alert-warning text-center">Invalid Token!</div>';
            return view('frontend/temp-one/login/invalid_token', $data);
        }
    }

    public function registration()
    {
        $datas = array();
        $setting = new SettingsModel();

        if ($this->request->getMethod() == 'post') {

            $secure_password = $setting->where('group_name', 'General Setting')
                ->Where('settings_name', 'secure_password')
                ->find();
                
            if ($secure_password[0]->settings_value == 0) {
                if (!$this->validate('UserRegistrationValidate')) {

                    $datas['validation'] = $this->validator;
                } else {
                    $id = $this->registration_new();

                    //settings-----------------
                    $setting = new SettingsModel();
                    $user = new UserModel();


                    $mailverification = $setting
                        ->where('group_name', 'General Setting')
                        ->Where('settings_name', 'email_verification')
                        ->find();

                    $sms_verification_check = $setting
                        ->where('group_name', 'General Setting')
                        ->Where('settings_name', 'sms_verification')
                        ->find();

                    //      echo '<pre>';
                    //  print_r($sms_verification_check);
                    //  die();

                    $email_verification = new MstemplateModel();

                    $email_verification_new = $email_verification->where('id', 3)->find();

                    $sms_verification_new = $email_verification->where('id', 4)->find();

                    $email = $this->request->getVar('email');
                    $phone = $this->request->getVar('phone_number');

                    $token = random_string('alnum', 6);
                    $mailToken = [
                        'email_verification_token' => $token,
                    ];

                    $user->where('tbl_user_id', $id)->set($mailToken)->update();

                    if ($sms_verification_check[0]->settings_value == 1) {
                        $body = $sms_verification_new[0]->mail_body;

                        $source = ["{{code}}"];
                        $dist = [$token];
                        $emailBody = str_replace($source, $dist, $body);

                        //sms_code_send($emailBody,$phone);

                    }
                    if ($mailverification[0]->settings_value == 1) {


                        $subject = $email_verification_new[0]->mail_subject;

                        $source = ["{{code}}"];
                        $dist = [$token];
                        $emailBody = str_replace($source, $dist, $email_verification_new[0]->mail_body);


                        //rs_send_email($email, $subject, $emailBody);

                        return redirect()->to(base_url('/user/email_verify/' . $token));
                    } else {
                        $data['email_verification'] = 0;
                        $user->where('tbl_user_id ', $id)
                            ->set($data)
                            ->update();

                        return redirect()->to(base_url('/user/user-profile/' . $id));
                    }
                }
            } else {
                if (!$this->validate('UserRegistrationValidate_new')) {

                    $datas['validation'] = $this->validator;
                } else {

                    $id = $this->registration_new();

                    //settings-----------------
                    $setting = new SettingsModel();
                    $user = new UserModel();


                    $mailverification = $setting
                        ->where('group_name', 'General Setting')
                        ->Where('settings_name', 'email_verification')
                        ->find();

                    $sms_verification_check = $setting
                        ->where('group_name', 'General Setting')
                        ->Where('settings_name', 'sms_verification')
                        ->find();

                    $email_verification = new MstemplateModel();

                    $email_verification_new = $email_verification->where('id', 3)->find();

                    $sms_verification_new = $email_verification->where('id', 4)->find();

                    $email = $this->request->getVar('email');
                    $phone = $this->request->getVar('phone_number');



                    $token = random_string('alnum', 6);
                    $mailToken = [
                        'email_verification_token' => $token,
                    ];

                    $user->where('tbl_user_id', $id)->set($mailToken)->update();

                    //  echo '<pre>';
                    //  print_r($email_verification_new[0]->mail_body);
                    //  die();

                    if ($sms_verification_check[0]->settings_value == 1) {
                        $body = $sms_verification_new[0]->mail_body;

                        $source = ["{{code}}"];
                        $dist = [$token];
                        $emailBody = str_replace($source, $dist, $body);

                        //sms_code_send($emailBody,$phone);

                    }

                    if ($mailverification[0]->settings_value == 1) {


                        $subject = $email_verification_new[0]->mail_subject;

                        $source = ["{{code}}"];
                        $dist = [$token];
                        $emailBody = str_replace($source, $dist, $email_verification_new[0]->mail_body);

                        //rs_send_email($email, $subject, $emailBody);

                        return redirect()->to(base_url('/user/email_verify/' . $token));
                    } else {
                        $data['email_verification'] = 0;
                        $user->where('tbl_user_id ', $id)
                            ->set($data)
                            ->update();

                        return redirect()->to(base_url('/user/user-profile/' . $id));
                    }
                }
            }
        }

        //Footer-----------------------
        $frontsetting = new FrontendSettingsModel();
        $datas['register_section'] = $frontsetting->where('group_name', 'register_section')->findAll();

        //settings-----------------

        $datas['agree_policy'] = $setting
            ->where('group_name', 'General Setting')
            ->Where('settings_name', 'agree_policy')
            ->findAll();

        $manage_templates= $frontsetting->where('group_name', 'manage_templates')->find();
        if($manage_templates[0]['settings_value'] == 'theme1')
        {        
             return view('frontend/temp-one/login/registration', $datas);
        }
        if($manage_templates[0]['settings_value'] == 'theme2')
        {              
            return view('frontend/temp-two/login/registration', $datas);
        }
    }

    public function email_verify($token)
    {
        //  echo $token;die();   
        //Footer-----------------------
        $frontsetting = new FrontendSettingsModel();
        $data['footer_section'] = $frontsetting->where('group_name', 'footer_section')->findAll();

        $data['breadcrumb'] = $frontsetting->where('group_name', 'breadcrumb')->findAll();

        $data['verification_code'] = $frontsetting->where('group_name', 'verification_code')->findAll();

        $policy_pages = new PolicyPageModel();
        $data['policy_pages'] = $policy_pages->findAll();

        //Social icon-------------------
        $icon = new SocialIconModel();
        $data['social_icon'] = $icon->findAll();


        $user = new UserModel();

        if ($this->request->getMethod() == 'post') {
            if (!$this->validate('emailVerrifyValidate')) {
                $data['validation'] = $this->validator;
            } else {
                $code = $this->request->getVar('verify_code');

                $getToken = $user->where('email_verification_token', $code)->first();



                $time = $getToken->created_at;
                $time_str = strtotime($time);

                $cuurent_time = time();

                $new_time = $cuurent_time - $time_str;

                $min = $new_time / 60;
                $new_min = number_format((float)$min, 0, '.', '');


                if (($getToken) && ($new_min < 5)) {
                    $data['email_verification_token'] = '';
                    $data['email_verification'] = 0;

                    $user->where('tbl_user_id ', $getToken->tbl_user_id)
                        ->set($data)
                        ->update();

                    $data['success'] = '<div class="alert alert-success text-center">Your Registration successfully! complete</div>';

                    return redirect()->to(base_url('/user/user-profile/' . $getToken->tbl_user_id));
                } else {
                    $data['error'] = '<div class="alert alert-warning text-center">Code Does Not Match!</div>';

                    // $data['invalidCode'] = '<div class="alert alert-warning text-center">Invalid Code!</div>';
                    // return view('frontend/login/invalid_code',$data);
                }
            }
        }

        // $query = $this->db->query("SELECT * FROM tbl_users ORDER BY 	tbl_user_id DESC LIMIT 1");

        $data['result'] = $user->where('email_verification_token', $token)->first();


        return view('frontend/temp-one/login/email_verify', $data);
    }

    public function resend_verify_code($id)
    {
        $user = new UserModel();
        $email_verification = new MstemplateModel();

        //settings-----------------
        $setting = new SettingsModel();


        $mailverification = $setting
            ->where('group_name', 'General Setting')
            ->Where('settings_name', 'email_verification')
            ->find();

        $sms_verification_check = $setting
            ->where('group_name', 'General Setting')
            ->Where('settings_name', 'sms_verification')
            ->find();


        $email_verification_new = $email_verification->where('id', 3)->find();

        $sms_verification_new = $email_verification->where('id', 4)->find();

        $email = $this->request->getVar('email');

        $token = random_string('alnum', 6);
        $mailToken = [
            'email_verification_token' => $token,
            'created_at' => date("Y-m-d H:i:s"),
        ];

        $user->where('tbl_user_id', $id)->set($mailToken)->update();

        if ($sms_verification_check[0]->settings_value == 1) {
            $user = $user->where('tbl_user_id', $id)->first();
            $phone = $user->phone_number;
            $body = $sms_verification_new[0]->mail_body;

            $source = ["{{code}}"];
            $dist = [$token];
            $sms_body = str_replace($source, $dist, $body);

            //sms_code_send($sms_body,$phone);
        }

        if ($mailverification[0]->settings_value == 1) {
            $subject = $email_verification_new[0]->mail_subject;

            $source = ["{{code}}"];
            $dist = [$token];
            $emailBody = str_replace($source, $dist, $email_verification_new[0]->mail_body);
            //rs_send_email($email, $subject, $emailBody);
        }

        // print_r($emailBody);
        // die();
        return redirect()->to(base_url('/user/email_verify/' . $token));
    }

    public function ratelab($id)
    {
        //echo $id;die();
        $userModel = new UserModel();
        $userDetailsModel = new UserDetailsModel();

        //theme load load---------------------------------------------
        $frontsetting = new FrontendSettingsModel();
        $manage_templates= $frontsetting->where('group_name', 'manage_templates')->find();

        $datas = array();
        if ($this->request->getMethod() == 'post') {

            if (!$this->validate('userProfileValidate'))
            {
                $datas['validation'] = $this->validator;
            } 
            else
             {
              
                $image = $this->request->getFile('image');
                $old_image = $this->request->getVar('old_image');

                //  echo '<pre>';
                // print_r($image);
                // echo $old_image;
                // die();

                if ($image != '') {

                    if (!empty($old_image)) {
                        unlink('./frontend/images/users/' . $old_image);
                    }
                    $newNameBanner = $image->getRandomName();
                    $image->move(ROOTPATH . 'public/frontend/images/users', $newNameBanner);

                    $datas_new['user_image'] = $newNameBanner;
                } else {
                    $datas_new['user_image'] = $old_image;
                }

                $datas['first_name'] = $this->request->getVar('first_name');
                $datas['last_name'] = $this->request->getVar('last_name');
                $datas['phone_number'] = $this->request->getVar('phone_number');
                $datas['email_address'] = $this->request->getVar('email');


                $datas_new['user_address'] = $this->request->getVar('address');
                $datas_new['user_state'] = $this->request->getVar('state');
                $datas_new['zip_code'] = $this->request->getVar('zip_code');
                $datas_new['user_about'] = $this->request->getVar('user_about');
                $datas_new['user_country'] = $this->request->getVar('country');
                $datas_new['user_city'] = $this->request->getVar('city');

                $update = $userModel->where('tbl_user_id', $id)->set($datas)->update();
                $userDetailsModel->where('user_id', $id)->set($datas_new)->update();
            }
        }


        $builder = $this->db->table('tbl_users');
        $builder->select('*');
        $builder->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.tbl_user_id');
        $builder->where('tbl_user_id', $id);
        $query = $builder->get();
        $user = $query->getResult();
        $datas['users'] = $user;


        //$this->session->destroy();   
        $session_data['login_info'] = [
            'email' => $user[0]->email_address,
            'name' => $user[0]->first_name . ' ' . $user[0]->last_name,
            'loggedIn' => 'login',
            'username' => $user[0]->user_name,
            'user_id' => $user[0]->tbl_user_id,
        ];
        //  echo '<pre>';
        //  print_r($datas);
        //  die();
        $this->session->set($session_data);

        //Footer-----------------------
        $policy_pages = new PolicyPageModel();
        $frontsetting = new FrontendSettingsModel();

        $datas['footer_section'] = $frontsetting->where('group_name', 'footer_section')->findAll();

        $datas['breadcrumb'] = $frontsetting->where('group_name', 'breadcrumb')->findAll();

        $datas['policy_pages'] = $policy_pages->findAll();


        //Social icon-------------------
        $icon = new SocialIconModel();
        $datas['social_icon'] = $icon->findAll();


        if($manage_templates[0]['settings_value'] == 'theme1')
        {
            //echo 'hello';die();
            return view('frontend/temp-one/user/usser_profile', $datas);
        }
        if($manage_templates[0]['settings_value'] == 'theme2')
        {
        //    echo '<pre>';
        //    print_r($datas);die();
           return view('frontend/temp-two/user/user_profile', $datas);
        }

    }

    public function  user_logout()
    {
        //$this->session = \Config\Services::session();
        // $session_data= $this->session->get('login_info');


        //    if($session_data['email'])
        //    {
        $this->session->destroy();
        return redirect()->to(base_url('/user/login'));

        // }
    }

    //Admin Panel----------------------

    public function all_users()
    {
        // $userModel = new UserModel();
        // $data['all_user']=$userModel->findAll();
        $builder = $this->db->table('tbl_users');
        $builder->select('*');
        $builder->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.tbl_user_id');
        $query = $builder->get();
        $data['all_user'] = $query->getResult();
        // echo '<pre>';
        // print_r($data);
        // die();
        return view('admin/user/index.php', $data);
    }

    public function user_details($id)
    {
        if ($this->request->getMethod() == 'post') {

            if (!$this->validate('UserDetailsValidate')) {
                $datas['validation'] = $this->validator;
            } else {
                $post = $this->request->getVar();
                // echo "<pre>";
                // print_r($post);
                // die();

                // if (empty($post['status']) && empty($post['email_verification']) && empty($post['sms_verification'])) {
                //     $datas['status'] = 1;
                //     $datas['email_verification'] = 1;
                //     $datas['sms_verification'] = 1;
                // } else {

                //     $datas['status'] = 0;
                //     $datas['email_verification'] = 0;
                //     $datas['sms_verification'] = 0;
                // }



                $datas['first_name'] = $this->request->getVar('first_name');
                $datas['last_name'] = $this->request->getVar('last_name');
                $datas['phone_number'] = $this->request->getVar('phone_number');
                $datas['email_address'] = $this->request->getVar('email');

                $datas['status'] = $this->request->getVar('status');
                $datas['email_verification'] = $this->request->getVar('email_verification');
                $datas['sms_verification'] = $this->request->getVar('sms_verificaton');


                $datas_new['user_address'] = $this->request->getVar('address');
                $datas_new['user_state'] = $this->request->getVar('state');
                $datas_new['zip_code'] = $this->request->getVar('zip_code');
                $datas_new['user_country'] = $this->request->getVar('country');
                $datas_new['user_city'] = $this->request->getVar('city');

                // echo '<pre>';print_r($datas); die();


                $userModel = new UserModel();
                $userDetailsModel = new UserDetailsModel();

                $update = $userModel->where('tbl_user_id', $id)->set($datas)->update();
                $userDetailsModel->where('user_id', $id)->set($datas_new)->update();
            }
        }
        $builder = $this->db->table('tbl_users');
        $builder->select('*');
        $builder->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.tbl_user_id');
        $builder->where('tbl_user_id', $id);
        $query = $builder->get();
        $datas['users'] = $query->getResult();

        return view('admin/user/user_details.php', $datas);
    }

    public function login_history($id)
    {

        $userModel = new UserModel();
        $reportModel = new ReportModel();

        $user = $userModel->where('tbl_user_id', $id)->first();

        $data['report'] = $reportModel->where('user_name', $user->user_name)->findAll();

        // echo '<pre>'; print_r($data['report']); die();

        return view('admin/user/user_login_history.php', $data);
    }


    public function send_email($id)
    {
        $userModel = new UserModel();
        $user = $userModel->where('tbl_user_id', $id)->first();
        $data['user'] = $user;

        if ($this->request->getMethod() == 'post') {

            if (!$this->validate('sendEmailValidate')) {
                $data['validation'] = $this->validator;
            } else {

                $mail_subject = $this->request->getVar('subject');
                $mail_body = $this->request->getVar('message');


                $mail_to = $user->email_address;

                $abc = rs_send_email($mail_to, $mail_subject, $mail_body);

                echo '<pre>';
                print_r($abc);
                die();
            }
        }

        return view('admin/user/user_send_mail.php', $data);
    }

    public function active_users()
    {
        $builder = $this->db->table('tbl_users');
        $builder->select('*');
        $builder->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.tbl_user_id');
        $builder->where('status', 0);
        $query = $builder->get();
        $data['users'] = $query->getResult();

        //$data['user']=$userModel->where('status',1)->findAll();

        return view('admin/user/active_user.php', $data);
    }

    public function banned_users()
    {
        $builder = $this->db->table('tbl_users');
        $builder->select('*');
        $builder->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.tbl_user_id');
        $builder->where('status', 1);
        $query = $builder->get();
        $data['banned_users'] = $query->getResult();

        return view('admin/user/banned_users.php', $data);
    }

    public function email_unverified()
    {
        $builder = $this->db->table('tbl_users');
        $builder->select('*');
        $builder->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.tbl_user_id');
        $builder->where('email_verification', 1);
        $query = $builder->get();
        $data['email_unverified'] = $query->getResult();

        return view('admin/user/email_unverified.php', $data);
    }

    public function sms_unverified()
    {
        $builder = $this->db->table('tbl_users');
        $builder->select('*');
        $builder->join('tbl_user_details', 'tbl_user_details.user_id = tbl_users.tbl_user_id');
        $builder->where('sms_verification', 1);
        $query = $builder->get();
        $data['sms_unverified'] = $query->getResult();

        return view('admin/user/sms_unverified.php', $data);
    }

    public function send_email_all()
    {
        $data = array();
        if ($this->request->getMethod() == 'post') {

            if (!$this->validate('sendEmailValidate')) {
                $data['validation'] = $this->validator;
            } else {


                $userModel = new UserModel();
                $user = $userModel->findAll();

                $mail_subject = $this->request->getVar('subject');
                $mail_body = $this->request->getVar('message');

                foreach ($user as $key => $row) {
                    if ($key == 0) {
                        $single_email = $row->email_address;
                    } else {
                        $email_to[] = $row->email_address;
                    }
                }

                $abc = rs_send_email($email_to, $mail_subject, $mail_body, $single_email);
                echo '<pre>';
                print_r($abc);
                die();
            }
        }

        return view('admin/user/send_email_all.php', $data);
    }

    function registration_new()
    {

        // Creating an instance of modal
        $userModel = new UserModel();
        $userDetailsModel = new UserDetailsModel();

        // Creating an instance of entity
        $user = new \App\Entities\User();
        $userdetails = new \App\Entities\UserDetailsEntitie();

        $password = $this->request->getVar('password');
        $datas['first_name'] = $this->request->getVar('first_name');
        $datas['last_name'] = $this->request->getVar('last_name');
        $datas['email_address'] = $this->request->getVar('email');
        $datas['user_name'] = $this->request->getVar('user_name');
        $datas['phone_number'] = $this->request->getVar('phone_number');
        $datas['user_password'] = password_hash($password, PASSWORD_BCRYPT);

        $datas['user_type'] = 1;
        // echo '<pre>';
        // print_r($datas);
        // die();
        $datas1['user_country'] = $this->request->getVar('country');


        $user->fill($datas); //here use entity class
        $userModel->save($user);
        $user_id = $userModel->getInsertID();
        $id = $user_id;
        $datas1['user_id'] = $user_id;
        $userdetails->fill($datas1);
        $userDetailsModel->save($userdetails);

        // echo $id;
        // die();

        //for login history-------------
        $reportModel = new ReportModel();

        // Creating an instance of entity
        $reportEntity = new \App\Entities\ReportEntitie();


        $data_two['last_login'] = time();
        $data_two['user_name'] = $datas['user_name'];
        $data_two['windows_os'] = $_SERVER['HTTP_USER_AGENT'];
        $data_two['ip_address'] = $_SERVER['SERVER_ADDR'];

        $reportEntity->fill($data_two); //here use entity class

        $reportModel->save($reportEntity);

        return $id;
    }
}
