<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogModel;
use App\Models\SupportTicketModel;
use App\Models\FrontendSettingsModel;
use App\Models\ContacttItemModel;
use App\Models\SocialIconModel;
use App\Models\PolicyPageModel;

class FrontendController extends BaseController
{
    public function blog()
    {
        $blogModel = new BlogModel();

        $data['blog']=$blogModel->findAll();

         //Footer-----------------------
         $frontsetting = new FrontendSettingsModel();
         $data['footer_section']=$frontsetting->where('group_name', 'footer_section')->findAll();

         $data['breadcrumb']=$frontsetting->where('group_name', 'breadcrumb')->findAll();

         $policy_pages = new PolicyPageModel();
         $data['policy_pages']=$policy_pages->findAll();

        //Social icon-------------------
        $icon=new SocialIconModel();
        $data['social_icon']=$icon->findAll();

        //template view load----------------     
        $manage_templates= $frontsetting->where('group_name', 'manage_templates')->find();

        // echo '<pre>';print_r($data);die();
        if($manage_templates[0]['settings_value'] == 'theme1')
        {
            return view('frontend/temp-one/blog/blog_page',$data);

        }
        if($manage_templates[0]['settings_value'] == 'theme2')
        {
            return view('frontend/temp-two/blog/blog_page',$data);
        }

        
    }

    public function blog_details($id)
    {
        $blogModel = new BlogModel();

        //$data['blog']=$blogModel->whereNotIn('id',$id)->findAll();

        $builder = $this->db->table('blogs');
        $subQuery = $this->db->table('blogs')->select('id')->where('id', $id);
        $builder->whereNotIn('id', $subQuery);
        $query=$builder->get();
        $data['blog']= $query->getResult();

        $data['single_blog']=$blogModel->find($id);

         //Footer-----------------------
         $frontsetting = new FrontendSettingsModel();
         $data['footer_section']=$frontsetting->where('group_name', 'footer_section')->findAll();

         $data['breadcrumb']=$frontsetting->where('group_name', 'breadcrumb')->findAll();

         $policy_pages = new PolicyPageModel();
         $data['policy_pages']=$policy_pages->findAll();

        //Social icon-------------------
        $icon=new SocialIconModel();
        $data['social_icon']=$icon->findAll();

         //template view load----------------     
         $manage_templates= $frontsetting->where('group_name', 'manage_templates')->find();

         // echo '<pre>';print_r($data);die();
         if($manage_templates[0]['settings_value'] == 'theme1')
         {
             return view('frontend/temp-one/blog/blog_details',$data);
 
         }
         if($manage_templates[0]['settings_value'] == 'theme2')
         {
             return view('frontend/temp-two/blog/blog_details',$data);
         }
        
    }

    public function contact()
    {
        $datas=array();
        if($this->request->getMethod() == 'post')
        { 
        
            if (!$this->validate('contact_us')) 
            {
                $datas['validation'] = $this->validator;
                
            } 
            else
             {
                // Creating an instance of modal
                $support_ticketModel = new SupportTicketModel();

                // Creating an instance of entity
                $support_ticket = new \App\Entities\SupportTicketEntitie();

                $data['full_name']=$this->request->getVar('full_name');
                $data['email_address']=$this->request->getVar('email_address');
                $data['subject']=$this->request->getVar('subject');
                $data['message']=$this->request->getVar('message');
                $data['ticket_id']=rand(100000,1000000);

                $support_ticket->fill($data);//here use entity class

                $support_ticketModel->save($support_ticket);
                
                return redirect()->to(base_url('/support/ticket/view/'.$data['ticket_id']));
             }
         } 

        $contact=new ContacttItemModel;
        $datas['all_contact']= $contact->findAll();
        
        $frontsetting = new FrontendSettingsModel();
        $datas['contact_heading'] = $frontsetting->where('group_name', 'contact_us')->findAll();

         //Footer-----------------------
         $datas['footer_section']=$frontsetting->where('group_name', 'footer_section')->findAll();
         $datas['breadcrumb']=$frontsetting->where('group_name', 'breadcrumb')->findAll();

         $policy_pages = new PolicyPageModel();
         $datas['policy_pages']=$policy_pages->findAll();

        //Social icon-------------------
        $icon=new SocialIconModel();
        $datas['social_icon']=$icon->findAll();
      
         //template view load----------------     
         $manage_templates= $frontsetting->where('group_name', 'manage_templates')->find();
  
         // echo '<pre>';print_r($data);die();
         if($manage_templates[0]['settings_value'] == 'theme1')
         {
             return view('frontend/temp-one/contact/contact',$datas);
 
         }
         if($manage_templates[0]['settings_value'] == 'theme2')
         {
             return view('frontend/temp-two/contact/contact',$datas);
         }
      
    }

    public function policy_details($id)
    {
       
        $policypage = new PolicyPageModel();
        $data['policypage']=$policypage->find($id);
        
        //Footer-----------------------
        $policy_pages = new PolicyPageModel();
        $frontsetting = new FrontendSettingsModel();

        $data['footer_section']=$frontsetting->where('group_name', 'footer_section')->findAll();

        $data['breadcrumb']=$frontsetting->where('group_name', 'breadcrumb')->findAll();
        
        $data['policy_pages']=$policy_pages->findAll();

        //Social icon-------------------
        $icon=new SocialIconModel();
        $data['social_icon']=$icon->findAll();  

         //template view load----------------     
         $manage_templates= $frontsetting->where('group_name', 'manage_templates')->find();
  
         // echo '<pre>';print_r($data);die();
         if($manage_templates[0]['settings_value'] == 'theme1')
         {
            return view('frontend/temp-one/important_link/policy_details',$data);
 
         }
         if($manage_templates[0]['settings_value'] == 'theme2')
         {
            return view('frontend/temp-two/important_link/policy_details',$data);
         }
       
    }
}
