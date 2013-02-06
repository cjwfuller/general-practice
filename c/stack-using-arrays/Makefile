CC = gcc -std=c99
CFLAGS = -pedantic -Wall -g

main: main.o my_stack.o
	$(CC) $(CFLAGS) -o main main.o my_stack.o

main.o: main.c my_stack.h
	$(CC) $(CFLAGS) -c main.c

stack.o: my_stack.c my_stack.h
	$(CC) $(CFLAGS) -c my_stack.c
