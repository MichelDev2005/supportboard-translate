<?php

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

// Geral:
$lang['err_token_expired']          = 'O token expirou, você precisa solicitar novamente a mudança de senha.';
$lang['err_invalid_token']          = 'O token de autenticação é inválido ou já foi usado.';
$lang['err_not_updated']            = 'Parece que você não alterou os dados.';
$lang['err_invalid_req']            = 'A solicitação recebida é inválida.';
$lang['err_went_wrong']             = 'Algo deu errado, por favor, tente novamente mais tarde.';
$lang['err_invalid_input']          = 'Entrada inválida, por favor revise os campos.';
$lang['err_temp_disabled']          = 'Desculpe, a ação solicitada está temporariamente desativada.';
$lang['err_missing_keys']           = 'Faltam chaves de API relacionadas, por favor revise as configurações.';
$lang['err_missing_input']          = 'Faltam dados de entrada, por favor revise os campos obrigatórios (*).';
$lang['err_failed_email']           = 'Falha ao enviar o email, pode haver algum problema na configuração.';
$lang['err_failed_email_status']    = 'O mecanismo de envio de email retornou um status de falha, por favor verifique na caixa de entrada do destinatário antes de tentar novamente.';
$lang['err_slug_exists']            = 'Este slug deve ser único para cada post.';
$lang['err_missing_email_config_a'] = 'Desculpe, não é possível continuar, a parte de envio de emails ainda não está configurada.';
$lang['err_missing_parent_cat']     = 'Solicitação inválida, categoria principal ausente.';
$lang['err_delete_subcategories']   = 'Por favor, exclua as subcategorias pertencentes para excluí-la.';
$lang['err_missing_message']        = 'A mensagem é necessária se a opção <q>Mostrar esta Mensagem</q> estiver marcada como <q>Sim</q>.';
$lang['err_recaptcha']              = 'Por favor, certifique-se de que resolveu o Google reCaptcha com sucesso.';
$lang['err_401']                    = '401 - Desculpe, sua solicitação não pode ser processada devido à falta de autorização.';
$lang['err_403']                    = '403 - Desculpe, o servidor se recusou a aceitar sua solicitação.';
$lang['err_404']                    = '404 - Desculpe, o arquivo solicitado não foi encontrado no servidor.';
$lang['err_500']                    = '500 - Desculpe, sua solicitação não pode ser processada devido a problemas técnicos.';
$lang['err_502']                    = '502 - Desculpe, o servidor não conseguiu processar esta solicitação.';
$lang['err_503']                    = '503 - Desculpe, atualmente o servidor não consegue processar esta solicitação.';
$lang['err_nounread_notifications'] = 'Desculpe, não foram encontradas notificações não lidas.';

// Usuários:
$lang['err_not_logged_in']          = 'É necessário estar logado para realizar esta ação.';
$lang['err_req_logged_in']          = 'Você não está logado, por favor faça login para continuar.';
$lang['err_already_registered']     = 'O usuário com este endereço de email já está registrado.';
$lang['err_already_logged_in']      = 'Você já está logado.';
$lang['err_invalid_credentials']    = 'Credenciais inválidas, por favor tente novamente.';
$lang['err_email_not_changed']      = 'Falha ao alterar o endereço de email.';
$lang['err_missing_passwords']      = 'Por favor, revise os campos de senha.';
$lang['err_passwords_unmatched']    = 'As senhas não coincidem, por favor revise os campos.';
$lang['err_passwords_match']        = 'Os campos Senha e Repetir Senha devem ser iguais.';
$lang['err_wrong_password']         = 'Senha atual inválida.';
$lang['err_invalid_email']          = 'Endereço de email inválido.';
$lang['err_user_banned']            = 'Sua conta foi banida deste site.';
$lang['err_pass_reset_token_req']   = 'Nos últimos 15 minutos, você já solicitou uma redefinição de senha.';
$lang['err_too_many_attempts']      = 'Muitas tentativas inválidas, por favor, espere %s antes de tentar novamente.';
$lang['err_registration_disabled']  = 'Desculpe, o registro de usuários está temporariamente desativado.';
$lang['err_reg_add_sess']           = 'O usuário foi registrado com sucesso, mas falhou ao fazer login. Por favor, tente fazer login diretamente.';
$lang['err_send_pass_fe']           = 'O usuário foi registrado com sucesso, mas o envio da senha falhou.';
$lang['err_ev_token_update_failed'] = 'Falha ao definir o token de verificação de email.';
$lang['err_ic_expired']             = 'Código de convite inválido, o código foi usado ou expirou.';
$lang['err_ic_invalid']             = 'Código de convite inválido.';
$lang['err_invalid_invitation']     = 'Solicitação inválida, nenhum convite foi encontrado para este código.';
$lang['err_other_provider']         = 'O usuário com o email desta conta já está registrado com outra fonte.';
$lang['err_cant_impersonate']       = 'Você não pode iniciar a personificação com isso, pois já está personificando.';
$lang['err_user_cant_delete']       = 'Você não pode se excluir.';
$lang['err_already_verified']       = 'Este usuário já está verificado.';
$lang['err_cant_delete_du']         = 'O usuário padrão não pode ser excluído.';
$lang['err_email_taken']            = 'O endereço de email já está em uso.';
$lang['err_username_taken']         = 'O nome de usuário já está em uso.';
$lang['err_already_email_pending']  = 'O endereço de email informado já está pendente.';
$lang['err_pwd_strong']             = 'O campo Senha deve conter número, letra e caractere especial com um mínimo de 12 caracteres.';
$lang['err_pwd_medium']             = 'O campo Senha deve conter número, letra maiúscula e minúscula com um mínimo de 8 caracteres.';
$lang['err_pwd_normal']             = 'O campo Senha deve conter número e letra com um mínimo de 6 caracteres.';
$lang['err_pwd_low']                = 'O campo Senha deve ter pelo menos 6 caracteres.';
$lang['err_same_password']          = 'Parece que sua senha é a mesma de antes, ela deve ser diferente.';
$lang['err_u_change_not_allowed']   = 'Senha, Função e Status não podem ser alterados para o usuário padrão.';
$lang['err_invalid_language']       = 'Entrada de idioma inválida, por favor, atualize a página e tente novamente.';
$lang['err_login_to_chat']          = 'Por favor, faça login em sua conta e recarregue a página para continuar o chat.';
$lang['err_invalid_2fa_code']       = 'Código 2FA inválido, por favor, tente novamente.';

