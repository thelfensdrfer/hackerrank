#!/bin/python3

import math


def get_ways(n, factor, c, ways):
    number_coins = len(c)

    if number_coins == 0:
        return ways
    elif number_coins > 1:
        print(str(factor) + "*" + str(c[0]))
        n = n - (factor * c[0])

        if n < 0:
            return ways

        if n == 0:
            print('FOUND')
            return ways + 1

        max_possible = math.ceil(n / c[0])
        for j in range(max_possible + 1):
            print(n, j, c[1:], ways)
            ways = get_ways(n, j, c[1:], ways)

    return ways


if __name__ == "__main__":
    print("WIP!")
    exit(1)
    n, m = input().strip().split(' ')
    n, m = [int(n), int(m)]
    c = sorted(list(map(int, input().strip().split(' '))), reverse=True)

    ways = 0
    max_possible = math.ceil(n / c[0])
    for j in range(max_possible + 1):
        print(n, j, c, ways)
        ways = get_ways(n, j, c, ways)

    print(ways)
