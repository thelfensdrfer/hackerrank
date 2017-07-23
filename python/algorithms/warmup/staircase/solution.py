#!/bin/python3


if __name__ == "__main__":
    n = int(input().strip())
    spaces = n
    while (spaces > 0):
        spaces = spaces - 1
        print(" " * spaces + "#" * (n - spaces))
