#!/bin/bash

if [ x"${PORT}" == "x" ]; then 
	echo "ENV PORT is not assigned"
	PORT=8080
fi

echo "Starting Server @ localhost:$PORT"
./php -S localhost:$PORT -t webroot/
