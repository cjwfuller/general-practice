CC = gcc -std=c99
CFLAGS = -pedantic -Wall -g

main: main.o my_ll.o
	$(CC) $(CFLAGS) -o run main.o my_ll.o

main.o: main.c my_ll.h
	$(CC) $(CFLAGS) -c main.c

stack.o: my_ll.c my_ll.h
	$(CC) $(CFLAGS) -c my_ll.c
