#!/bin/python3


def birthdayCakeCandles(n, ar):
    ar = sorted(ar)
    largest_candle = max(ar)
    num_candles = 0

    for i in reversed(ar):
        if (i == largest_candle):
            num_candles = num_candles + 1

    return num_candles


if __name__ == "__main__":
    n = int(input().strip())
    ar = list(map(int, input().strip().split(' ')))
    print(birthdayCakeCandles(n, ar))
