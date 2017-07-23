#!/bin/python3

import math


def solve(a):
    count = len(a)
    if count == 1:
        return "YES"

    center = math.floor(count / 2)
    a_left = sum(a[0:center])
    a_right = sum(a[center + 1:])
    direction = None

    while center > 0 and center < count - 1:
        if a_left < a_right:
            if direction == "LEFT":
                return "NO"

            a_left = a_left + a[center]
            a_right = a_right - a[center + 1]
            center = center + 1
            direction = "RIGHT"
        elif a_left > a_right:
            if direction == "RIGHT":
                return "NO"

            a_left = a_left - a[center - 1]
            a_right = a_right + a[center]
            center = center - 1
            direction = "LEFT"
        else:
            return "YES"

    return "NO"


if __name__ == "__main__":
    T = int(input().strip())
    for a0 in range(T):
        n = int(input().strip())
        a = list(map(int, input().strip().split(' ')))
        result = solve(a)
        print(result)
