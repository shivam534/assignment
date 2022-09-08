<?php

namespace App\Controllers;

use App\Models\QualificationModel;

class Qual extends BaseController
{
    public function index()
    {
        $data = [];
        $session = \Config\Services::session();
        helper('form');
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'marticulation' => 'required',
                'intermediate' => 'required',
                'graduation' => 'required',
                'post_graduation' => 'required',
            ]);

            if ($input == true) {
                $model = new QualificationModel();
                $model->save([
                    'class10' => $this->request->getPost('marticulation'),
                    'class12' => $this->request->getPost('intermediate'),
                    'graduation' =>  $this->request->getPost('graduation'),
                    'post_graduation' =>  $this->request->getPost('post_graduation'),
                    'Education_gap' =>  $this->request->getPost('gap'),

                ]);

                $session->setFlashdata('success', 'thnk,record added successfully');
                return redirect()->to('pay');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('detail\qualification\qualification.php', $data);
    }
}
