#!/bin/python3


def getRecord(games):
    best = 0
    worst = 0

    last_best = games[0]
    last_worst = games[0]

    for score in games:
        if score > last_best:
            last_best = score
            best += 1
        elif score < last_worst:
            last_worst = score
            worst += 1

    return [best, worst]


if __name__ == "__main__":
    n = int(input().strip())
    s = list(map(int, input().strip().split(' ')))
    result = getRecord(s)
    print(" ".join(map(str, result)))
