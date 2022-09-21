/etc/postfix/main.cf
    inet_protocols = ipv4
systemctl reload postfix

Чтобы сервер принимал письма MX запись:
Type: MX
Name: yourdomain.who
Server: send.yourdomain.who
Priotiy: 0

Inf;
https://serverfault.com/questions/714241/vps-email-setup-can-send-but-cant-receive?newreg=a4eae60719464cada879e213d4eb21c8
