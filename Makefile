all:
	wget https://www.sqlitetutorial.net/wp-content/uploads/2018/03/chinook.zip
	unzip chinook.zip
	ln -s ${PWD##*/} ../chinook
clean:
	rm -f chinook.*
