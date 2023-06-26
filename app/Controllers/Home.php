<?php

namespace App\Controllers;
use App\Models\UserDetailsModel;
use App\Models\UserModel;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function register()
    {
        //get
        if($this->request->getMethod( )== "get"){
            echo view('register');
        }
        else if($this-> request->getMethod()=="post"){

                $username=$this->request->getVar("username");
                $email=$this->request->getVar("email");
                $password=$this->request->getVar("password");
                
                $data =[
                    'username'=>$username,
                    'email' =>$email,
                    'password'=> $password
                ];
                $model = new UserModel();
                $model -> insert($data);

                $session= session();
                $session->set("success_message","You have been registered in Successfully!");
                $session->markAsFlashdata('success_message');
                return view('register');

                
            }
            
            
        }
        

    public function login()
    {
        if($this->request->getMethod()=='get'){
            echo view('login');
        }
        else if($this->request->getMethod()=='post'){
            //validate
            if($this->validate([
                'email'=>'required',
                'password'=>'required',
            ])){
                $model= new UserModel();
                $record = $model->where('email',$this->request->getVar('email'))
                ->where('password',$this->request->getVar('password'))
                ->first();

                var_dump($record);
                $session=session();
                if(! is_null($record)){ 
                    $sess_data =[
                        "user_id"=>$record['id'],
                        "username"=> $record['username'],
                        "email"=> $record['email'],
                        "user_type"=> $record['user_type'],
                        "loginned"=>"loginned"
                    ];
                    $session->set($sess_data);
                    if($record['user_type']=='user'){
                        $url="user_dashboard";
                    }
                    elseif($record['user_type']== 'admin'){
                        $url="admin_dashboard";
                    }
                    return redirect()->to(base_url($url)); 
                }else{

                    $session->set('failed_message','Invalid Credentials!');
                    $session->markAsFlashdata('failed_message');
                    return redirect()->back()->withInput();
                }
            }
            else{
                return redirect()->back()->withInput();
            }
        }
       
        
    }
    public function logout(){
        $session = session();
        session_unset();
        session_destroy();

        return redirect()->to(base_url());
    }

    public function profile(){
        if($this->request->getMethod()=='get'){
            echo view('profile');
        }
        elseif($this->request->getMethod()=='post'){
            $country=$this->request->getVar("country");
            $state=$this->request->getVar("state");
            $district=$this->request->getVar("district");
            $pincode=$this->request->getVar("pincode");
            $mobile=$this->request->getVar("mobile");
            $local_address=$this->request->getVar("local_address");
            $permanent_address=$this->request->getVar("permanent_address");

            $model =new UserDetailsModel();
            $session=session();
            $user_id=$session->user_id;
            $record=$model->where('user_id',$user_id)->first();
            $data=[
                'user_id'=> $user_id,
                'country'=> $country,
                'state'=> $state,
                'district'=> $district,
                'pincode'=> $pincode,
                'mobile'=>$mobile,
                'local_address'=>$local_address,
                'permanent_address'=> $permanent_address];
            if(!is_null($record)){
                //update
                $model->update($user_id,$data);
            }
            else{
                //Insert
                $model->insert($data);
            }
            return redirect()->to(base_url('profile'));
        }
        
    }
}
