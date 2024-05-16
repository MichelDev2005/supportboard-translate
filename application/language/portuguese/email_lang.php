<?php

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

// Novo Usuário (Área Administrativa):
$lang['e_send_password_subject'] = 'Sua Conta foi Registrada';
$lang['e_send_password_message'] = '<p>
                                   Olá %s,
                                   <br><br>
                                   <span>Sua conta foi registrada com sucesso, você pode usar a senha abaixo para fazer login:</span>
                                   <br>
                                   <span>%s</span>
                                   <br><br>
                                   <span>Obrigado,<br>%s</span>
                                   </p>';
// Configurações de Email:
$lang['e_test_email_subject']    = 'Teste das Configurações de Email';
$lang['e_test_email_message']    = '<p>Olá, parece que suas configurações estão corretas.</p>';

// Enviar Email para o Usuário:
$lang['e_email_user_message']    = 'Olá %s,
                                   <br>
                                   <p>%s<p>
                                   <span>Obrigado,<br>Suporte %s</span>';
?>