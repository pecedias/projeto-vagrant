cd C:\Program Files\MySQL\MySQL Server 5.7\bin
mysqldump -h 192.168.33.3 -u root -p1234 teste > C:\Users\fabio\Programas\Vagrant\aula\backup\backup_bd.sql


cd C:\Users\fabio\Programas\Vagrant\aula\backup\

vagrant up

pscp -scp backup_bd.sql vagrant@192.168.33.4:/home/vagrant

vagrant halt