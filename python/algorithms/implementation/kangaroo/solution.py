#!/bin/python3


def kangaroo(x1, v1, x2, v2):
    if (x1 > x2 and v1 > v2):
        return "NO"

    if (x2 > x1 and v2 > v1):
        return "NO"

    for i in range(10000):
        if (x1 == x2):
            return "YES"

        x1 = x1 + v1
        x2 = x2 + v2

    return "NO"


if __name__ == "__main__":
    x1, v1, x2, v2 = input().strip().split(' ')
    x1, v1, x2, v2 = [int(x1), int(v1), int(x2), int(v2)]
    result = kangaroo(x1, v1, x2, v2)
    print(result)
