pscp -scp vagrant@192.168.33.4:/home/vagrant/backup_bd.sql C:\Users\fabio\Programas\Vagrant\aula\backup\

cd C:\Program Files\MySQL\MySQL Server 5.7\bin
mysql -h 192.168.33.3 -u root -p1234 teste < C:\Users\fabio\Programas\Vagrant\aula\backup\backup_bd.sql
