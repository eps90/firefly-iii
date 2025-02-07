<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Živjo,',
    'closing'                                 => 'Beep boop,',
    'signature'                               => 'Firefly III poštni robot',
    'footer_ps'                               => 'PS: To sporočilo je bilo poslano, ker ga je sprožila zahteva iz naslova IP :ipAddress.',

    // admin test
    'admin_test_subject'                      => 'Testno sporočilo Vaše Firefly III namestitve',
    'admin_test_body'                         => 'To je testno sporočilo iz vašega primerka Firefly III. Poslano je bilo na naslov :email.',

    // invite
    'invitation_created_subject'              => 'Ustvarjeno je bilo povabilo',
    'invitation_created_body'                 => 'Administratorski uporabnik ":email" je ustvaril povabilo, ki ga lahko uporabi vsak, ki se skriva za e-poštnim naslovom ":invitee". Vabilo velja 48 ur.',
    'invite_user_subject'                     => 'Povabljeni ste bili, da ustvarite račun Firefly III.',
    'invitation_introduction'                 => 'Povabljeni ste, da ustvarite račun Firefly III na **:host**. Firefly III je zasebni upravitelj osebnih financ, ki ga gostite sami. Uporabljajo ga vsi kul otroci.',
    'invitation_invited_by'                   => 'Povabil vas je ":admin", to vabilo pa je bilo poslano ":invitee". To ste vi, kajne?',
    'invitation_url'                          => 'Vabilo velja 48 ur in ga lahko unovčite tako, da brskate po spletnem mestu [Firefly III](:url). Uživajte!',

    // new IP
    'login_from_new_ip'                       => 'Nova prijava v Firefly III',
    'slack_login_from_new_ip'                 => 'Nova prijava v Firefly III iz IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III je zaznal novo prijavo v vaš račun z neznanega IP-naslova. Če se še nikoli niste prijavili s spodnjega IP-naslova ali je to že več kot šest mesecev nazaj, vas bo program Firefly III opozoril.',
    'new_ip_warning'                          => 'Če ta naslov IP ali prijavo prepoznate, tega sporočila ne upoštevajte. Če se niste prijavili ali če nimate pojma, za kaj gre, preverite varnostno geslo, ga spremenite in odjavite vse druge seje. To storite tako, da obiščete stran svojega profila. Seveda že imate omogočeno funkcijo 2FA, kajne? Ostanite varni!',
    'ip_address'                              => 'IP naslov',
    'host_name'                               => 'Gostitelj',
    'date_time'                               => 'Datum + ura',

    // access token created
    'access_token_created_subject'            => 'Nov žeton za dostop je bil ustvarjen',
    'access_token_created_body'               => 'Nekdo (upajmo da Vi) je ustvaril nov Firefly III API dostopni žeton za Vaš uporabniški račun.',
    'access_token_created_explanation'        => 'S tem žetonom lahko prek vmesnika API Firefly III dostopajo do **vseh** vaših finančnih evidenc.',
    'access_token_created_revoke'             => 'Če to niste bili vi, čim prej prekličite ta žeton na :url',

    // registered
    'registered_subject'                      => 'Dobrodošli v Firefly III!',
    'registered_subject_admin'                => 'Registriral se je nov uporabnik',
    'admin_new_user_registered'               => 'Registriral se je nov uporabnik. Uporabniku **:email** je bilo dodeljeno uporabniško ime #:id.',
    'registered_welcome'                      => 'Dobrodošli v [Firefly III](:address). Vaša registracija je bila opravljena in to e-poštno sporočilo jo potrjuje. Juhu!',
    'registered_pw'                           => 'Če ste geslo že pozabili, ga ponastavite z uporabo [orodja za ponastavitev gesla](:address/password/reset).',
    'registered_help'                         => 'V zgornjem desnem kotu vsake strani je ikona pomoči. Če potrebujete pomoč, jo kliknite!',
    'registered_doc_html'                     => 'Če še niste, preberite [veliko teorijo] (https://docs.firefly-iii.org/about-firefly-iii/personal-finances).',
    'registered_doc_text'                     => 'Če tega še niste storili, preberite tudi navodila za prvo uporabo in celoten opis.',
    'registered_closing'                      => 'Uživajte!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Ponastavitev gesla:',
    'registered_doc_link'                     => 'Dokumentacija:',

    // new version
    'new_version_email_subject'               => 'Na voljo je nova različica Firefly III',

    // email change
    'email_change_subject'                    => 'Vaš Firefly III poštni naslov je bil spremenjen',
    'email_change_body_to_new'                => 'Vi ali nekdo z dostopom do vašega računa Firefly III je spremenil vaš e-poštni naslov. Če tega sporočila niste pričakovali, ga prezrite in izbrišite.',
    'email_change_body_to_old'                => 'Vi ali nekdo z dostopom do vašega računa Firefly III je spremenil vaš e-poštni naslov. Če tega niste pričakovali, morate za zaščito svojega računa slediti spodnji povezavi "razveljaviti"!',
    'email_change_ignore'                     => 'Če ste sprožili to spremembo, lahko to sporočilo mirno prezrete.',
    'email_change_old'                        => 'Star poštni naslov je bil: :email',
    'email_change_old_strong'                 => 'Stari e-poštni naslov je bil: **:email**',
    'email_change_new'                        => 'Nov poštni naslov je: :email',
    'email_change_new_strong'                 => 'Novi e-poštni naslov je: **:email**',
    'email_change_instructions'               => 'Dokler te spremembe ne potrdite, Firefly III ne morete uporabljati. Za to sledite spodnji povezavi.',
    'email_change_undo_link'                  => 'Če želite preklicati spremembo, sledite tej povezavi:',

    // OAuth token created
    'oauth_created_subject'                   => 'Ustvarjen je bil nov odjemalec OAuth',
    'oauth_created_body'                      => 'Nekdo (upam, da vi) je pravkar ustvaril novega odjemalca Firefly III API OAuth za vaš uporabniški račun. Ima oznako ":name" in povratni naslov URL `:url`.',
    'oauth_created_explanation'               => 'S tem odjemalcem lahko prek vmesnika API Firefly III dostopajo do **vseh** vaših finančnih evidenc.',
    'oauth_created_undo'                      => 'Če to niste bili vi, čim prej prekličite to stranko na naslovu `:url`',

    // reset password
    'reset_pw_subject'                        => 'Vaša zahteva za ponastavitev gesla',
    'reset_pw_instructions'                   => 'Nekdo je poskušal ponastaviti vaše geslo. Če ste to storili vi, sledite spodnji povezavi.',
    'reset_pw_warning'                        => '**PROSIM** preverite, ali povezava dejansko vodi do Firefly III, kamor naj bi vodila!',

    // error
    'error_subject'                           => 'Ujeli napako v Firefly III',
    'error_intro'                             => 'Firefly III v:version se je zaletel v napako: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Napaka je bila tipa ":class".',
    'error_timestamp'                         => 'Napaka se je pojavila ob/pri: :time.',
    'error_location'                          => 'Ta napaka se je pojavila v datoteki "<span style="font-family: monospace;">:file</span>" v vrstici :line s kodo :code.',
    'error_user'                              => 'Na napako je naletel uporabnik #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Za to napako ni bil prijavljen noben uporabnik ali pa ni bil zaznan noben uporabnik.',
    'error_ip'                                => 'Naslov IP, povezan s to napako, je: :ip',
    'error_url'                               => 'URL je: :url',
    'error_user_agent'                        => 'Uporabniški agent: :userAgent',
    'error_stacktrace'                        => 'Celoten stacktrace je spodaj. Če mislite, da je to bug v Firefly III, lahko to sporočilo posredujete na <a href="mailto:james@firefly-iii.org?subject=BUG!">james@firefly-iii.org</a>. To lahko pomaga popraviti hrošča, ki ste ga pravkar naleteli.',
    'error_github_html'                       => 'Če vam je ljubše, lahko odprete tudi novo vprašanje na <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHubu</a>.',
    'error_github_text'                       => 'Če želite, lahko novo številko odprete tudi na spletnem mestu https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Celotna stacktrace je spodaj:',
    'error_headers'                           => 'The following headers may also be relevant:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III has created a new transaction|Firefly III has created :count new transactions',
    'new_journals_header'                     => 'Firefly III has created a transaction for you. You can find it in your Firefly III installation:|Firefly III has created :count transactions for you. You can find them in your Firefly III installation:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Your bill ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'       => 'Your bill ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'     => 'Your bill ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date' => 'Your bill ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                   => 'Your bill **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'             => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'              => 'Your bill **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'        => 'Your bill **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'              => 'Please take the appropriate action.',

];
