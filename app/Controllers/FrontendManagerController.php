<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FrontendSettingsModel;
use App\Models\BlogModel;

class FrontendManagerController extends BaseController
{

    //Manages templates----------------------
    public function manage_templates()
    {
        $frontendManager = new FrontendSettingsModel();
        $data['manage_templates'] = $frontendManager->where('group_name', 'manage_templates')->findAll();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'manage_templates');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Manage template Update Successfully');
        }

        return view('admin/manage_templates/manage_templates', $data);
    }

    //Manages Pages----------------------
    public function manage_pages()
    {
        return view('admin/manage_pages/manage_pages');
    }

    //Manage Section start------------------------------
    public function banner_section()
    {
        $frontendManager = new FrontendSettingsModel();
        $blogModel = new BlogModel();

        $data['frontend_manager'] = $frontendManager->where('group_name', 'banner_section')->findAll();




        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();
            // echo '<pre>';
            // print_r($info);
            // die();

            $banner_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');



            if ($banner_image != '') {
                if (file_exists('./admin/uploads/banner_section/' . $old_image)) {

                    unlink('./admin/uploads/banner_section/' . $old_image);
                }
                $newNameBanner = $banner_image->getRandomName();
                $banner_image->move(ROOTPATH . 'public/admin/uploads/banner_section', $newNameBanner);

                $info['banner_image'] = $newNameBanner;
            }


            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'banner_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Banner section Update Successfully');
        }
        return view('admin/frontend_settings/banner_section', $data);
    }

    public function blog_section()
    {

        $frontendManager = new FrontendSettingsModel();
        $blogModel = new BlogModel();

        $data['frontend_manager'] = $frontendManager->where('group_name', 'blog_section')->findAll();

        $data['all_blog'] = $blogModel->findAll();
        // echo '<pre>';
        // print_r($data);
        // die();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'blog_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Blog section Update Successfully');
        }

        return view('admin/frontend_settings/blog_section', $data);
    }

    public function breadcrumb()
    {
        $frontendManager = new FrontendSettingsModel();
        $data['breadcrumb'] = $frontendManager->where('group_name', 'breadcrumb')->findAll();

        if ($this->request->getMethod() == 'post') {

            $banner_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($banner_image != '') {
                if (file_exists('./admin/uploads/breadcrumb/' . $old_image)) {

                    unlink('./admin/uploads/breadcrumb/' . $old_image);
                }
                $newNameBanner = $banner_image->getRandomName();
                $banner_image->move(ROOTPATH . 'public/admin/uploads/breadcrumb', $newNameBanner);

                $info['breadcrumb_image'] = $newNameBanner;
            } else {
                $info['breadcrumb_image'] = $old_image;
            }

            if ($info) {
                foreach ($info as $key => $row) {
                    $builder = $this->db->table('frontend_settings');
                    $builder->where('group_name', 'breadcrumb');
                    $builder->where('settings_name', $key);
                    $builder->update(['settings_value' => $row]);
                }
            }


            return redirect()->back()->with('success', 'Breadcrumb Update Successfully');
        }

        return view('admin/frontend_settings/breadcrumb', $data);
    }

    public function category_section()
    {
        $frontendManager = new FrontendSettingsModel();
        $data['category_section'] = $frontendManager->where('group_name', 'category_section')->findAll();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'category_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Category section Update Successfully');
        }

        return view('admin/frontend_settings/category_section', $data);
    }

    public function choose_reason()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['why_choose_us'] = $frontendManager->where('group_name', 'why_choose_us')->findAll();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'why_choose_us');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Why choose us Update Successfully');
        }

        return view('admin/frontend_settings/why_choose_us', $data);
    }


    public function company_list_section()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['company_list_section'] = $frontendManager->where('group_name', 'company_list_section')->findAll();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'company_list_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Company list section Update Successfully');
        }

        return view('admin/frontend_settings/company_list_section', $data);
    }

    public function contact_us()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['contact_us'] = $frontendManager->where('group_name', 'contact_us')->findAll();


        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'contact_us');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Contact us Update Successfully');
        }

        return view('admin/frontend_settings/contact_us', $data);
    }

    //CTA section------------------------------

    public function cta_section()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['cta_section'] = $frontendManager->where('group_name', 'cta_section')->findAll();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'cta_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'CTA section Update Successfully');
        }

        return view('admin/frontend_settings/cta_section', $data);
    }

    //Email Authentication---------------------

    public function email_authentication()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['email_authentication'] = $frontendManager->where('group_name', 'email_authentication')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            $email_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($email_image != '') {
                if (file_exists('./admin/uploads/email_authentication/' . $old_image)) {

                    unlink('./admin/uploads/email_authentication/' . $old_image);
                }
                $newNameemail = $email_image->getRandomName();
                $email_image->move(ROOTPATH . 'public/admin/uploads/email_authentication', $newNameemail);

                $info['email_authentication'] = $newNameemail;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'email_authentication');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Email authentication Update Successfully');
        }


        return view('admin/frontend_settings/email_authentication', $data);
    }


    public function faq_section()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['faq_section'] = $frontendManager->where('group_name', 'faq_section')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            $faq_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($faq_image != '') {
                if (file_exists('./admin/uploads/faq_section/' . $old_image)) {

                    unlink('./admin/uploads/faq_section/' . $old_image);
                }
                $newNamefaq = $faq_image->getRandomName();
                $faq_image->move(ROOTPATH . 'public/admin/uploads/faq_section', $newNamefaq);

                $info['faq_image'] = $newNamefaq;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'faq_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Faq section Update Successfully');
        }

        return view('admin/frontend_settings/faq_section', $data);
    }

    //Footer section--------------------------

    public function footer_section()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['footer_section'] = $frontendManager->where('group_name', 'footer_section')->findAll();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'footer_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Footer section Update Successfully');
        }

        return view('admin/frontend_settings/footer_section', $data);
    }

    //Forgot Password Section-----------------------
    public function forgot_password_page()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['forgot_password'] = $frontendManager->where('group_name', 'forgot_password')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            $forgot_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($forgot_image != '') {
                if (file_exists('./admin/uploads/forget_password/' . $old_image)) {

                    unlink('./admin/uploads/forget_password/' . $old_image);
                }
                $newName = $forgot_image->getRandomName();
                $forgot_image->move(ROOTPATH . 'public/admin/uploads/forget_password', $newName);

                $info['forgot_image'] = $newName;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'forgot_password');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Forgot password page Update Successfully');
        }

        return view('admin/frontend_settings/forgot_password_page', $data);
    }

    //Login Section---------------------

    public function login_section()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['login_section'] = $frontendManager->where('group_name', 'login_section')->findAll();


        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            $login_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($login_image != '') {
                if (file_exists('./admin/uploads/login_section/' . $old_image)) {

                    unlink('./admin/uploads/login_section/' . $old_image);
                }
                $newName = $login_image->getRandomName();
                $login_image->move(ROOTPATH . 'public/admin/uploads/login_section', $newName);

                $info['login_image'] = $newName;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'login_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Login Section Update Successfully');
        }

        return view('admin/frontend_settings/login_section', $data);
    }


    //Mobile Authenticaation Section-----------------------

    public function mobile_authentication()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['mobile_authentication'] = $frontendManager->where('group_name', 'mobile_authentication')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            $mobile_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($mobile_image != '') {
                if (file_exists('./admin/uploads/mobile_authentication/' . $old_image)) {

                    unlink('./admin/uploads/mobile_authentication/' . $old_image);
                }
                $newName = $mobile_image->getRandomName();
                $mobile_image->move(ROOTPATH . 'public/admin/uploads/mobile_authentication', $newName);

                $info['mobile_image'] = $newName;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'mobile_authentication');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Mobile authentication Update Successfully');
        }

        return view('admin/frontend_settings/mobile_authentication', $data);
    }

    //Policy Page------------------------------

    public function policy_page()
    {

        return view('admin/frontend_settings/policy_page');
    }

    //Register----------------------------------

    public function register()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['register_section'] = $frontendManager->where('group_name', 'register_section')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            $register_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($register_image != '') {
                if (file_exists('./admin/uploads/register/' . $old_image)) {

                    unlink('./admin/uploads/register/' . $old_image);
                }
                $newName = $register_image->getRandomName();
                $register_image->move(ROOTPATH . 'public/admin/uploads/register', $newName);

                $info['register_image'] = $newName;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'register_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Register section Update Successfully');
        }

        return view('admin/frontend_settings/register', $data);
    }

    //Reset Password section--------------------------
    public function reset_password()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['reset_password'] = $frontendManager->where('group_name', 'reset_password')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            // echo '<pre>';
            // print_r($info);
            // die();
            $reset_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($reset_image != '') {
                if (file_exists('./admin/uploads/reset_password/' . $old_image)) {

                    unlink('./admin/uploads/reset_password/' . $old_image);
                }
                $newName = $reset_image->getRandomName();
                $reset_image->move(ROOTPATH . 'public/admin/uploads/reset_password', $newName);

                $info['reset_image'] = $newName;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'reset_password');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Reset password section Update Successfully');
        }

        return view('admin/frontend_settings/reset_password', $data);
    }

    //review section------------------

    public function review()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['review'] = $frontendManager->where('group_name', 'review')->findAll();

        if ($this->request->getMethod() == 'post') {

            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'review');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Review section Update Successfully');
        }

        return view('admin/frontend_settings/review', $data);
    }

    //Social icon----------------------
    public function social_icon()
    {
        return view('admin/frontend_settings/social_icon');
    }

    //Testimonial section------------------

    public function testimonial()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['testimonial'] = $frontendManager->where('group_name', 'testimonial')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();
            // echo '<pre>';
            // print_r($info);
            // die();
            $testimonial_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($testimonial_image != '') {
                if (file_exists('./admin/uploads/testimonial/' . $old_image)) {

                    unlink('./admin/uploads/testimonial/' . $old_image);
                }
                $newName = $testimonial_image->getRandomName();
                $testimonial_image->move(ROOTPATH . 'public/admin/uploads/testimonial', $newName);

                $info['testimonial_image'] = $newName;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'testimonial');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Testimonial section Update Successfully');
        }

        return view('admin/frontend_settings/testimonial', $data);
    }


    public function verification_code()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['verification'] = $frontendManager->where('group_name', 'verification_code')->findAll();

        if ($this->request->getMethod() == 'post') {


            $info = $this->request->getVar();

            $verification_image = $this->request->getFile('image_input');
            $old_image = $this->request->getVar('old_image');


            if ($verification_image != '') {
                if (file_exists('./admin/uploads/verification_code/' . $old_image)) {

                    unlink('./admin/uploads/verification_code/' . $old_image);
                }
                $newName = $verification_image->getRandomName();
                $verification_image->move(ROOTPATH . 'public/admin/uploads/verification_code', $newName);

                $info['verification_image'] = $newName;
            }

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'verification_code');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Verification code section Update Successfully');
        }

        return view('admin/frontend_settings/verification_code', $data);
    }

    public function theme_two_image()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['theme_two_additional_image'] = $frontendManager->where('group_name', 'theme_two_additional_image')->findAll();

        if ($this->request->getMethod() == 'post') {
            
            $additional_image1 = $this->request->getFile('image_input1');
            $additional_image2 = $this->request->getFile('image_input2');
            $additional_image3 = $this->request->getFile('image_input3');
            $additional_image4 = $this->request->getFile('image_input4');
            $additional_image5 = $this->request->getFile('image_input5');
            
            $old_image1 = $this->request->getVar('old_image1');
            $old_image2 = $this->request->getVar('old_image2');
            $old_image3 = $this->request->getVar('old_image3');
            $old_image4 = $this->request->getVar('old_image4');
            $old_image5 = $this->request->getVar('old_image5');
            
            if ($additional_image1 != '') {
                if (file_exists('./admin/uploads/theme_two_image/' . $old_image1)) {

                    unlink('./admin/uploads/theme_two_image/' . $old_image1);
                }
                $newName = $additional_image1->getRandomName();
                $additional_image1->move(ROOTPATH . 'public/admin/uploads/theme_two_image', $newName);

                $info['image_input1'] = $newName;
            }


            if ($additional_image2 != '') {
                if (file_exists('./admin/uploads/theme_two_image/' . $old_image2)) {

                    unlink('./admin/uploads/theme_two_image/' . $old_image2);
                }
                $newName = $additional_image2->getRandomName();
                $additional_image2->move(ROOTPATH . 'public/admin/uploads/theme_two_image', $newName);

                $info['image_input2'] = $newName;
            }

            if ($additional_image3 != '') {
                if (file_exists('./admin/uploads/theme_two_image/' . $old_image3)) {

                    unlink('./admin/uploads/theme_two_image/' . $old_image3);
                }
                $newName = $additional_image3->getRandomName();
                $additional_image3->move(ROOTPATH . 'public/admin/uploads/theme_two_image', $newName);

                $info['image_input3'] = $newName;
            }
            
            if ($additional_image4 != '') {
                if (file_exists('./admin/uploads/theme_two_image/' . $old_image4)) {

                    unlink('./admin/uploads/theme_two_image/' . $old_image4);
                }
                $newName = $additional_image4->getRandomName();
                $additional_image4->move(ROOTPATH . 'public/admin/uploads/theme_two_image', $newName);

                $info['image_input4'] = $newName;
            }

            if ($additional_image5 != '') {
                if (file_exists('./admin/uploads/theme_two_image/' . $old_image5)) {

                    unlink('./admin/uploads/theme_two_image/' . $old_image5);
                }
                $newName = $additional_image5->getRandomName();
                $additional_image5->move(ROOTPATH . 'public/admin/uploads/theme_two_image', $newName);

                $info['image_input5'] = $newName;
            }

            foreach ($info as $key => $row) {
          
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'theme_two_additional_image');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }
            return redirect()->back()->with('success', 'Additional Image Update Successfully'); 
        }
        return view('admin/thme_two_image/thme_two_image',$data);
    }

    public function collaboration_section()
    {
        $frontendManager = new FrontendSettingsModel();

        $data['collaboration_section'] = $frontendManager->where('group_name', 'collaboration_section')->findAll();

       
        if ($this->request->getMethod() == 'post') {

          
            $info = $this->request->getVar();

            foreach ($info as $key => $row) {
                $builder = $this->db->table('frontend_settings');
                $builder->where('group_name', 'collaboration_section');
                $builder->where('settings_name', $key);
                $builder->update(['settings_value' => $row]);
            }

            return redirect()->back()->with('success', 'Collaboration section Update Successfully');
        }
        return view('admin/frontend_settings/collaboration_section',$data);
    }
}
