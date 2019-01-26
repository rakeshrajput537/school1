<?php
	/******************** SENDING PASSWORD VIA EMAIL ********************/
		$to = "info@globalshineschool.com"; 
		$subject = "New message from ".$_POST['InputName']."";

		$message = "
			<p align='justify'>
				<font size='2' face='verdana'>Hello School,</font>
			</p>
			
			<p align='justify'>
				<font size='2' face='verdana'>
					<b>".$_POST['InputName']."</b> has left a message for you.
				</font>
			</p>
			
			<p align='justify'>
				<font size='2' face='verdana'>
					'<i>".$_POST['InputName']."</i>'
				</font>
			</p>
			
			<p>
				<font size='2' face='verdana'>
					Sender Phone : <b>".$_POST['InputPhone']."</b> <br />
					Sender Email : <b>".$_POST['InputEmail']."</b> <br />
				</font>
			</p>
				<hr />
				
			<p align='justify'>
				<font size='1.3' color='gray' face='verdana'>
					This message is intended only for the individual named. The information 
					contained in this e-mail message is privileged, confidential, and may be 
					protected from disclosure; please be aware that any other use, printing, 
					copying, disclosure or dissemination of  this communication may be subject 
					to legal restriction or sanction. Please notify the sender immediately by 
					e-mail if you have received it by mistake and delete it from your system. 
					E-mail transmission cannot be guaranteed to be secure or error-free as information 
					could be intercepted, corrupted, lost, destroyed, arrive late or incomplete, 
					or contain viruses. The sender therefore does not accept liability for any errors or omissions 
					in the contents of this message, which arise as a result of e-mail transmission.
				</font>
			</p>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: Message<info@globalshineschool.com>' . "\r\n";

		mail($to,$subject,$message,$headers);
		header('location:index.html')
		/*******/
?>