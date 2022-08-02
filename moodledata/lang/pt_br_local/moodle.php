<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from https://ead.consultoriasquadra.com.br
 *
 * @package    core
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['newusernewpasswordtext'] = 'Olá, {$a->firstname}. Como vai?

Criamos uma nova conta para você na nossa nova plataforma de EAD.

Os seus dados atuais para o login são: 
usuário: {$a->username} 
senha: {$a->newpassword} <strong>(a primeira vez que você fizer o login será necessário alterar a senha)</strong>

Para começar a utilizar a nossa Plataforma de EAD, acesse {$a->link} e faça login.

Na maior parte dos programas de email a frase anterior aparece como um link azul que você pode clicar. Se este não é o seu caso, copie o endereço para a barra de endereços do seu navegador. 

Saudações de toda a equipe da Squadra Consultoria e seja muito bem vindo(a).

Esperamos que goste do curso e que ele lhe seja de bom proveito.

{$a->signoff}';
