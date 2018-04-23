cd /home/pecedias/Documents/vagrant/backup
vagrant up
vagrant ssh
mysqldump -h 192.168.33.11 -u root -p1234 teste > /home/pecedias/Documents/vagrant/backup/backup_bd.sql
exit
vagrant halt
