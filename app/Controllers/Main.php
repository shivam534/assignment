<?php

namespace App\Controllers;

use App\Models\PersonalModel;
use App\Models\PaymentModel;
use App\Models\QualificationModel;

class  Main extends BaseController
{
    public function index()
    {


        $session = \Config\Services::session();
        $data['session'] = $session;
        $model = new PersonalModel();
        $personalarray = $model->getrecord();
        $data['detail'] = $personalarray;

        echo view('detail\personal\personaldetail.php', $data);

        // For Qualification Detail

        $education = new QualificationModel();
        $qualificationarray = $education->getqualification();
        $data['qualification'] = $qualificationarray;
        echo view('detail\qualification\qualificationdetail.php', $data);

        // For Payment Table 
        $paymodel = new PaymentModel();
        $paymentarray = $paymodel->getpayments();
        $data['payments'] = $paymentarray;
        echo view('detail\payment\paymentdetail.php', $data);
    }
    public function create()
    {
        $data = [];
        $session = \Config\Services::session();
        helper('form');
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'name' => 'required|min_length[5]',
                'dob' => 'required',
                'gender' => 'required',
                'number' => 'required|min_length[10]',
                'address' => 'required',
                'code' => 'required|min_length[6]',

            ]);

            if ($input == true) {
                $model = new PersonalModel();
                $model->save([
                    'name' => $this->request->getPost('name'),
                    'dob' => $this->request->getPost('dob'),
                    'gender' =>  $this->request->getPost('gender'),
                    'number' =>  $this->request->getPost('number'),
                    'address' =>  $this->request->getPost('address'),
                    'code' => $this->request->getPost('code'),
                    'email' =>  $this->request->getPost('email'),
                ]);

                $session->setFlashdata('success', 'thnk,record added successfully');
                return redirect()->to('qual');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('detail\personal\personal.php', $data);
    }
}
