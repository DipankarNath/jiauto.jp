<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	public function inquery() {
		
		$this->form_validation->set_rules('cname', 'Name of the Vehicle', 'trim|required');
		$this->form_validation->set_rules('message', 'Message', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('phonetic', 'Phonetic', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim');
		$url = base_url();

		if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
    } else {
				$this->load->library('recaptcha');
				if (!$this->recaptcha->is_valid()) {	
						$data['message'] = array(
								'type' => 'danger',
								'message' => 'Form validation failed'
						);
						$this->session->set_flashdata('vErr', 'true');
						header('Location:'.$url.'Inquiry');
						die();
				}
		    $carName = $this->input->post('cname');
		    $msg = $this->input->post('message');
		    $name = $this->input->post('name');
		    $phonetic = $this->input->post('phonetic');
		    $phone = $this->input->post('phone');
		    $email = $this->input->post('email');
            $optradio = $this->input->post('optradio');

            // echo '<pre>';
            // print_r($data); exit;

            $this->load->library('email');

		$subject = 'Inquery';
		
		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
		    <title>' . html_escape($subject) . '</title>
		    <style type="text/css">
		        body {
		            font-family: Arial, Verdana, Helvetica, sans-serif;
		            font-size: 16px;
		        }
		        table {
   		 	font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}
			
			td {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
			}
			
			tr:nth-child(even) {
			    background-color: #dddddd;
			}
			    </style>
		</head>
		<body>
			<table style="border: 1px solid #eee;">
				<tr>
					<td>Car Name :</td>
					<td>' . $carName . '</td>
				</tr>
				<tr>
					<td>Name :</td>
					<td>' . $name . '</td>
				</tr>
				<tr>
					<td>Phonetic :</td>
					<td>' . $phonetic . '</td>
				</tr>
				<tr>
					<td>Phone :</td>
					<td>' . $phone . '</td>
				</tr>
				<tr>
					<td>Email :</td>
					<td>' . $email . '</td>
				</tr>
				<tr>
					<td>Trade-in car :</td>
					<td>' . $optradio . '</td>
				</tr>
				<tr>
					<td>Inquiry</td>
					<td>' . $msg . '</td>
				</tr>
			</table>
		</body>
		</html>';
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);
		
		$this->email->from('received@jiauto.jp');
		$this->email->to('received@jiauto.jp');
		$this->email->subject($subject);
		$this->email->message($body);
		// $result = $this->email
		//        ->from('dipankarnath008@gmail.com')
		       // ->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
		//        ->to('dipankar.n@invenzolabs.com')
		//        ->subject($subject)
		//        ->message($body)
		//        ->send();
		// exit;
            if(! $this->email->send()){
                $this->session->set_flashdata('emailFaild', 'Something went wrong. Please try again later!');
                // show_error($this->email->print_debugger());
                redirect(base_url().'Inquiry');        
            } else {
                $this->session->set_flashdata('emailSucc', 'Email Sent.');
                //print_r("Your Inquery has been Submited. Thank You!");
                redirect(base_url().'Inquiry');
                
            }
        }
	}

	public function sell() {
		$this->form_validation->set_rules('cname', 'Name of the Company', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim');
		$this->form_validation->set_rules('addr', 'Address', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim');
		$this->form_validation->set_rules('fax', 'Fax', 'trim');
		$this->form_validation->set_rules('ctype', 'Contact Method', 'trim|required');
		$this->form_validation->set_rules('maker', 'Maker', 'trim');
		$this->form_validation->set_rules('mname', 'Model Name', 'trim');
		$this->form_validation->set_rules('shape', 'Shape', 'trim');
		$this->form_validation->set_rules('myear', 'Model Year', 'trim');
		$this->form_validation->set_rules('mileage', 'Mileage', 'trim');
		$this->form_validation->set_rules('texp', 'Type Expression', 'trim');
		$this->form_validation->set_rules('remark', 'Remark', 'trim');

		if ($this->form_validation->run() == FALSE) {
                   echo validation_errors();
    } else {
				$this->load->library('recaptcha');
				if (!$this->recaptcha->is_valid()) {	
						$data['message'] = array(
								'type' => 'danger',
								'message' => 'Form validation failed'
						);
						$this->session->set_flashdata('vErr', 'true');
						header('Location:'.$url.'Inquiry');
						die();
				}	
				$cname = $this->input->post('cname');
				$name= $this->input->post('name');
				$addr = $this->input->post('addr');
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
				$fax = $this->input->post('fax');
				$ctype = $this->input->post('ctype');
				$maker = $this->input->post('maker');
				$mname = $this->input->post('mname');
				$shape = $this->input->post('shape');
				$myear = $this->input->post('myear');
				$mileage = $this->input->post('mileage');
				$texp = $this->input->post('texp');
				$remark = $this->input->post('remark');

			$this->load->library('email');

				$subject = 'Sell';

				// Get full html:
				$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
						<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
						<title>' . html_escape($subject) . '</title>
						<style type="text/css">
								body {
										font-family: Arial, Verdana, Helvetica, sans-serif;
										font-size: 16px;
								}
								table {
						font-family: arial, sans-serif;
							border-collapse: collapse;
							width: 100%;
					}

					td{
							border: 1px solid #dddddd;
							text-align: left;
							padding: 8px;
					}

					tr:nth-child(even) {
							background-color: #dddddd;
					}
							</style>
				</head>
				<body>
						 <table>
						<tr><th>Customer Info</th></tr>
						<tr>
							<td>Company Name :</td>
							<td>' . $cname . '</td>
						</tr>
						<tr>
							<td>Contact Name :</td>
							<td>' . $name . '</td>
						</tr>
						<tr>
							<td>Address :</td>
							<td>' . $addr . '</td>
						</tr>
						<tr>
							<td>Phone :</td>
							<td>' . $phone . '</td>
						</tr>
						<tr>
							<td>Email :</td>
							<td>' . $email . '</td>
						</tr>
						<tr>
							<td>Fax :</td>
							<td>' . $fax . '</td>
						</tr>
						<tr>
							<td>Contact Type</td>
							<td>' . $ctype . '</td>
						</tr>
						<tr><th>Car Info</th></tr>
						<tr>
							<td>Maker :</td>
							<td>' . $maker . '</td>
						</tr>
						<tr>
							<td>Model Name :</td>
							<td>' . $mname . '</td>
						</tr>
						<tr>
							<td>Shape :</td>
							<td>' . $shape . '</td>
						</tr>
						<tr>
							<td>Model Year :</td>
							<td>' . $myear . '</td>
						</tr>
						<tr>
							<td>Mileage :</td>
							<td>' . $mileage . '</td>
						</tr>
						<tr>
							<td>Type Expression :</td>
							<td>' . $texp . '</td>
						</tr>
						<tr>
							<td>Remark :</td>
							<td>' . $remark . '</td>
						</tr>
					</table>
				</body>
				</html>';
				// Also, for getting full html you may use the following internal method:
				//$body = $this->email->full_html($subject, $message);

				$this->email->from('received@jiauto.jp');
				$this->email->to('received@jiauto.jp');
				$this->email->subject($subject);
				$this->email->message($body);
				if(! $this->email->send()){
						$this->session->set_flashdata('sellEmailFaild', 'Something went wrong. Please try again later!');
						// show_error($this->email->print_debugger());
						redirect(base_url().'Sell');
				} else {
						$this->session->set_flashdata('sellEmailSucc', 'Email Sent.');
						//print_r("Your Inquery has been Submited. Thank You!");
						redirect(base_url().'Sell'); 
				}
      }
	
}