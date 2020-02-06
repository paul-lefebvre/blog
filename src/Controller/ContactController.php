<?php
namespace src\Controller;

class ContactController extends AbstractController{
    private $mailer;
    private $transport;

    public function __construct()
    {
        parent::__construct();
        $this->transport = (new \Swift_SmtpTransport('smtp.mailtrap.io', 25))
            ->setUsername('3dd84281bc8679')
            ->setPassword('8a9180301c670a');
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
        if($_POST AND $_SESSION['token'] == $_POST['token']){
            $mail = (new \Swift_Message('Contact depuis le formulaire'))
                ->setFrom([$_POST["email"] => $_POST["nom"]])
                ->setTo('contact@monsite.fr')
                ->setBody(
                    $this->twig->render('Contact/mail.html.twig',
                        [
                            'message' => $_POST["content"]
                        ])
                    ,'text/html'
                );


            $result = $this->mailer->send($mail);

            return $result;
        }else{
            // Génération d'un TOKEN
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('Contact/form.html.twig',
                [
                    'token' => $token
                ]);
        }
    }

}
