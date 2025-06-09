all:
	wget https://www.sqlitetutorial.net/wp-content/uploads/2018/03/chinook.zip
	unzip chinook.zip
	ln -s ${PWD##*/} ../chinook
	chmod 666 chinook.db
	#SQLite requires the folder containing the database to be writeable.
	chmod 777 .
clean:
	rm -f chinook.*
