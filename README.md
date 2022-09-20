# mail-server
Personal mail server with iRedMail


Друзья, Вашему вниманию представлена инструкция по установке и настройке email сервера со всеми тонкостями и подводными камнями. Надеюсь, что людям хватит ума оставить в стороне "красные кнопки" и эта информация кому-то пригодятся.

Вся инструкция здесь:
https://www.linuxbabe.com/mail-server/debian-10-buster-iredmail-email-server

если данная страница перестанет быть доступной, то Вы сможете найти её в архиве (/code/main_instruction.zip)

Качать iRedMail отсюда:
git clone https://github.com/iredmail/iRedMail.git

#devops #mail #email #iredmail
Чтобы гуглик не ругался:
/etc/postfix/main.cf
    inet_protocols = ipv4
systemctl reload postfix

Чтобы сервер принимал письма MX запись:
Type: MX
Name: yourdomain.who
Server: send.yourdomain.who
Priotiy: 0

Ещё есть такая штука:
 - https://github.com/mailcow/mailcow-dockerized (осторожно, Docker!)
 - https://habr.com/ru/post/539736/
 - https://www.s-sols.com/ru/setup-own-mail-server
 - https://www.youtube.com/watch?v=bY4n7MSLFSc
 - https://github.com/ddavness/power-mailinabox
 - https://www.linuxbabe.com/mail-server/debian-10-buster-iredmail-email-server !!!
 - https://www.youtube.com/watch?v=VptKRBVeCMo
