#!/bin/python3


def getTotalX(a, b):
    total_x = 0

    for possible_x in range(100):
        possible_x = possible_x + 1
        found = True

        for i in a:
            if (possible_x % i != 0):
                found = False
                break

        if found is True:
            for j in b:
                if (j % possible_x != 0):
                    found = False
                    break

        if found is True:
            total_x = total_x + 1

    return total_x


if __name__ == "__main__":
    n, m = input().strip().split(' ')
    n, m = [int(n), int(m)]
    a = list(map(int, input().strip().split(' ')))
    b = list(map(int, input().strip().split(' ')))
    print(getTotalX(a, b))
