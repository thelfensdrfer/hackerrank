#!/bin/python3


if __name__ == "__main__":
    s, t = input().strip().split(' ')
    s, t = [int(s), int(t)]
    a, b = input().strip().split(' ')
    a, b = [int(a), int(b)]
    m, n = input().strip().split(' ')
    m, n = [int(m), int(n)]
    apples = [int(apple_temp) for apple_temp in input().strip().split(' ')]
    oranges = [int(orange_temp) for orange_temp in input().strip().split(' ')]

    apples_on_house = 0
    oranges_on_house = 0

    for apple in apples:
        if (apple + a >= s and apple + a <= t):
            apples_on_house = apples_on_house + 1

    for orange in oranges:
        if (orange + b >= s and orange + b <= t):
            oranges_on_house = oranges_on_house + 1

    print(apples_on_house)
    print(oranges_on_house)
