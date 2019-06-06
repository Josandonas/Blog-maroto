<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;


class ExampleConversation extends Conversation{
 /**
     * First question
     */
    public function askReason()
    {
        $question = Question::create("Daijobu Shounen, Nazete? WATASHI GA KITA!! Como posso te ajudar?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Como funciona o cadastro?')->value('dcadastro'),
                Button::create('Como faço login?')->value('dlogin'),
                Button::create('Esqueceu a sua senha?')->value('dsenha'),
                Button::create('Como faço publicações?')->value('dpub'),
                Button::create('Quero entrar em contato com os administradores, como faço?')->value('dcontato'),
                Button::create('Quero mandar uma mensagem para outro usuário, é possível?')->value('dchat'),
                Button::create('Posso salvar imagens em algum lugar?')->value('dgaleria'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'dcadastro') {
                    //$joke = json_decode(file_get_contents('http://api.icndb.com/jokes/random'));
                    $this->say('Para se registrar no nosso blog você vai precisar informar o seu nome,
                        um e-mail, criar uma senha e confirma-la. Após todos os requisitos terem sido atendidos, você receberá um e-mail de confirmação.');
                    $this->say('Shounen, Caso precise da minha ajuda novamente é só chamar!! e lembre-se PLUS ULTRA!!');
                } 
                if ($answer->getValue() === 'dlogin') {
                    $this->say('Para logar no sistema basta utilizar o e-mail e a senha informados na hora
                        de criar a conta.');
                    $this->say('Shounen, Caso precise da minha ajuda novamente é só chamar!! e lembre-se PLUS ULTRA!!');
                }
                if ($answer->getValue() === 'dsenha') {
                    $this->say('Se você esqueceu sua senha, basta ir até a seção login, depois na opção
                        "esqueceu sua senha" e informar o e-mail utilizado na hora de criar a conta. Assim
                        que realizar essas ações, iremos te enviar um e-mail com os passos para recuperar a sua senha.');
                    $this->say('Shounen, Caso precise da minha ajuda novamente é só chamar!! e lembre-se PLUS ULTRA!!');
                }
                if ($answer->getValue() === 'dpub') {
                    $this->say('Para fazer uma publicação, vá até a opção PUBLICAR, insira um título, o conteúdo e se quiser alguma imagem e pronto, publique!!');
                    $this->say('Shounen, Caso precise da minha ajuda novamente é só chamar!! e lembre-se PLUS ULTRA!!');
                }
                if ($answer->getValue() === 'dcontato') {
                    $this->say('Para entrar em contato conosco basta ir até a seção CONTATO, informar seu nome, e-mail, número de telefone e a sua mensagem, prontinho!! Iremos tentar dar 1 feedback o quanto antes.');
                    $this->say('Shounen, Caso precise da minha ajuda novamente é só chamar!! e lembre-se PLUS ULTRA!!');
                }
                if ($answer->getValue() === 'dchat') {
                    $this->say('Sim!! Para entrar em contato com outro usuário, basta ir até a seção CHAT, informar o nome do usuário ou e-mail, dizer o assunto e escrever a sua mensagem, pronto, ele receberá 1 e-mail com a sua mensagem.');
                    $this->say('Shounen, Caso precise da minha ajuda novamente é só chamar!! e lembre-se PLUS ULTRA!!');
                }
                if ($answer->getValue() === 'dgaleria') {
                    $this->say('Você pode salvar imagens na nossa seção Galeria, que está disponível a todos os usuários.');
                    $this->say('Shounen, Caso precise da minha ajuda novamente é só chamar!! e lembre-se PLUS ULTRA!!');
                }
            }
        });
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->askReason();
    }
}
