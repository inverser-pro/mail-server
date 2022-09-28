# mail-server
Personal mail server with iRedMail

**OS:** Debian 11

[Офиц. сайт, требования и доступные ОС там же](https://iredmail.org/download.html)

[YouTube — моё видео](https://www.youtube.com/watch?v=qGdR1eag06Q)

Друзья, Вашему вниманию представлена инструкция по установке и настройке email сервера со всеми тонкостями и подводными камнями. Надеюсь, что людям хватит ума оставить в стороне "красные кнопки" и эта информация кому-то пригодятся.

### Инструкция по началу установки и др. данные:

https://www.linuxbabe.com/mail-server/debian-10-buster-iredmail-email-server

[iRedMail инструкция установки](https://docs.iredmail.org/install.iredmail.on.debian.ubuntu.html)

если данная страница перестанет быть доступной, то Вы сможете найти её в архиве (```/code/main_instruction.zip```)

### Качать iRedMail отсюда:

```git clone https://github.com/iredmail/iRedMail.git```

### Чтобы гуглик не ругался:

в файле ```/etc/postfix/main.cf```

Ищем ```inet_protocols = all``` меняем на ```inet_protocols = ipv4```

Выполним команду
```systemctl reload postfix```

**Чтобы сервер принимал письма MX запись:**
- Type: MX
- Name: yourdomain.who
- Server: send.yourdomain.who
- Priotiy: 0

Ещё есть такая штука:
 - https://github.com/mailcow/mailcow-dockerized (осторожно, Docker!)
 - https://habr.com/ru/post/539736/
 - https://www.s-sols.com/ru/setup-own-mail-server
 - https://www.youtube.com/watch?v=bY4n7MSLFSc
 - https://github.com/ddavness/power-mailinabox
 - https://www.linuxbabe.com/mail-server/debian-10-buster-iredmail-email-server !!!
 - https://www.youtube.com/watch?v=VptKRBVeCMo
