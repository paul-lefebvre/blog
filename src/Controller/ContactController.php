<?php
namespace src\Controller;

class ContactController extends AbstractController{
    private $mailer;
    private $transport;

    public function __construct()
    {
        parent::__construct();
        $this->transport = (new \Swift_SmtpTransport('smtp.mailtrap.io', 2525))
            ->setUsername('584895c47520db')
            ->setPassword('dc840c4c2b83ac');
        $this->mailer = new \Swift_Mailer($this->transport);

    }

    public function showForm(){
        $token = bin2hex(random_bytes(32));
        $_SESSION['token'] = $token;
        return $this->twig->render('Contact/form.html.twig', [
            'token' => $token
        ]);
    }

    public function sendMail(){
            $mail = (new \Swift_Message('Contact depuis le formulaire'))
                ->setFrom([$_POST["email"] => $_POST["nom"]])
                ->setTo('contact@monsite.fr')
                ->setBody(
                    $this->twig->render('Contact/mail.html.twig',
                        [
                            'message' => $_POST["content"],
                            'nom' =>$_POST["nom"],
                            'titre' => $_POST["Titre"]
                        ])
                    ,'text/html'
                );


            $result = $this->mailer->send($mail);

            return header('Location: /Article/view/'.$_POST['id']);;
        
    }

}
