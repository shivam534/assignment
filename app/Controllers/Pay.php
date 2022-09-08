<?php

namespace App\Controllers;

use App\Models\PaymentModel;

class Pay extends BaseController
{
    public function index()
    {
        $data = [];
        $session = \Config\Services::session();
        helper('form');
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'number' => 'required|min_length[14]',
                'name' => 'required',
                'expiry' => 'required',
                'cvv' => 'required|min_length[3]',
            ]);
            if ($input == true) {
                $model = new PaymentModel();
                $model->save([
                    'number' => $this->request->getPost('number'),
                    'name' => $this->request->getPost('name'),
                    'expiry' =>  $this->request->getPost('expiry'),
                    'cvv' =>  $this->request->getPost('cvv'),

                ]);

                $session->setFlashdata('success', 'thnk,record added successfully');
                return redirect()->to('pay');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('detail\payment\payment.php', $data);
    }
}
