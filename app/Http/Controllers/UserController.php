<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =User::all();
        return view('users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */

     public function sendSMS($phone_number,$validation_code,$f_name,$la_name){

        $api_key='8d4664249a9132c9';
        $secret_key = 'NDY1OWQ2N2JkOTgzZmRlZjBlNjlhZTUyZDY4ODVlMzM2MjFhMDEwY2YwZDI4MzFkZmJhMGM3ODFkMGRiMjhmNg==';
        
        $message = "Welcome ". $f_name ." ".$la_name."  Your verification code is " .$validation_code;
        
     

        $postData = array(
            'source_addr' => 'INFO',
            'encoding'=>0,
            'schedule_time' => '',
            'message' => $message,
            'recipients' => [


                array('recipient_id' => '1','dest_addr'=>$phone_number)
                
                
                
                ]
        );
        
        $Url ='https://apisms.beem.africa/v1/send';
        
        $ch = curl_init($Url);
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic ' . base64_encode("$api_key:$secret_key"),
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));
        
        $response = curl_exec($ch);
        
        // if($response === FALSE){
        //         echo $response;
        
        //     die(curl_error($ch));
        // }
        // var_dump($response);
    
        
     }
     public function randomNumber()
     {
        $code = random_int(100000,999999);
        return $code;
     }
    public function store(Request $request)
    {
        $request->validate([
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required|email|unique:users',
            'phone'=>'required',
            'password'=>'required'
           
       ]);

      

      $data = User::create(
          [
              'f_name' => $request->f_name,
              'l_name' => $request->l_name,
              'email' => $request->email,
              'phone' => $request->phone,
              'password' => $request->password,
              'validation_code' => $this->randomNumber()
          ]
      );
      //dd($data);
       $this->sendSMS($request->phone, $this->randomNumber(), $request->f_name,$request->l_name);



       notify()->success('Data saved⚡️');
       return redirect()->route('users.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index')->with('message', 'deleted successfully');
    }
}