// Suporte:
$lang['err_ticket_closed']          = 'A resposta não pode ser adicionada ao ticket fechado.';
$lang['err_invalid_priority']       = 'Valor de prioridade inválido, por favor, atualize a página e tente novamente.';
$lang['err_invalid_department']     = 'Departamento inválido, por favor, atualize a página e tente novamente.';
$lang['err_ticket_fe']              = 'A resposta foi adicionada com sucesso, mas o envio da notificação por email falhou.';
$lang['err_missing_team_users']     = 'Por favor, selecione pelo menos um usuário para este departamento.';
$lang['err_not_updated_user']       = 'Parece que o registro já está atribuído ao usuário selecionado.';
$lang['err_cant_self_assign']       = 'O usuário que será atribuído a este ticket não deve ser o solicitante.';
$lang['err_cant_self_assign_chat']  = 'O usuário que será atribuído a este chat não deve ser o solicitante.';
$lang['err_delete_faqs']            = 'Por favor, exclua as FAQs pertencentes para excluí-la.';
$lang['err_delete_articles']        = 'Por favor, exclua os artigos pertencentes para excluí-lo.';
$lang['err_assigned_no_template']   = 'Atribuído com sucesso, mas o modelo de email para o gancho relacionado ou idioma não foi encontrado.';
$lang['err_already_voted']          = 'Desculpe, você já votou neste artigo.';
$lang['err_delete_dep_tickets']     = 'Por favor, exclua os tickets pertencentes para excluí-lo.';
$lang['err_already_chatting']       = 'Desculpe, você já tem um chat ativo, por favor, encerre o chat primeiro.';
$lang['err_cant_assign_closed']     = 'Desculpe, o ticket fechado não pode ser atribuído até ser reaberto.';
$lang['err_cant_assign_ended']      = 'Desculpe, o chat encerrado não pode ser atribuído até ser reativado.';
$lang['err_chat_ended']             = 'A resposta não pode ser adicionada ao chat encerrado.';
$lang['err_no_chat_available']      = 'Desculpe, nenhum agente está online no momento, por favor, tente novamente mais tarde ou crie um novo ticket.';
$lang['err_already_verified']       = 'Desculpe, não é possível continuar, o registro já está verificado.';
$lang['err_reached_limited']        = 'Desculpe, não é possível continuar, você atingiu o limite máximo.';
$lang['err_resend_wait_one_minute'] = 'Depois de reenviar, você terá que esperar um minuto antes de fazer outra tentativa.';
$lang['err_no_feedback']            = 'Por favor, selecione um tipo de feedback.';
$lang['err_invalid_pc']             = 'O código de compra é inválido.';
$lang['err_item_support_expired']   = 'Desculpe, o período de suporte para seu item terminou em <q>%s</q>. <a class="text-white" href="%s" target="_blank"><u>Saiba mais</u></a>.';
$lang['err_envato_no_token_passed'] = 'Desculpe, não é possível continuar, nenhum token de API foi passado pelo administrador para Envato.';
$lang['err_went_wrong_epc']         = 'Algo deu errado ao verificar seu código de compra, por favor tente novamente mais tarde.';
$lang['err_ticket_not_found']       = 'O ticket não está disponível (pode ter sido migrado para outro departamento, removido ou inacessível).';
$lang['err_chat_not_found']         = 'O chat não está disponível (pode ter sido migrado para outro departamento, removido ou inacessível).';
$lang['err_incompatible_php']       = 'Desculpe, sua versão do PHP não atende aos requisitos, deve ser pelo menos PHP 8.1 instalado no seu servidor.';
$lang['err_imap_not_filled']        = 'Por favor, preencha as configurações do IMAP para continuar.';
$lang['err_no_imap_library']        = 'A biblioteca IMAP não está instalada ou habilitada no seu servidor, deve estar instalada para continuar.';
$lang['err_requires_email_enable']  = 'O ticket foi criado por email e requer a funcionalidade de email ativada antes de adicionar uma resposta.';

// Configurações:
$lang['err_missing_mm_message']     = 'Por favor, deixe uma mensagem de modo de manutenção para os visitantes.';
$lang['err_invalid_avatar_size']    = 'Entrada inválida para o tamanho máximo do avatar.';
$lang['err_invalid_ak']             = 'Formato inválido para o campo de chave de acesso.';
$lang['err_role_exists']            = 'Este papel já existe.';
$lang['err_review_ip']              = 'IP(s) inválidos encontrados, por favor revise o campo de endereços IP.';

// Ferramentas:
$lang['err_missing_template']       = 'Modelo de email para este gancho ou idioma não encontrado.';
$lang['err_et_exists']              = 'Modelo de email para este gancho e idioma já existe.';

// Campos Personalizados:
$lang['err_options_req']            = 'O campo Opções é necessário para o tipo de campo selecionado.';
?>