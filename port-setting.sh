#!/bin/bash

stty -F /dev/ttyUSB1 cs8 9600 ignbrk -brkint -imaxbel -opost -onlcr -isig -icanon -iexten -echo -echoe -echok -echoctl -echoke noflsh -ixon -crtscts 

tail -f /dev/ttyUSB0 &
