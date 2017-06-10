#!/bin/python3


if __name__ == "__main__":
    n = int(input().strip())
    arr = [int(arr_temp) for arr_temp in input().strip().split(' ')]
    pos = 0
    neg = 0
    zeros = 0
    for i, val in enumerate(arr):
        if val > 0:
            pos += 1
        elif val < 0:
            neg += 1
        else:
            zeros += 1
    elementCount = len(arr)
    print("{}\n{}\n{}".format(pos/elementCount, neg/elementCount, zeros/elementCount))
