# DockerMYSQL_PHP

fire up terminal in the project folder

$ docker-compose up
or
$ docker-compose up -d

list running container

$ docker ps


Remember:

php:7-apache image doesnt come with mysqli installed

i installed the mysqli from inside the php container 

	# docker-php-ext-install mysqli
	
then commited the new changes to the same image(php:7-apache)

	# docker commit -p <container name> <new/old image name>
	# docker commit -p <container name> php:7-apache