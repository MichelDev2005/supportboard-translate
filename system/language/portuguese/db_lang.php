<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2019 - 2022, CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @copyright	Copyright (c) 2019 - 2022, CodeIgniter Foundation (https://codeigniter.com/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Não é possível determinar as configurações do banco de dados com base na cadeia de conexão enviada.';
$lang['db_unable_to_connect'] = 'Não é possível conectar-se ao servidor de banco de dados usando as configurações fornecidas.';
$lang['db_unable_to_select'] = 'Não foi possível selecionar o banco de dados especificado: %s';
$lang['db_unable_to_create'] = 'Não foi possível criar o banco de dados especificado: %s';
$lang['db_invalid_query'] = 'A consulta que você enviou não é válida.';
$lang['db_must_set_table'] = 'Você deve definir a tabela do banco de dados a ser usada com sua consulta.';
$lang['db_must_use_set'] = 'Você deve usar o método "set" para atualizar uma entrada.';
$lang['db_must_use_index'] = 'Você deve especificar um índice para correspondência nas atualizações em lote.';
$lang['db_batch_missing_index'] = 'Uma ou mais linhas enviadas para atualização em lote não possuem o índice especificado.';
$lang['db_must_use_where'] = 'As atualizações não são permitidas, a menos que contenham uma cláusula "where".';
$lang['db_del_must_use_where'] = 'As exclusões não são permitidas, a menos que contenham uma cláusula "where" ou "like".';
$lang['db_field_param_missing'] = 'As exclusões não são permitidas, a menos que contenham uma cláusula "where" ou "like".';
$lang['db_unsupported_function'] = 'Este recurso não está disponível para o banco de dados que você está usando.';
$lang['db_transaction_failure'] = 'Falha na transação: reversão realizada.';
$lang['db_unable_to_drop'] = 'Não é possível eliminar o banco de dados especificado.';
$lang['db_unsupported_feature'] = 'Recurso não suportado da plataforma de banco de dados que você está usando.';
$lang['db_unsupported_compression'] = 'O formato de compactação de arquivo escolhido não é compatível com seu servidor.';
$lang['db_filepath_error'] = 'Não foi possível gravar dados no caminho do arquivo enviado.';
$lang['db_invalid_cache_path'] = 'O caminho do cache enviado não é válido nem gravável.';
$lang['db_table_name_required'] = 'Um nome de tabela é necessário para essa operação.';
$lang['db_column_name_required'] = 'Um nome de coluna é necessário para essa operação.';
$lang['db_column_definition_required'] = 'Uma definição de coluna é necessária para essa operação.';
$lang['db_unable_to_set_charset'] = 'Não foi possível definir o conjunto de caracteres de conexão do cliente: %s';
$lang['db_error_heading'] = 'Ocorreu um erro de banco de dados';
